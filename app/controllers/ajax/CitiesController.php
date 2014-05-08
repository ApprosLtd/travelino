<?php

namespace Ajax;

class CitiesController extends AjaxController
{    
    protected $limit = 50;
    
    public function index()
    {
        $page = \Input::get('page', 1);
        
        $records = \City::take($this->limit)->cacheTags(array('cities-page-' . $page . '-limit-' . $this->limit))->remember(5)->get();
        
        if ($records) {
            $data = array('cities' => array());
            foreach ($records AS $record) {
                $data['cities'][] = array(
                    'id'   => $record->id,
                    'cid'  => $record->id,
                    'name_en' => $record->lang('en_US')->name,
                    'name_ru' => $record->lang('ru_RU')->name,
                    'country_id' => $record->country()->id,
                    'country_name_en' => $record->country()->lang('en_US')->name,
                    'country_name_ru' => $record->country()->lang('ru_RU')->name,
                );
            }
        } else {
            $data = array();
        }
        
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