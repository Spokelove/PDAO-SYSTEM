<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class organizationaccomp extends Model
{
    use HasFactory;

protected $table ='organization_accomplished'; // Specify the table name if different from the model name

    protected $fillable = [
        'organizational_affiliated_name',
        'contact_person',
        'office_address',
        'tel_no',
        'applicant_last_name',
        'applicant_first_name',
        'applicant_middle_name',
        'suffix_of_applicant',
        'guardian_last_name',
        'guardian_first_name',
        'guard_middle_name',
        'guardian_suffix',

       'representative_last_name',
       'representative_first_name',
       'representative_middle_name',
       'representative_suffix'
     

    ];

    public function pwdmember()
    {
        return $this->belongsTo(Pwdmember::class);
    }
}

