<?php

class Geo extends Eloquent
{
    public $table = 'core_geos';
    
    public function lang($language)
    {
        return $this->hasMany('GeoLang', 'id', 'id')->where('language', '=', $language)->first();
    }
    
}