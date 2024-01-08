<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pwdmember extends Model
{
    use HasFactory;

protected $table = 'pwd_member'; // Specify the table name if different from the model name

    protected $fillable = [
        
        'pwd_no',
        'date_applied',
        'application',
        'last_name',
        'first_name',   
        'middle_name',
        'suffix_of_applicant',
        'birthday',
        'age',
        'gender',
        'status',
        'image_path',
        'email_add'
    ];
   
     
        public function residence()
        {
            return $this->hasOne(Residence::class);
        }
    
        public function familyback()
        {
            return $this->hasOne(FamilyBack::class); // Assuming "FamilyBack" is the correct model name
        }
    
        public function organizationaccomp()
        {
            return $this->hasOne(OrganizationAccomp::class);
        }
    
        public function approvingofficer()
        {
            return $this->hasOne(ApprovingOfficer::class);
        }
    
        // public function approvingsection()
        // {
        //     return $this->hasOne(ApprovingSection::class);
        // }
    

        public function approvingsection()
    {
        return $this->hasOne(Approvingsection::class, 'pwdmember_id');
    }

    
        public function typesdisability()
        {
            return $this->hasMany(TypesDisability::class);
        }
    
        public function causedisability()
        {
            return $this->hasMany(CauseDisability::class);
        }
    
        public function devices()
        {
            return $this->hasMany(Devices::class); 
        }
    
       
        public function setBirthdayAttribute($value)
        {
            $this->attributes['birthday'] = $value;
            $birthdate = new \DateTime($value);
            $today = new \DateTime('today');
            $this->attributes['age'] = $birthdate->diff($today)->y;
        }

        public function masterledger()
        {
            return $this->hasOne(Masterledger::class, 'pwd_member_id');
        }
    
      
    }
    
    
