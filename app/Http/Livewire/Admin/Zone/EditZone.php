<?php

namespace App\Http\Livewire\Admin\Zone;

use Livewire\Component;

class EditZone extends Component
{
    public function render()
    {
        return view('livewire.admin.zone.edit-zone')->layout('admin.layouts.main');
    }
}
