<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Type_zone extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'id', 'intitule', 'commentaire',
    ];

    public function zones(){
        return $this->hasMany('App\Zone','type_zones_id');
    }


}
