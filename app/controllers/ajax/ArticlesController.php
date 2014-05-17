<?php

namespace Ajax;

class ArticlesController extends AjaxController
{    
    protected $limit = 50;
    
    
    /**
    * Возвращает JSON списка статей
    * 
    */
    public static function index($page = 1, $limit = 30)
    {
        $page  = \Input::get('page', $page);
        
        $limit = \Input::get('limit', $limit);
        
        $json = array(
            'success' => true,
            'results' => static::cacheArticlesList($page, $limit),
        );
        
        return \Response::json($json);
    }
    
    
    /**
    * Возвращает JSON одной статьи
    * 
    * @param mixed $id
    */
    public function show($id)
    {   
        $record = $this->cacheArticleNode($id);
        
        return \Response::json($record);
    }
    
    
    /**
    * Возвращает кэш списка статей
    * 
    * @param mixed $page
    * @param mixed $limit
    */
    public static function cacheArticlesList($page = 1, $limit = 30)
    {
        $cache_tag = 'articles-page-' . $page . '-limit-' . $limit;
        
        $records = \Cache::rememberForever($cache_tag, function() use ($page, $limit)
        {
            $offset = ($page - 1) * $limit;
            
            $records = \Article::where('description', '!=', '')->offset($offset)->take($limit)->get();
            
            $data = array();
            
            if ($records) {
                
                foreach ($records AS $record) {
                    
                    $rec = new \stdClass();
                    
                    $rec->id = $record->id;
                    $rec->note = \Str::limit($record->description, 170);
                    $rec->title = $record->title;
                    $rec->title_limit = \Str::limit($record->title, 28);
                    $rec->image = $record->getImage(270, 190);
                    
                    $data[] = $rec;
                }
            }
            
            return $data;
        });
        
        return $records;
    }
    
    
    /**
    * Возвращает кэш одной статьи
    * 
    * @param mixed $id
    */
    public function cacheArticleNode($id)
    {
        $cache_tag = 'article-' . $id;
        
        $record = \Cache::rememberForever($cache_tag, function() use ($id)
        {
            $record = \Article::find($id);
            
            $record->picture = $record->getImage();
            
            $record = $record->toArray();
            
            return $record;
        });
        
        return $record;
    }
    
}