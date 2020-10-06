<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Sommet extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'latitude', 'longitude',
    ];
    public $timestamps=false;
    public function zone(){
        return $this->belongsTo('App\Zone','zones_id');
    }

}
