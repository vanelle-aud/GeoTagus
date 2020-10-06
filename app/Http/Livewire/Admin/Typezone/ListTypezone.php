<?php

namespace App\Http\Livewire\Admin\Typezone;

use App\Type_zone;
use Livewire\Component;

class ListTypezone extends Component
{
    public $types;

    public function mount(){
        $this->types = Type_zone::all();
    }
    public function render()
    {
        return view('livewire.admin.typezone.list-typezone')->layout('admin.layouts.main');
    }
}
