<?php

class WhoisController extends \BaseController
{
    public function getIndex()
    {
        $whois = new \PhpWhois\Whois('appros.ru');
        return $whois->lookup();
    }
}
