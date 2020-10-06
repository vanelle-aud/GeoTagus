<?php

namespace App\Http\Livewire\Admin\Typezone;

use Livewire\Component;

class EditTypezone extends Component
{
    public function render()
    {
        return view('livewire.admin.typezone.edit-typezone')->layout('admin.layouts.main');
    }
}
