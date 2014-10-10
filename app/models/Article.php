<?php
  
class Article extends Eloquent
{
    public $table = 'xdata_euromag_ru';


    /**
     * Возвращает кэш списка статей
     *
     * @param mixed $page
     * @param mixed $limit
     */
    public static function cacheArticlesList($page = 1, $limit = 30)
    {
        $cache_tag = 'articles-page-' . $page . '-limit-' . $limit;

        $records = \Cache::remember($cache_tag, 1, function() use ($page, $limit)
        {
            $offset = ($page - 1) * $limit;

            $records = \Article::where('description', '!=', '')->offset($offset)->take($limit)->orderBy('created_at', 'DESC')->get();

            $data = array();

            if ($records) {

                foreach ($records AS $record) {

                    $rec = new \stdClass();
                    
                    $record->description = strip_tags($record->description);

                    $rec->id          = $record->id;
                    $rec->note        = \Str::limit($record->description, 170);
                    $rec->title       = $record->title;
                    $rec->title_limit = \Str::limit($record->title, 28);
                    $rec->image       = $record->getImage(270, 190);
                    $rec->translit    = $record->translit;

                    $data[] = $rec;
                }
            }

            return $data;
        });

        return $records;
    }


    /**
     * Возвращает кэш одной статьи по транслиту
     *
     * @param mixed $id
     */
    public static function cacheArticleNode($translit)
    {
        $cache_tag = 'article:' . $translit;

        $record = \Cache::rememberForever($cache_tag, function() use ($translit)
        {
            $record = \Article::where('translit', '=', $translit)->first();

            $record->picture = $record->getImage();

            $record = $record->toArray();

            return $record;
        });

        return $record;
    }


    /**
     * Возвращает кэш статьи по ID
     * @param $id
     * @return mixed
     */
    public static function cacheArticleById($id)
    {
        // TODO: доделать кеширование как в функции Article::cacheArticleNode
        return \Article::find($id)->toArray();
    }


    /**
     * Кеширует картинку с удаленного сервера источника, и возвращает адрес этой картинки
     * @param null $width
     * @param null $height
     * @return string
     */
    public function getImage($width = null, $height = null)
    {
        
        if ($width > 0 and $height > 0) {
            $image_dir  = '/data/images/' . $width . 'x' . $height . '/';
        } else {
            $image_dir  = '/data/images/full/';
        }
        
        $server_dir = $_SERVER['DOCUMENT_ROOT'] . $image_dir;
        
        if (!file_exists($server_dir)) {
            mkdir($server_dir);
        }

        $ext = strtolower( \File::extension($this->source_picture) );

        $image_name = 'art' . $this->id . '-' . md5($this->source_picture) . '.' . $ext;
        
        $image_file = $image_dir . $image_name;
        
        if (!file_exists($_SERVER['DOCUMENT_ROOT'] . $image_file)) {
            
            $source_domain = '';
            
            $source_picture_prefix = strtolower( substr($this->source_picture, 0, 4) );
            
            if ( ($source_picture_prefix != 'http') and ($this->source_id > 0) ) {
                $source_domain = 'http://www.euromag.ru';
            }
            
            $file = $source_domain . $this->source_picture;

            try {
                $phpthumb = App::make('phpthumb');

                if ($width > 0 and $height > 0) {
                    $phpthumb->create('crop', array($file, 'center', $width, $height));
                } else {
                    $phpthumb->create(null, array($file));
                }

                $phpthumb->save($server_dir, $image_name, 'jpg');
            } catch (\Exception $e) {
                //echo "<p>({$ext})<a href='{$file}' target='_blanck'>> {$file}</a></p>";
            }
            

            
        }
        
        return $image_file;
    }

}