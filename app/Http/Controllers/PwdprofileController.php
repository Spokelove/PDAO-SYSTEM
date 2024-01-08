<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\EducationalAttainment;
use App\Models\Purok;
use App\Models\Barangay;
use App\Models\Municipality;
use App\Models\statusEmployment;
use App\Models\CategoryEmployment;
use App\Models\typeEmployment;
use App\Models\Occupation;
use App\Models\registration;
use App\Models\residence;
use Illuminate\Support\Facades\DB;
use App\Models\Pwdmember;
use App\Models\familyback;
use App\Models\organizationaccomp;
use App\Models\approvingofficer;
use App\Models\approvingsection;
use App\Models\typesdisability;
use App\Models\causedisability;
use App\Models\Profilling;
use App\Models\devices;
use App\Models\id;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\PwdMemberExport; // Palitan ang 'YourExportClass' ng eksaktong pangalan ng iyong export class
use App\Exports\listperBarangayExport;







  class PwdprofileController extends Controller
  {
    public function index()
    {
      
        $results = PwdMember::select(
            'pwd_member.id',
            'pwd_member.pwd_no',
            'pwd_member.date_applied',
            'pwd_member.birthday',
            'pwd_member.application',
            'pwd_member.last_name',
            'pwd_member.first_name',
            'pwd_member.middle_name',
            'organization_accomplished.suffix_of_applicant',
            'pwd_member.gender',
            DB::raw('TIMESTAMPDIFF(YEAR, pwd_member.birthday, CURDATE()) AS age'),
            'pwd_member.status',
            'residence.pwdmember_id',
            'residence.purok',
            'residence.house_and_street',
            'residence.barangay',
            'residence.municipality',
            'familyback__idrefences.occupations',
            'typesdisability.types_of_disability',
            'causedisability.cause_of_disability',
            'familyback__idrefences.father_last_name',
            'familyback__idrefences.father_first_name',
            'familyback__idrefences.father_middle_name',
            'familyback__idrefences.mother_last_name',
            'familyback__idrefences.mother_first_name',
            'familyback__idrefences.mother_middle_name',
            'familyback__idrefences.sss_no',
            'familyback__idrefences.pag_ibig_no',
            'familyback__idrefences.gsis_no',
            'familyback__idrefences.philhealth',
            'approvingsection.first_name_of_control_unit',
            'approvingsection.middle_name_of_control_unit',
            'approvingsection.middle_name_of_reporting_unit', // Add this line
            'devices_given.device_given'
        )
            ->join('residence', 'pwd_member.id', '=', 'residence.pwdmember_id')
            ->join('familyback__idrefences', 'pwd_member.id', '=', 'familyback__idrefences.pwdmember_id')
            ->join('typesdisability', 'pwd_member.id', '=', 'typesdisability.pwdmember_id')
            ->join('causedisability', 'pwd_member.id', '=', 'causedisability.pwdmember_id')
            ->join('approvingsection', 'pwd_member.id', '=', 'approvingsection.pwdmember_id')
            ->leftJoin('organization_accomplished', 'pwd_member.id', '=', 'organization_accomplished.pwdmember_id')
            ->leftJoin('devices_given', 'pwd_member.id', '=', 'devices_given.pwdmember_id')
            ->get();
    
        // Your further processing logic here
    
      
      
  
          $attainments = EducationalAttainment::all();
          $puroks = Purok::all();
          $barangays = Barangay::all();
          $municipalities = Municipality::all();
          $employments = StatusEmployment::all();
          $categorys = CategoryEmployment::all();
          $types = TypeEmployment::all();
          $occupations = Occupation::all();
          $devicesGiven = devices ::all();
      
          return view('Pwdprofile.index', compact('devicesGiven','results', 'attainments', 'puroks', 'barangays', 'municipalities', 'employments', 'categorys', 'types', 'occupations'));
      }




      
      public function search(Request $request)
      {
          $query = $request->input('query');
      
          $results = PwdMember::select(
              'pwd_member.id',
              'pwd_member.pwd_no',
              'pwd_member.date_applied',
              'pwd_member.birthday',
              'pwd_member.application',
              'pwd_member.last_name',
              'pwd_member.first_name',
              'pwd_member.middle_name',
              'pwd_member.suffix_of_applicant',
              'pwd_member.gender',
              DB::raw('TIMESTAMPDIFF(YEAR, pwd_member.birthday, CURDATE()) AS age'),
              'pwd_member.status',
              'residence.pwdmember_id',
              'residence.purok',
              'residence.house_and_street',
              'residence.barangay',
              'residence.municipality',
              'familyback__idrefences.occupations',
              'typesdisability.types_of_disability',
              'causedisability.cause_of_disability',
              'familyback__idrefences.father_last_name',
              'familyback__idrefences.father_first_name',
              'familyback__idrefences.father_middle_name',
              'familyback__idrefences.mother_last_name',
              'familyback__idrefences.mother_first_name',
              'familyback__idrefences.mother_middle_name',
              'familyback__idrefences.sss_no',
              'familyback__idrefences.pag_ibig_no',
              'familyback__idrefences.gsis_no',
              'familyback__idrefences.philhealth',
              'approvingsection.first_name_of_control_unit',
              'approvingsection.middle_name_of_control_unit',
              'approvingsection.middle_name_of_reporting_unit', // Add the new field from approvingsection table
              'devices_given.device_given'
          )
              ->leftJoin('residence', 'pwd_member.id', '=', 'residence.pwdmember_id')
              ->leftJoin('familyback__idrefences', 'pwd_member.id', '=', 'familyback__idrefences.pwdmember_id')
              ->leftJoin('typesdisability', 'pwd_member.id', '=', 'typesdisability.pwdmember_id')
              ->leftJoin('causedisability', 'pwd_member.id', '=', 'causedisability.pwdmember_id')
              ->leftJoin('approvingsection', 'pwd_member.id', '=', 'approvingsection.pwdmember_id')
              ->leftJoin('devices_given', 'pwd_member.id', '=', 'devices_given.pwdmember_id')
              ->where(function ($queryBuilder) use ($query) {
                  $queryBuilder->where('pwd_member.last_name', 'like', '%' . $query . '%')
                      ->orWhere('pwd_member.first_name', 'like', '%' . $query . '%')
                      ->orWhere('pwd_member.middle_name', 'like', '%' . $query . '%')
                      ->orWhere('residence.barangay', 'like', '%' . $query . '%')
                      ->orWhere('pwd_member.application', 'like', '%' . $query . '%')
                      ->orWhere('pwd_member.birthday', 'like', '%' . $query . '%')
                      ->orWhere('approvingsection.middle_name_of_control_unit', 'like', '%' . $query . '%')
                      ->orWhere('approvingsection.middle_name_of_reporting_unit', 'like', '%' . $query . '%'); // Add this line
              })
              ->paginate(10);
      
          // Your further processing logic here
      
     
        
      
          return view('pwdprofile.search', compact('results'));
      }
      
 }    
          
         
       
