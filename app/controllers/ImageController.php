<?php

class ImageController extends Controller {

    protected function getIndex($width, $height, $id)
    {        
        $node = Article::find($id);
        
        if ($node) {
            
            $file = 'http://www.euromag.ru' . $node->picture;
            
            App::make('phpthumb')
                ->create('crop', array($file, 'center', $width, $height))
                //->create('crop', array($file, 'basic', 100, 100, 300, 200))
                //->create('resize', array($file, 400, 400, 'adaptive'))
                //->rotate(array('degree', 180))
                //->reflection(array(40, 40, 80, true, '#a4a4a4'))
                //->save(base_path() . '/', 'aaa.jpg');
                ->show();
            
        }

    }

}