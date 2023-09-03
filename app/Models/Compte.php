<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compte extends Model
{
    protected $fillable = [
        'compte_type',
        'company_name',
        'industry',
        'location',
        'website',
        'phone_number',
        // Add more fields here
    ];
}
