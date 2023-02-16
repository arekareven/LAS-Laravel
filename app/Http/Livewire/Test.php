<?php

namespace App\Http\Livewire;

use App\Models\Customer;
use Livewire\Component;

class Test extends Component
{
    public $currentStep = 1;
    public $name, $marital_status, $place_of_birth, $id_card_number, $phone_number;
    public $successMessage = '';

    public function render()
    {
        return view('livewire.test');
    }

    public function firstStepSubmit()
    {
        $validatedData = $this->validate([
            // 'name' => 'required|unique:products',
            'name' => 'required',
            'marital_status' => 'required',
            'place_of_birth' => 'required',
        ]);

        $this->currentStep = 2;
    }

    public function secondStepSubmit()
    {
        $validatedData = $this->validate([
            'id_card_number' => 'required|numeric',
            'phone_number' => 'required|numeric',
        ]);

        $this->currentStep = 3;
    }

    public function submitForm()
    {
        Customer::create([
            'name' => $this->name,
            'marital_status' => $this->marital_status,
            'place_of_birth' => $this->place_of_birth,
            'id_card_number' => $this->id_card_number,
            'place_of_birth' => $this->place_of_birth,
        ]);

        $this->successMessage = 'Product Created Successfully.';

        $this->clearForm();

        $this->currentStep = 1;
    }

    public function back($step)
    {
        $this->currentStep = $step;
    }

    public function clearForm()
    {
        $this->name = '';
        $this->marital_status = '';
        $this->place_of_birth = '';
        $this->id_card_number = '';
        $this->place_of_birth = 1;
    }
}
