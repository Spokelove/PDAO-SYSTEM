<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class familyback extends Model
{
    use HasFactory;

protected $table = 'familyback__idrefences'; // Specify the table name if different from the model name

    protected $fillable = [
        
         'father_last_name',    
         'father_first_name',
         'father_middle_name',
         'father_last_name',
         'suffic_of_father',
         'mother_last_name',
         'mother_first_name',
         'mother_middle_name',
         'guardian_last_name',
         'guardian_first_name',
         'guardian_middle_name',
         'suffix_of_guardian',
         'sss_no',
         'gsis_no',
         'pag-ibig_no',
         'philhealth',
         'occupations'
    ];

    public function pwdmember()
    {
        return $this->belongsTo(Pwdmember::class);
    }
    
}

