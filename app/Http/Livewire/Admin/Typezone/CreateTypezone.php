<?php

namespace App\Http\Livewire\Admin\Typezone;

use App\Type_zone;
use Livewire\Component;
use MercurySeries\Flashy\Flashy;

class CreateTypezone extends Component
{
    public $intitule;
    public $commentaire;

    public function mount(){

    }

    public function save(){
        $this->validate([
            'intitule'=> 'required|min:3',
            'commentaire' => 'required|max:255'
        ]);
        $typezone = new Type_zone();
        $typezone->intitule = $this->intitule;
        $typezone->commentaire = $this->commentaire;

        $typezone->save();
        Flashy::success('Message', 'reussite de l\'enregistrement');
        return redirect()->route('admin.typezone.list');
    }

    public function render()
    {
        return view('livewire.admin.typezone.create-typezone')->layout('admin.layouts.main',['title'=>'Creer type de zone']);
    }
}
