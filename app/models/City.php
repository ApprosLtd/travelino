<?php
  
class City extends Eloquent
{
    public $table = 'core_geos';    
    
    /**
    * Возвращает страну
    * 
    */
    public function country()
    {
        return Geo::find($this->geo->parent_id);
    }
    
    
    /**
    * Возарвщвет географические координаты
    * 
    */
    public function geo()
    {
        return $this->hasOne('Geo', 'id', 'id');
    }
    
    
    /**
    * Возвращает ...
    * 
    * @param mixed $language
    */
    public function lang($language)
    {
        return $this->geo->lang($language);
    }
}