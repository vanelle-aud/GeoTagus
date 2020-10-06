<?php

namespace App\Http\Livewire\Admin\Zone;

use App\Sommet;
use App\Type_zone;
use App\Zone;
use Livewire\Component;

class ShowZone extends Component
{
    public $latitude;
    public $longitude;
    public $nbr_sommet;
    public $sommets=[];

    public  $zone;

    public function mount($id){
        $this->zone = Zone::find($id);
    }

    public function submit(){

    }

    private function recup($latitude, $longitude){

        $point= new Sommet();
        $point->longitude = $longitude;
        $point->latitude = $latitude;
        $point->zones_id = $this->zone->id;
        $point->save();

//        array_push( $this->sommets, $point);

    }


    public function savepointdm(){

    }

//    public function savepoint(){
//        $this->recup($this->longitude, $this->latitude);
//    }

    public function savepoint(){
        $this ->validate([
            'latitude' => 'required',
            'longitude' => 'required',
        ]);

        $this->recup($this->latitude, $this->longitude);
        $this->latitude =0;
        $this->longitude =0;

    }
    public function render()
    {
        return view('livewire.admin.zone.show-zone')->layout('admin.layouts.main');
    }
}
