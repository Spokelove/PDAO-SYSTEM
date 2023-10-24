<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class organizationaccomp extends Model
{
    use HasFactory;

protected $table ='organization_accomplished'; // Specify the table name if different from the model name

    protected $fillable = [
        
        'house_and_street' ,
        'purok',
        'barangay' ,
        'municipality',
        'province',
        'region' ,
        'landline',
        'mobile_no',
        'email_add',
        'educational_attain',
        'status_of_employment',
        'types_of_employment' ,
        'category_of_employment'
    ];

    public function pwdmember()
    {
        return $this->belongsTo(Pwdmember::class);
    }
}

