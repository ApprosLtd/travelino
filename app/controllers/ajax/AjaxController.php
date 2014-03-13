<?php

namespace Ajax;

/**
* Основной контроллер AJAX
* 
*/
abstract class AjaxController extends \Controller
{
    protected $data = NULL;
    
    public function __construct()
    {
        $this->data = new \stdClass();
        
        $this->afterFilter(function(){
            //echo 'gooppg';
        });
    }
    
    public function missingMethod($parameters = array())
    {
        return 'missingMethod';
    }
    
    protected function setupLayout()
    {        
        $data = array_merge_recursive(array(
            'success' => false
        ), (array) $this->data);
        
        $this->layout = \Response::json($data);
    }
}