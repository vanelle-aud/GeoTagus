<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Zone extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'id', 'nom', 'description', 'altitude', 'nbr_sommet'
    ];
     public function type_zone(){
         return $this->belongsTo('App\Type_zone', 'type_zones_id');
     }
     public function sommets(){
         return $this->hasMany('App\Sommet', 'zones_id');
     }

}
