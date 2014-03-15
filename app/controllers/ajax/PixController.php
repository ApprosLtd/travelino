<?php

namespace Ajax;

use Appros\LaravelOAuth\TwitterOAuth;
  
class PixController extends AjaxController
{
    public function index()
    {
        $data = array(400);
        
        $data = new TwitterOAuth('500px');
        
        
        return \Response::json($data);
    }
}