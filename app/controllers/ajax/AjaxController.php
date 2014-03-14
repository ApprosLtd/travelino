<?php

namespace Ajax;

/**
* Основной контроллер AJAX
* 
*/
abstract class AjaxController extends \Controller
{
    public $data = NULL;
    
    public function __construct()
    {
        $this->data = new \stdClass();
    }
}