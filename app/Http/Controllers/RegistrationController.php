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




class RegistrationController extends Controller

{
//  function _construct() 
//  {
//     $this->registration = new registration ;
//   }

 
    public function index ()
    {


     $pwdgraph = Pwdmember::selectRaw('MONTH(created_at) as month, COUNT(*) as count')
      ->whereYear('created_at', date('Y'))
      ->groupBy('month')
      ->orderBy('month')
      ->get();
  
  $labels = [];
  $data = [];
  $colors = ['#ff6384', '#36a2eb', '#ffce56', '#8bc34a', '#ff5722', '#009688', '#795548', '#9c27b0', '#2196f3', '#ff9800', '#cddc39', '#0607d8d'];
  
  for ($i = 1; $i <= 12; $i++) {
      $month = date('F', mktime(0, 0, 0, $i, 1));
      $count = 0;
  
      foreach ($pwdgraph as $pwdmember) {
          if ($pwdmember->month == $i) {
              $count = $pwdmember->count;
              break;
          }
      }
  
      array_push($labels, $month);
      array_push($data, $count);
  }
  
  $datasets = [
      [
          'label' => 'pwdgraph',
          'data' => $data,
          'backgroundColor' => $colors,
      ],
  ];
  







      //  dd($request);
  //  / $devices_given = devices_given::paginate(10);
    // $residences = Residence::paginate(10);
    // $Pwdmembers = PwdMember::paginate(10);
    // $causedisability = causedisability::paginate(10);
    // $typesdisability = typesdisability::paginate(10);
    
    $results = PwdMember::select(
      'pwd_member.id',
      'pwd_member.date_applied',
      'pwd_member.application',
      'pwd_member.last_name',
      'pwd_member.first_name',
      'pwd_member.middle_name',
      'pwd_member.suffix_of_applicant',
      'pwd_member.birthday',
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
      // 'devices_given.device_given'
  )
  ->join('residence', 'pwd_member.id', '=', 'residence.pwdmember_id')
  ->join('familyback__idrefences', 'pwd_member.id', '=', 'familyback__idrefences.pwdmember_id')
  ->join('typesdisability', 'pwd_member.id', '=', 'typesdisability.pwdmember_id')
  ->join('causedisability', 'pwd_member.id', '=', 'causedisability.pwdmember_id')
  // ->join('devices_given', 'pwd_member.id', '=', 'devices_given.pwdmember_id')
  ->get();
 
  // return view('profilling.index', compact('residences', 'Pwdmembers', 'results','typesdisability','causedisability',));
        
      $attainments = EducationalAttainment::all();
      $puroks = Purok::all();
      $barangays = Barangay::all();
      $municipalities = Municipality::all();
      $employments = StatusEmployment::all();
      $categorys = CategoryEmployment::all();
      $types =typeEmployment::all();
      $occupations =Occupation::all();
     
      return view ('Registration.index', compact('datasets','labels','attainments','puroks','barangays','municipalities','employments','categorys','types','occupations'));
       
    
    }

    public function create(){
      
      $attainments = EducationalAttainment::all();
      $puroks = Purok::all();
      $barangays = Barangay::all();
      $municipalities = Municipality::all();
      $employments = StatusEmployment::all();
      $categorys = CategoryEmployment::all();
      $types =typeEmployment::all();
      $occupations =Occupation::all();
      // $typesdisability = typesdisability::all();
      {
       
       
    }
      // $typesdisability = typesdisability::all();
     
   
      return view ('Registration.create', compact('attainments','puroks','barangays','municipalities','employments','categorys','types','occupations','types'));

      // return view ('Registration.create');
    }

