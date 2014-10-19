<?php

class WhoisController extends \BaseController
{
    public function getIndex()
    {
        header('Content_type: text/plain');
        
        $whois = new \PhpWhois\Whois('appros.ru');
        return $whois->lookup();
    }
}
