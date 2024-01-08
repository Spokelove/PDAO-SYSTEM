<?php

// app/Models/Masterledger.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Masterledger extends Model
{
    use HasFactory;

    protected $table = 'masterledger';

    protected $fillable = [
        'pwd_member_id',
        // '_masterlist_id',
        'last_name',
        'first_name',
        'middle_name',
        'suffix_of_applicant',
        'Types_id',
        'Program_id',
        'Amount',
        'Unit',
        'Particular',
        'Assistance_Name',
        'Description',
        'Date_Received'
    ];

    // Define relationships or additional methods as needed

    // public function pwdMember()
    // {
    //     return $this->belongsTo(PwdMember::class, 'pwdmember_id', 'id');
    // }

    // public function masterlist()
    // {
    //     return $this->belongsTo(Masterlist::class, '_masterlist_id', 'id');
    // }
    


    // public function pwdMember()
    // {
    //     return $this->belongsTo(PwdMember::class);
    // }

    // public function masterlist()
    // {
    //     return $this->belongsTo(_Masterlist::class, '_masterlist_id');
    // }

    public function pwdMember()
    {
        return $this->belongsTo(PwdMember::class, 'pwd_member_id');
    }

public function masterlists()
{
    return $this->hasMany(Masterlist::class);
}
    // Masterledger model
    public function typesOfAssistance()
    {
        return $this->belongsTo(TypesOfAssistance::class, 'Types_id', 'id');
    }
    
    
        public function typesOfProgram()
        {
            return $this->belongsTo(ProgramAssistance::class, 'Program_id');
        }
    
}
