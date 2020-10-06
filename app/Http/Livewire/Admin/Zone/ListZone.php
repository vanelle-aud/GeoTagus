<?php

namespace App\Http\Livewire\Admin\Zone;

use App\Zone;
use Livewire\Component;

class ListZone extends Component
{
    public $zones;

    public function mount(){
        $this->zones = Zone::all();
    }

    public function render()
    {
        return view('livewire.admin.zone.list-zone')->layout('admin.layouts.main',['title', 'Liste des Zones']);
    }
}
