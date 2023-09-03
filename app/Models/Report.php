<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = ['title', 'description', 'report_type']; // Define the fillable fields.

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
    
}
