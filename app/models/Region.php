<?php


class Region extends Eloquent
{
    public $table = 'expedia_ParentRegionList';
    
    
    /**
    * Возвращает перевод для имени региона.
    * 
    */
    public function lang()
    {
        return $this->hasOne('RegionLang', 'RegionID', 'RegionID')->first();
    }
    
    
    /**
    * Возвращает координаты области ограничивающей город.
    * Только для городов.
    */
    public function coordinates()
    {
        return $this->hasOne('CityCoordinates', 'RegionID', 'RegionID')->first()->Coordinates;
    }
    
    
    /**
    * Возвращает координаты центра региона.
    * 
    */
    public function center()
    {
        $regionCenter = $this->hasOne('RegionCenter', 'RegionID', 'RegionID');
        
        $center = new stdClass();
        $center->lat = NULL;
        $center->lng = NULL;
        
        if ($regionCenter) {
            $regionCenter = $regionCenter->first();
            $center->lat  = $regionCenter->CenterLatitude;
            $center->lng  = $regionCenter->CenterLongitude;
        }
        
        return $center;
    }
    
    
    /**
    * Фильтрует регионы, возвращает только города.
    * 
    */
    public static function city()
    {
        return self::where('RegionType', '=', 'City');
    }
}