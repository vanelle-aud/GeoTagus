<?php

namespace App\Http\Livewire\Admin\Zone;

use App\Zone;
use Livewire\Component;

class ShowMap extends Component
{
    public $zones;
    public $dataszone;
    
    

    public function mount(){
        $this->zones = Zone::all();
        $this->dataszone =  $this->make_data_zone( $this->zones );

    }


    public function make_data_zone($data){
       
        $tab_sommets = []; 
        $tab_descriptions =[];


        foreach($data as $zone){

            if($zone->sommets->count() >= 3 ){

                $curent_tab_sommet =[];
                $curent_tab_zone =[];
    
                foreach($zone->sommets as $so){
                    $curent_tab_sommet = [ $so->latitude, $so->longitude];
                    array_push( $curent_tab_zone, $curent_tab_sommet ); 
                }
    
                array_push( $tab_descriptions, $zone->description);
                array_push( $tab_sommets, $curent_tab_zone);

            }
         
        }

        return [ $tab_sommets, $tab_descriptions];
    }
    public function render()
    {
        return view('livewire.admin.zone.show-map');
    }
}
