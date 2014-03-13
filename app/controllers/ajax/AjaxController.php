<?php

namespace Ajax;

/**
* Основной контроллер AJAX
* 
*/
abstract class AjaxController extends \Controller
{
    public function missingMethod($parameters = array())
    {
        return 'fooNONO';
    }
}