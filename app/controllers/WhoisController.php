<?php

class WhoisController extends \BaseController
{
    public function getIndex()
    {
        $whois = new \PhpWhois\Whois\Whois('appros.ru');
        return $whois->lookup();
    }
}
