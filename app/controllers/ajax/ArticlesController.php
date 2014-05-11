<?php

namespace Ajax;

class ArticlesController extends AjaxController
{    
    protected $limit = 50;
    
    public function index()
    {
        $page = \Input::get('page', 1);
        
        $limit = 30;
        
        $cache_tag = 'articles-page-' . $page . '-limit-' . $limit;
        
        $records = \Cache::rememberForever($cache_tag, function() use ($limit)
        {
            $records = \Article::where('description', '!=', '')->take($limit)->get();
            
            $data = array();
            
            if ($records) {
                
                foreach ($records AS $record) {
                    
                    $rec = new \stdClass();
                    
                    $rec->id = $record->id;
                    $rec->note = \Str::limit($record->description, 170);
                    $rec->title = $record->title;
                    $rec->title_limit = \Str::limit($record->title, 28);
                    $rec->image = $record->getImage(270, 190);
                    
                    $data[] = $rec;
                }
            }
            
            return $data;
        });
        
        $json = array(
            'success' => true,
            'results' => $records,
        );
        
        return \Response::json($json);
    }
    
    public function show($id)
    {   
        $cache_tag = 'article-' . $id;
        
        $record = \Cache::rememberForever($cache_tag, function() use ($id)
        {
            $record = \Article::find($id);
            
            $record->picture = $record->getImage();
            
            $record = $record->toArray();
            
            return $record;
        });
        
        return \Response::json($record);
    }
}