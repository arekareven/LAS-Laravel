<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testing extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'marital_status', 'place_of_birth', 'date_of_birth', 'id_card_number',
        'phone_number', 'status_of_residence', 'profession', 'id_card_address',
        'residence_address', 'amenability', 'education', 'gender', 'office_number',
        'mate_name', 'mate_place_of_birth', 'mate_date_of_birth', 'mate_id_card_address',
        'mate_residence_address', 'mate_profession', 'mate_phone_number', 'family_name',
        'family_relationship', 'family_residence_address', 'family_phone_number'
    ];
}