    public function store(Request $request){
      {
        
      
        // dd($request);
      //  return dd($request);
        // Validate and store  Pwdmember


           $Pwdmember =  Pwdmember::create([
          'name' => $request->input('name'),
          'pwd_no' => $request->input('pwd_no'),
          'date_applied' => $request->input('date_applied'),
          'application' => $request->input('application'),
          'last_name' => $request->input('last_name'),
          'first_name' => $request->input('first_name'),
          'middle_name' => $request->input('middle_name'),
          'suffix_of_applicant' => $request->input('suffix_of_applicant'),
          'birthday' => $request->input('birthday'),
          'gender' => $request->input('gender'),
          
          'status' => $request->input('status'),
          'email_add' => $request->input('email_add'),
          'image_path' => $request->input('image_path'),


        ]);
  // ------------------------------------------------------------------------------------------------  
        

          $residence = new residence([      
          'house_and_street' => $request->input('house_and_street'),
          'purok' => $request->input('purok'),
          'barangay' => $request->input('barangay'),
          'municipality' => $request->input('municipality'),
          'province' => $request->input('province'),
          'region' => $request->input('region'),
          'landline' => $request->input('landline'),
          'mobile_no' => $request->input('mobile_no'),
          'email_add' => $request->input('email_add'),
          'educational_attain' => $request->input('educational_attain'),
          'status_of_employment' => $request->input('status_of_employment'),
          'types_of_employment' => $request->input('types_of_employment'),
          'category_of_employment' => $request->input('category_of_employment'),  
        ]);
        $Pwdmember->residence()->save($residence);
//  ----------------------------------------------------------------------------------------------------------------   
         

            $familyback = new familyback([
          'father_last_name' => $request->input('father_last_name'),
          'father_first_name' => $request->input('father_first_name'),
          'father_middle_name' => $request->input('father_middle_name'),
          'suffix_of_father' => $request->input('suffix_of_father'),
          'mother_last_name' => $request->input('mother_last_name'),
          'mother_first_name' => $request->input('mother_first_name'),
          'mother_middle_name' => $request->input('mother_middle_name'),
          'guardian_last_name' => $request->input('guardian_last_name'),
          'guardian_first_name' => $request->input('guardian_first_name'),
          'guardian_middle_name' => $request->input('guardian_middle_name'),
          'suffix_of_guardian' => $request->input('suffix_of_guardian'),
          'sss_no' => $request->input('sss_no'),
          'gsis_no' => $request->input('gsis_no'),
          'pag_ibig_no' => $request->input('pag_ibig_no'),
          'psn_no' => $request->input('psn_no'),
          'philhealth' => $request->input('philhealth'),
          'occupations' => $request->input('occupations'),
      
        ]);
        $Pwdmember->familyback()->save($familyback);

// ---------------------------------------------------------------------------------------------------------------------------
        

        $organizationaccomp = new organizationaccomp([
          'organizational_affliated_name' => $request->input('organizational_affliated_name'),
          'contact_person' => $request->input('contact_person'),
          'office_address' => $request->input('father_middle_name'),
          'tel_no' => $request->input('suffix_of_father'),
          'applicant_last_name' => $request->input('mother_last_name'),
          'applicant_first_name' => $request->input('mother_first_name'),
          'applicant_middle_name' => $request->input('mother_middle_name'),
          'suffix_of_applicant' => $request->input('guardian_last_name'),
          'guard_last_name' => $request->input('guardian_first_name'),
          'guardian_first_name' => $request->input('guardian_middle_name'),
           'guard_middle_name' => $request->input('guard_middle_name'),
          'guardian_suffix' => $request->input('suffix_of_guardian'),
          'representative_last_name' => $request->input('representative_last_name'),
          'representative_first_name' => $request->input('representative_first_name'),
          'representative_middle_name' => $request->input('representative_middle_name'),
          'representative_suffix' => $request->input('representative_suffix'),
         
          
        ]);
           $Pwdmember->organizationaccomp()->save($organizationaccomp);

// --------------------------------------------------------------------------------------------------------------------------

          $approvingofficer = new approvingofficer([
         'licensed_no_of_physician'=> $request->input('licensed_no_of_physician'),
         'last_name_of_physician'=> $request->input('last_name_of_physician'),
         'first_name_of_physician'=> $request->input('first_name_of_physician'),
         'middle_name_of_physician'=> $request->input('middle_name_of_physician'),
         'suffix_of_physician'=> $request->input('suffix_of_physician'),
        'last_name_of_processing_officer'=> $request->input('last_name_of_processing_officer'),
        'first_name_of_processing_officer'=> $request->input('first_name_of_processing_officer'),
        'middle_name_of_processing_officer'=> $request->input( 'middle_name_of_processing_officer'),
        'suffix_of_processing_officer'=> $request->input( 'suffix_of_processing_officer'),
       'last_name_of_approving_officer'=> $request->input( 'last_name_of_approving_officer'),
       'first_name_of_approving_officer'=> $request->input('first_name_of_approving_officer'),
       'middle_name_of_approving_officer'=> $request->input(  'middle_name_of_approving_officer'),
      'suffix_of_approving_officer'=> $request->input('suffix_of_approving_officer'),
        ]);
        $Pwdmember->approvingofficer()->save($approvingofficer);

// ---------------------------------------------------------------------------------------------------------------------------------
     
      $approvingsection = new approvingsection([
         
        'last_name_of_encoder'=> $request->input( 'last_name_of_encoder'), 
        'first_name_of_encoder'=> $request->input('first_name_of_encoder'), 
        'middle_name_of_encoder'=> $request->input('middle_name_of_encoder'),    
        'suffix_of_encoder'=> $request->input( 'suffix_of_encoder'),

        'last_name_of_reporting_unit'=> $request->input('last_name_of_reporting_unit'),   
        'first_name_of_reporting_unit'=> $request->input( 'first_name_of_reporting_unit'),     
        'middle_name_of_reporting_unit'=> $request->input('middle_name_of_reporting_unit'),      
        'suffix_of_reporting_unit'=> $request->input( 'suffix_of_reporting_unit'),
         

        'last_name_of_control_unit'=> $request->input( 'last_name_of_control_unit'),       
        'first_name_of_control_unit'=> $request->input('first_name_of_control_unit'),    
        'middle_name_of_control_unit'=> $request->input( 'middle_name_of_control_unit'),   
        'suffix_of_control_unit'=> $request->input( 'suffix_of_control_unit'),
     
         
        ]);
        $Pwdmember->approvingsection()->save($approvingsection);


  // ---------------------------------------------------------------------------------------------------------------------------------------------  
      
  
  
  $request->validate([
    'types_of_disability'=>'required',
   
]);

$typesdisability = new typesdisability ;          
$typesdisability->types_of_disability = json_encode($request->types_of_disability);
$Pwdmember->typesdisability()->save($typesdisability);

// ---------------------------------------------------------------------------------------------------------------------------------------------------


$request->validate([
'cause_of_disability'=>'required',

]);

$causedisability = new causedisability ;     
$causedisability->cause_of_disability = json_encode($request->cause_of_disability);
$Pwdmember->causedisability()->save($causedisability);

// ---------------------------------------------------------------------------------------------------------------------

$request->validate([
  'device_given' => 'nullable', // 'nullable' makes the field optional
]);

$devices = new Devices;
$devices->device_given = json_encode($request->device_given);
$Pwdmember->devices()->save($devices);

// return redirect()->route('registration.create')->with('message', 'SAVE! Successfully PWD Member');

// -----------------------------------------------------------------------------------------------------------------------------





// ---------------------------------------------------------------------------------------------------------------------------------
return redirect()->route('registration.create')->with('message', 'SAVE ! Successuflly PWD Member');
    }
}







public function search1(Request $request)

