<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class causedisability extends Model
{
    protected $table = 'causedisability';
    
    protected $fillable = ['cause_of_disability'];

   


    public function pwdmember()
    {
        return $this->hasMany(causedisability::class, 'pwdmember_id', 'id');
    }
    
    
}
