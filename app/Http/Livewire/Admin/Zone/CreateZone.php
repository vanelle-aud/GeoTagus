<?php

namespace App\Http\Livewire\Admin\Zone;
use App\Sommet;
use App\Type_zone;
use App\Zone;
use Livewire\Component;

class CreateZone extends Component
{

    public $nom;
    public $nbr_sommet;
    public $description;
    public $altitude;
    public $type_zones_id;
    public $types;


    public function mount(){
        $this->types = Type_zone::all();
    }

    public function save()
    {

        $this ->validate([
            'nom' => 'required',
            'altitude' => 'required',
            'nbr_sommet' => 'required',
            'description' => 'required',
            'type_zones_id' => 'required|integer',
        ]);

        $zone = new Zone();
        $zone->nom = $this->nom;
        $zone->altitude = $this->altitude;
        $zone->nbr_sommet= $this->nbr_sommet;
        $zone->description = $this->description;
        $zone->type_zones_id = $this->type_zones_id;
        $zone->save();
        return redirect()->route('admin.zone.list');

    }


    public function render()
    {
        return view('livewire.admin.zone.create-zone')->layout('admin.layouts.main');
    }
}
