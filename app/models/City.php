<?php
  
class City extends Eloquent
{
    public $table = 'core_geos';
    
    public function country()
    {
        return Geo::find($this->geo->parent_id);
    }
    
    public function geo()
    {
        return $this->hasOne('Geo', 'id', 'id');
    }
    
    public function lang($language)
    {
        return $this->geo->lang($language);
    }
}