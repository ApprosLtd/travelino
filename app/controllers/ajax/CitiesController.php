<?php

namespace Ajax;

class CitiesController extends AjaxController
{    
    protected $limit = 50;
    
    public function index()
    {
        $page = \Input::get('page', 1);
        
        $limit = $this->limit;
        
        $cache_tag = 'cities-page-' . $page . '-limit-' . $limit;
        
        $records = \Cache::rememberForever($cache_tag, function() use ($limit)
        {
            $records = \City::take($limit)->get();
            
            $data = array();
            
            if ($records) {
                
                foreach ($records AS $record) {
                    $data[] = array(
                        'id'   => $record->id,
                        'cid'  => $record->id,
                        'name_en' => $record->lang('en_US')->name,
                        'name_ru' => $record->lang('ru_RU')->name,
                        'country_id' => $record->country()->id,
                        'country_name_en' => $record->country()->lang('en_US')->name,
                        'country_name_ru' => $record->country()->lang('ru_RU')->name,
                    );
                }
            }
            
            return $data;
        });
        
        $data = array('cities' => $records);
        
        return \Response::json($data);
    }
    
    public function show($id)
    {        
        $record = \City::find($id);
        
        if ($record) {
            $data = array(
                'city' => array(
                    'id'   => $record->id,
                    'cid'  => $record->id,
                    'name_en' => $record->lang('en_US')->name,
                    'name_ru' => $record->lang('ru_RU')->name,
                    'country_id' => $record->country()->id,
                    'country_name_en' => $record->country()->lang('en_US')->name,
                    'country_name_ru' => $record->country()->lang('ru_RU')->name,
                )
            );
        } else {
            $data = array();
        }
        
        return \Response::json($data);
    }
}