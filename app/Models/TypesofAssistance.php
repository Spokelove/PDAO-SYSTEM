<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypesofAssistance extends Model
{
    use HasFactory;

    protected $table = '_assistancetypes'; // Specify the table name if different from the model name

    protected $fillable = [
   
        'Assistance_Types'
      
       

  
     
    ];

    // Optionally, you can define relationships or other model-specific methods here
}
