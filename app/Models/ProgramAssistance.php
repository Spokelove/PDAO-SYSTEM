<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramAssistance extends Model
{
    use HasFactory;

    protected $table = 'programofassistance'; // Specify the table name if different from the model name

    protected $fillable = [
   
        'Program_Types'
      
       

  
     
    ];

    // Optionally, you can define relationships or other model-specific methods here
}
