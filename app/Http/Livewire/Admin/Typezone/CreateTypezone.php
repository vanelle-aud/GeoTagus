<?php

namespace App\Http\Livewire\Admin\Typezone;

use App\Type_zone;
use Livewire\Component;
use MercurySeries\Flashy\Flashy;

class CreateTypezone extends Component
{
    public $nom;
    public $description;

    public function mount(){

    }

    public function save(){
        $this->validate([
            'nom'=> 'required|min:3',
            'description' => 'required|max:255'
        ]);
        $typezone = new Type_zone();
        $typezone->nom = $this->nom;
        $typezone->description = $this->description;

        $typezone->save();
        Flashy::success('Message', 'reussite de l\'enregistrement');
        return redirect()->route('admin.typezone.list');
    }

    public function render()
    {
        return view('livewire.admin.typezone.create-typezone')->layout('admin.layouts.main',['title'=>'Creer type de zone']);
    }
}
