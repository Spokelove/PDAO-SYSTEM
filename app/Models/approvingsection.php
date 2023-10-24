<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class approvingsection extends Model
{
    use HasFactory;

protected $table = 'approvingsection'; // Specify the table name if different from the model name

    protected $fillable = [
        
    
        'last_name_of_encoder',
        'first_name_of_encoder',
        'middle_name_of_encoder',
        'suffix_of_encoder',

        'last_name_of_reporting_unit',
        'first_name_of_reporting_unit',
        'middle_name_of_reporting_unit',
        'suffix_of_reporting_unit',

        'last_name_of_control_unit',
        'first_name_of_control_unit',
        'middle_name_of_control_unit',
        'suffix_of_control_unit',
    ];

    public function pwdmember()
    {
        return $this->belongsTo(Pwdmember::class);
    }
}

