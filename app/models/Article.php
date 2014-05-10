<?php
  
class Article extends Eloquent
{
    public $table = 'xdata_euromag_ru';
    
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
        
        $image_name = 'art' . $this->id . '-' . md5($this->picture) . '.jpg';
        
        $image_file = $image_dir . $image_name;
        
        if (!file_exists($_SERVER['DOCUMENT_ROOT'] . $image_file)) {
            
            $file = 'http://www.euromag.ru' . $this->picture;
            
            $phpthumb = App::make('phpthumb');
            
            if ($width > 0 and $height > 0) {
                $phpthumb->create('crop', array($file, 'center', $width, $height));
            } else {
                $phpthumb->create(null, array($file));
            }
            
            $phpthumb->save($server_dir, $image_name, 'jpg');
            
        }
        
        return $image_file;
    }
}