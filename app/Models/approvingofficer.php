<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class approvingofficer extends Model
{
    use HasFactory;

protected $table = '_approvingofficer'; // Specify the table name if different from the model name

    protected $fillable = [
        
        'licensed_no_of_physician',
        'last_name_of_physician',
        'first_name_of_physician',
        'middle_name_of_physician',
        'suffix_of_physician',
        'last_name_of_processing_officer',
        'first_name_of_processing_officer',
        'middle_name_of_processing_officer',
        'suffix_of_processing_officer',
        'last_name_of_approving_officer',
        'first_name_of_approving_officer',
        'middle_name_of_approving_officer',
        'suffix_of_approving_officer',
    ];

    public function pwdmember()
    {
        return $this->belongsTo(Pwdmember::class);
    }
}
