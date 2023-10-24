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
    
    
}
