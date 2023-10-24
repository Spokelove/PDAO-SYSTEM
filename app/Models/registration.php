<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class registration extends Model
{
    use HasFactory;

    protected $fillable = ['pwd_no','date_applied','application','last_name','first_name','middle_name','middle_name','middle_name','suffix_of_applicant',
    'suffix_of_applicant','birthday','age','gender','status','image_path','house_and_street','purok','barangay','municipality','province','region','landline',
    'mobile_no','email_add','educational_attain','status_of_employment','types_of_employment','category_of_employment','types_of_disease','kinds_of_disease',
    'organizational_affliated_name','contact_person','office_address','tel no.','gsis_no','pag-ibig_no','psn_no', 'philhealth','occupations','father_last_name',
    'father_first_name','father_middle_name','suffix_of_father','mother_last_name','mother_first_name','mother_middle_name','guardian_last_name','guardian_first_name',
    'guardian_middle_name','suffix_of_guardian','last_name_of_accomplished_by','first_name_of_accomplished_by','middle_name_of_accomplished_by','suffix_of_accomplished_by',
'licensed_no_of_physician','last_name_of_physician','first_name_of_physician','middle_name_of_physician','suffix_of_physician','last_name_of_processing_officer','first_name_of_processing_officer',
'middle_name_of_processing_officer','suffix_of_processing_officer','last_name_of_approving_officer','first_name_of_approving_officer','middle_name_of_approving_officer','suffix_of_approving_officer',
'last_name_of_encoder','first_name_of_encoder','middle_name_of_encoder','suffix_of_encoder','last_name_of_reporting_unit','first_name__of_reporting_unit','middle_name_of_reporting_unit','suffix_of_reporting_unit',
'last_name_of_control_unit','first_name__of_control_unit','middle_name_of_control_unit','suffix_of_control_unit'];
 
// public function store($data){
//       return $this->create($data);
// }

}



             

    