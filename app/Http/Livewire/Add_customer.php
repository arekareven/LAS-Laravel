<?php

namespace App\Http\Livewire;

use App\Models\Customer;
use Livewire\Component;

class Add_customer extends Component
{
    public $currentStep = 1;
    public $name, $place_of_birth, $date_of_birth, $gender, $marital_status, $id_card_number, $id_card_address;
    public $phone_number, $profession, $status_of_residence,$residence_address, $amenability,$education;
    public $successMessage = '';

    public function render()
    {
        return view('livewire.customer.add_customer');
    }

    public function edit()
    {
        return view('livewire.customer.edit_customer');
    }

    public function firstStepSubmit()
    {
        $validatedData = $this->validate([
            // 'name' => 'required|unique:products',
            'name' => 'required',
            'place_of_birth' => 'required',
            'date_of_birth' => 'required',
            'gender' => 'required',
            'marital_status' => 'required',
            'id_card_number' => 'required|numeric',
            'id_card_address' => 'required'
        ]);

        $this->currentStep = 2;
    }

    public function secondStepSubmit()
    {
        $validatedData = $this->validate([
            'phone_number' => 'required|numeric',
            'profession' => 'required',
            'status_of_residence' => 'required',
            'residence_address' => 'required',
            'amenability' => 'required|numeric',
            'education' => 'required',
        ]);

        $this->currentStep = 3;
    }

    public function submitForm()
    {
        Customer::create([
            'name' => $this->name,
            'place_of_birth' => $this->place_of_birth,
            'date_of_birth' => $this->date_of_birth,
            'gender' => $this->gender,
            'marital_status' => $this->marital_status,
            'id_card_number' => $this->id_card_number,
            'id_card_address' => $this->id_card_address,
            'phone_number' => $this->phone_number,
            'profession' => $this->profession,
            'status_of_residence' => $this->status_of_residence,
            'residence_address' => $this->residence_address,
            'amenability' => $this->amenability,
            'education' => $this->education,
        ]);

        $this->successMessage = 'Data Nasabah Berhasil ditambahkan';

        return view('menu.background.customer.view');
        // $this->clearForm();
        // $this->currentStep = 1;
    }

    public function back($step)
    {
        $this->currentStep = $step;
    }

    // public function clearForm()
    // {
    //     $this->name = '';
    //     $this->place_of_birth = '';
    //     $this->date_of_birth = '';
    //     $this->gender = '';
    //     $this->marital_status = '';
    //     $this->id_card_number = '';
    //     $this->id_card_address = '';
    //     $this->phone_number = '';
    //     $this->profession = '';
    //     $this->status_of_residence = '';
    //     $this->residence_address = '';
    //     $this->amenability = '';
    //     $this->education = '';
    // }
}
