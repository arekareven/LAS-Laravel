<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'marital_status'
        // 'name', 'marital_status', 'place_of_birth', 'date_of_birth', 'id_card_number',
        // 'phone_number', 'status_of_residence', 'profession', 'id_card_address',
        // 'residence_address', 'amenability', 'education', 'gender'
    ];
}
