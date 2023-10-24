<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class devices extends Model
{
    use HasFactory;

protected $table = 'devices_given'; // Specify the table name if different from the model name

    protected $fillable = [
        
         'device_given',    
         
    ];

    public function pwdmember()
    {
        return $this->hasMany(Device::class, 'pwdmember_id', 'id');
    }
    
}

