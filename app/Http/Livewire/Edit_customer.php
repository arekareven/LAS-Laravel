<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Edit_customer extends Component
{
    public $data;

    public function render()
    {
        return view('livewire.customer.edit_customer',$data);
    }
}
