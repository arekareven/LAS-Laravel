<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Capacity extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_application', 'business_name', 'business_sector', 'business_status',
        'phone_number', 'business_start', 'customer_start', 'deed_number',
        'profession', 'deed_date', 'npwp', 'npwp_date',
        'business_address', 'content'
    ];
}
