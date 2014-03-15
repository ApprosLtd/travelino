<?php

class Country extends Eloquent
{
    public $table = 'core_countries';
    
    public function continent()
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