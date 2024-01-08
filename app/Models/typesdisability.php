<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class typesdisability extends Model
{
    protected $table = 'typesdisability';
    protected $fillable = ['types_of_disability'];

   


    public function pwdmember()
    {
        return $this->belongsTo(Pwdmember::class);
    }
   
    
    // // Mutator to save the value in the desired format
    // public function setTypesOfDisabilityAttribute($value)
    // {
    //     $this->attributes['types_of_disability'] = strtolower(trim($value, '"'));
    // }

    // // Accessor to retrieve the value in the desired format
    // public function getTypesOfDisabilityAttribute($value)
    // {
    //     return ucfirst($value); // ucfirst to capitalize the first letter
    // }
    
}