  {
  // dd($request);
  {
 
    $query = $request->input('query');
    
    $results = Pwdmember::select(
      'pwd_member.*',
      'residence.purok',
      'residence.house_and_street',
      'residence.barangay',
      'residence.municipality',
      'familyback__idrefences.occupations',
      'typesdisability.types_of_disability',
      'causedisability.cause_of_disability',
      'pwd_member.application'
  )
  ->leftJoin('residence', 'pwd_member.id', '=', 'residence.pwdmember_id')
  ->leftJoin('familyback__idrefences', 'pwd_member.id', '=', 'familyback__idrefences.pwdmember_id')
  ->leftJoin('typesdisability', 'pwd_member.id', '=', 'typesdisability.pwdmember_id')
  ->leftJoin('causedisability', 'pwd_member.id', '=', 'causedisability.pwdmember_id')
  ->where(function ($queryBuilder) use ($query) {
      $queryBuilder->where('last_name', 'like', '%' . $query . '%')
          ->orWhere('first_name', 'like', '%' . $query . '%')
          ->orWhere('middle_name', 'like', '%' . $query . '%')
          ->orWhere('birthday', 'like', '%' . $query . '%')
          ->orWhere('residence.barangay', 'like', '%' . $query . '%')
          ->orWhere('pwd_member.application', 'like', '%' . $query . '%');
  })
  ->paginate(10);

  return view('Profilling.search', compact('results'));
  }
}

// public function show($id)
// {

// }

public function edit($id)
{
    //  dd($id);

    $result = Pwdmember::with('residence','approvingofficer','approvingsection','causedisability','devices','familyback','organizationaccomp','typesdisability')
    ->findOrFail($id);
    // return response()->json($results);

  $attainments = EducationalAttainment::all();
  $puroks = Purok::all();
  $barangays = Barangay::all();
  $municipalities = Municipality::all();
  $employments = StatusEmployment::all();
  $categorys = CategoryEmployment::all();
  $types =typeEmployment::all();
  $occupations =Occupation::all();



  $typesdisabilities = typesdisability::all();
  $typesdisability = typesdisability::find($id);



  $disabilityOptions = [
    'Deaf or Hard Of Hearing',
    'Intellectual Disability',
    'Learning Disability',
    'Mental Disability',
    'Physical Disability (Orthopedic)',
    'Psychosocial Disability',
    'Speech and Language Impairment',
    'Deaf or Hard Of Hearing',
    'Cancer (RA11215)',
    'Rare Disease (RA10747)',

  ];

  $causeOfDisabilityOptions = [
    'Congenital /Inborn',
    'Austim',
    'ADHD',
    'Cerebral Palsy',
    'Down Syndrome',
    'Acquired',
    'Chronic Illness',
    'Celebral Palsy',
    'Injury)',
    'Other
    ',

  ];
  return view ('Registration.edit', compact('result', 'attainments','puroks','barangays','municipalities','employments','categorys','types','occupations','disabilityOptions','causeOfDisabilityOptions'));
       
}


public function update(Request $request, $id)
{
  // return dd($request);

  $pwdmember = Pwdmember::findOrFail($id);
  $request->validate([
    'image_path' => 'required', // Add validation rules for other fields as needed
    'pwd_no' => 'required',
    'date_applied' => 'required|date',
    'application' => 'required',
    'last_name' => 'required',
    'first_name' => 'required',
    'middle_name' => 'required',
    'suffix_of_applicant' => 'nullable', // Adjust validation rules as per your requirements
    'birthday' => 'required|date',
    'gender' => 'required|in:Male,Female', // Adjust gender options as needed
    'status' => 'required|in:Single, Separated, Cohabitation(live-in), Married, Widow/er', // Adjust status options as needed
    'email_add' => 'required|email',
  ]);


  // return response()->json($pwdmember);
  $pwdmember->image_path = $request->input('image_path');
  $pwdmember->pwd_no = $request->input('pwd_no');
  $pwdmember->date_applied = $request->input('date_applied');
  $pwdmember->application = $request->input('application');
  $pwdmember->last_name = $request->input('last_name');
  $pwdmember->first_name = $request->input('first_name');
  $pwdmember->middle_name = $request->input('middle_name');
  $pwdmember->suffix_of_applicant = $request->input('suffix_of_applicant');
  $pwdmember->birthday = $request->input('birthday');
  $pwdmember->gender = $request->input('gender');
  $pwdmember->status = $request->input('status');
  $pwdmember->email_add = $request->input('email_add');
  // $pwdmember->name = $request->input('name');
  // Save the changes
  $pwdmember->save();


// =================================================================================================================
  
  $typesdisability = typesdisability::find($id);

  // I-validate ang input data (ito ay optional depende sa inyong pangangailangan)
  $request->validate([
      'types_of_disability' => 'array', // Siguruhing ito ay isang array
  ]);

  // Kunin ang input data mula sa form
  $selectedTypes = $request->input('Deaf or Hard Of Hearing', []);
  $selectedTypes = $request->input('Intellectual Disability', []);
  $selectedTypes = $request->input('Learning Disability', []);
  $selectedTypes = $request->input('Mental Disability', []);
  $selectedTypes = $request->input('Physical Disability (Orthopedic)', []); 
  $selectedTypes = $request->input('Psychosocial Disability', []);
  $selectedTypes = $request->input('Speech and Language Impairment', []);
  $selectedTypes = $request->input('Visual Disability', []);
  $selectedTypes = $request->input('Cancer (RA11215)', []);
  $selectedTypes = $request->input('Rare Disease (RA10747)', []);
  // I-update ang uri ng kapansanan batay sa napili na mga checkbox
  $pwdMember = PwdMember::find($pwdMemberId); // Siguruhin mong ma-load ang tamang PwdMember entry

  $pwdMember->typesDisability()->sync($selectedTypes); // Gamitin ang `sync` para i-update ang relasyon

  // Redirect pabalik sa listahan ng uri ng kapansanan o anumang appropriate na URL
  // return redirect('/pwd_members')->with('success', 'Uri ng Kapansanan ay na-update nang matagumpay.');







//   // residence
//   $pwdmember->residence->house_and_street = $request->input('house_and_street');
//   $pwdmember->residence->purok = $request->input('purok');
//   $pwdmember->residence->barangay = $request->input('barangay');
//   $pwdmember->residence->municipality = $request->input('municipality');
//   $pwdmember->residence->province = $request->input('province');
//   $pwdmember->residence->region = $request->input('region');
//   $pwdmember->residence->landline = $request->input('landline');
//   $pwdmember->residence->mobile_no = $request->input('mobile_no');
//   $pwdmember->residence->email_add = $request->input('email_add');
//   $pwdmember->residence->educational_attain = $request->input('educational_attain');
//   $pwdmember->residence->status_of_employment = $request->input('status_of_employment');
//   $pwdmember->residence->types_of_employment = $request->input('types_of_employment');
//   $pwdmember->residence->category_of_employment = $request->input('category_of_employment');

//  // Save the changes
//  $pwdmember->Residence->save();
  
  
  return redirect()->route('registration.update', $pwdmember->id)->with('message', 'PWD Member Successfully Updated');



  // dd($request);
   
    // // Update the Residence model
    // $pwdmember->residence->update([
    //     'house_and_street' => $request->input('house_and_street'),
    //     'purok' => $request->input('purok'),
    //     'barangay' => $request->input('barangay'),
    //     'municipality' => $request->input('municipality'),
    //     'province' => $request->input('province'),
    //     'region' => $request->input('region'),
    //     'landline' => $request->input('landline'),
    //     'mobile_no' => $request->input('mobile_no'),
    //     'email_add' => $request->input('email_add'),
    //     'educational_attain' => $request->input('educational_attain'),
    //     'status_of_employment' => $request->input('status_of_employment'),
    //     'types_of_employment' => $request->input('types_of_employment'),
    //     'category_of_employment' => $request->input('category_of_employment'),
    // ]);

    // // Update the Familyback model
    // $pwdmember->familyback->update([
    //     'father_last_name' => $request->input('father_last_name'),
    //     'father_first_name' => $request->input('father_first_name'),
    //     'father_middle_name' => $request->input('father_middle_name'),
    //     'suffix_of_father' => $request->input('suffix_of_father'),
    //     'mother_last_name' => $request->input('mother_last_name'),
    //     'mother_first_name' => $request->input('mother_first_name'),
    //     'mother_middle_name' => $request->input('mother_middle_name'),
    //     'guardian_last_name' => $request->input('guardian_last_name'),
    //     'guardian_first_name' => $request->input('guardian_first_name'),
    //     'guardian_middle_name' => $request->input('guardian_middle_name'),
    //     'suffix_of_guardian' => $request->input('suffix_of_guardian'),
    //     'sss_no' => $request->input('sss_no'),
    //     'gsis_no' => $request->input('gsis_no'),
    //     'pag_ibig_no' => $request->input('pag_ibig_no'),
    //     'psn_no' => $request->input('psn_no'),
    //     'philhealth' => $request->input('philhealth'),
    //     'occupations' => $request->input('occupations'),
    // ]);

    // // Update the Organizationaccomp model
    // $pwdmember->organizationaccomp->update([
    //     'organizational_affliated_name' => $request->input('organizational_affliated_name'),
    //     'contact_person' => $request->input('contact_person'),
    //     'office_address' => $request->input('office_address'),
    //     'tel_no' => $request->input('tel_no'),
    //     'applicant_last_name' => $request->input('applicant_last_name'),
    //     'applicant_first_name' => $request->input('applicant_first_name'),
    //     'applicant_middle_name' => $request->input('applicant_middle_name'),
    //     'suffix_of_applicant' => $request->input('suffix_of_applicant'),
    //     'guard_last_name' => $request->input('guard_last_name'),
    //     'guardian_first_name' => $request->input('guardian_first_name'),
    //     'guardian_middle_name' => $request->input('guardian_middle_name'),
    //     'guard_middle_name' => $request->input('guard_middle_name'),
    //     'guardian_suffix' => $request->input('guardian_suffix'),
    //     'representative_last_name' => $request->input('representative_last_name'),
    //     'representative_first_name' => $request->input('representative_first_name'),
    //     'representative_middle_name' => $request->input('representative_middle_name'),
    //     'representative_suffix' => $request->input('representative_suffix'),
    // ]);

    // // Update the Approvingofficer model
    // $pwdmember->approvingofficer->update([
    //     'licensed_no_of_physician' => $request->input('licensed_no_of_physician'),
    //     'last_name_of_physician' => $request->input('last_name_of_physician'),
    //     'first_name_of_physician' => $request->input('first_name_of_physician'),
    //     'middle_name_of_physician' => $request->input('middle_name_of_physician'),
    //     'suffix_of_physician' => $request->input('suffix_of_physician'),
    //     'last_name_of_processing_officer' => $request->input('last_name_of_processing_officer'),
    //     'first_name_of_processing_officer' => $request->input('first_name_of_processing_officer'),
    //     'middle_name_of_processing_officer' => $request->input('middle_name_of_processing_officer'),
    //     'suffix_of_processing_officer' => $request->input('suffix_of_processing_officer'),
    //     'last_name_of_approving_officer' => $request->input('last_name_of_approving_officer'),
    //     'first_name_of_approving_officer' => $request->input('first_name_of_approving_officer'),
    //     'middle_name_of_approving_officer' => $request->input('middle_name_of_approving_officer'),
    //     'suffix_of_approving_officer' => $request->input('suffix_of_approving_officer'),
    // ]);

    // // Update the Approvingsection model
    // $pwdmember->approvingsection->update([
    //     'last_name_of_encoder' => $request->input('last_name_of_encoder'),
    //     'first_name_of_encoder' => $request->input('first_name_of_encoder'),
    //     'middle_name_of_encoder' => $request->input('middle_name_of_encoder'),
    //     'suffix_of_encoder' => $request->input('suffix_of_encoder'),
    //     'last_name_of_reporting_unit' => $request->input('last_name_of_reporting_unit'),
    //     'first_name_of_reporting_unit' => $request->input('first_name_of_reporting_unit'),
    //     'middle_name_of_reporting_unit' => $request->input('middle_name_of_reporting_unit'),
    //     'suffix_of_reporting_unit' => $request->input('suffix_of_reporting_unit'),
    //     'last_name_of_control_unit' => $request->input('last_name_of_control_unit'),
    //     'first_name_of_control_unit' => $request->input('first_name_of_control_unit'),
    //     'middle_name_of_control_unit' => $request->input('middle_name_of_control_unit'),
    //     'suffix_of_control_unit' => $request->input('suffix_of_control_unit'),
    // ]);

    // // Update the Typesdisability model
    // $request->validate([
    //     'types_of_disability' => 'required|array',
    // ]);
    // $typesdisability = $pwdmember->typesdisability;
    // $typesdisability->types_of_disability = json_encode($request->types_of_disability);
    // $typesdisability->save();

    // // Update the Causedisability model
    // $request->validate([
    //     'cause_of_disability' => 'required|array',
    // ]);
    // $causedisability = $pwdmember->causedisability;
    // $causedisability->cause_of_disability = json_encode($request->cause_of_disability);

    // // Check if 'Other' is selected and get the 'cause_of_disability_other' input
    // if (in_array('Other', $request->cause_of_disability)) {
    //     $causedisability->cause_of_disability_other = $request->input('cause_of_disability_other');
    // } else {
    //     $causedisability->cause_of_disability_other = null;
    // }

    // $causedisability->save();

    // // Update the Devices model
    // $request->validate([
    //     'device_given' => 'required|array',
    // ]);
    // $devices = $pwdmember->devices;
    // $devices->device_given = json_encode($request->device_given);
    // $devices->save();

    // Redirect back to the Pwdmember's edit page with a success message
    // return redirect()->route('registration.update', $pwdmember->id)->with('message', 'PWD Member Successfully Updated');

    }
    public function destroy(request $request, result $result)
{
  return dd($request);
  
     $result->delete();

    // Optionally, you can redirect the user to a page after the delete operation
    return redirect()->route('profilling.index'); // Replace 'your.route.name' with your desired route
}

// =======================================================================================================================    
    
public function PwdMemberExport(Request $request)
{
    return Excel::download(new PwdMemberExport, 'PwdMemberExport.xlsx');
}



    
}
