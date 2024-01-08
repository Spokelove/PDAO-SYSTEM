<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeviceInput extends Model
{
    use  HasFactory;
    
    protected $fillable = [
        'device', 
        'quantity',
         'date_received'
    ];
 
}