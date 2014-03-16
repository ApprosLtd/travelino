<?php

namespace Ajax;

use Appros\LaravelOAuth\TwitterOAuth;
  
class PixController extends AjaxController
{
    public function index()
    {
        $data = array(400);
        
        $connection = new TwitterOAuth('500px');
        
        $data = $connection->get('photos/search', array(
            'term' => 'москва',
            'rpp' => 5,
            'only' => 'City & Architecture',
            'image_size' => 3
        ));
        
        
        return \Response::json($data);
    }
}