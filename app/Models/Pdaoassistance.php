<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;




class Pdaoassistance extends Model
{
    use HasFactory;

    protected $table = 'typesofassistance'; // Specify the table name if different from the model name

    protected $fillable = [
   
      'last_name',
      'first_name',
      'middle_name',
      'suffix',
      'birthday',
      'age',
      'Barangay',
      'purok',
      'gender',
      'identification',
      'assistance',
      'disability',
      'date_received',
       

  
     
    ];

    // Optionally, you can define relationships or other model-specific methods here
}

