<?php

namespace Ajax;

class CountriesController extends AjaxController
{    
    protected $limit = 50;
    
    public function index()
    {
        $page = \Input::get('page', 1);
        
        $records = \City::take(50)->get();
        
        if ($records) {
            $data = array('countries' => array());
            foreach ($records AS $rec) {
                $data['countries'][] = array(
                    'id'   => $rec->RegionID,
                    'cid'  => $rec->RegionID,
                    'name' => $rec->RegionName
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
                'country' => array(
                    'id'   => $record->RegionID,
                    'cid'  => $record->RegionID,
                    'name' => $record->RegionName,
                )
            );
        } else {
            $data = array();
        }
        
        return \Response::json($data);
    }
}