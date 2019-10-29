<?php

namespace App;


trait HasParent
{
    public static function boot()
    {
        parent::boot();
        echo get_called_class();
        static::addGlobalScope(function ($query) {
            $query->where('type', get_called_class());
        });
        static::creating(function ($vehicle) {
            
            $vehicle->type = get_called_class();
        });
    }
}
