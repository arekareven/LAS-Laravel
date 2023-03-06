<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_customer', 'plafond', 'credit_type', 'application_type', 'purpose',
        'purpose_description', 'time_period', 'application_date', 'analysis_date',
        'status'
    ];
}
