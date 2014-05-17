<?php

namespace Ajax;

class ArticlesController extends AjaxController
{    
    protected $limit = 50;
    
    
    /**
    * Возвращает JSON списка статей
    * 
    */
    public static function index($page = 1, $limit = 30)
    {
        $page  = \Input::get('page', $page);
        
        $limit = \Input::get('limit', $limit);
        
        $json = array(
            'success' => true,
            'results' => \Article::cacheArticlesList($page, $limit),
        );
        
        return \Response::json($json);
    }
    
    
    /**
    * Возвращает JSON одной статьи
    * 
    * @param mixed $id
    */
    public function show($id)
    {   
        $record = \Article::cacheArticleById($id);
        
        return \Response::json($record);
    }

}