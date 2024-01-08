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

// --------------------------------------------------------------------------------------------------------------------

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
    
      {
       
       
    }
  
      return view ('Registration.create', compact('attainments','puroks','barangays','municipalities','employments','categorys','types','occupations','types'));

      // return view ('Registration.create');
    }

    public function store(Request $request){
      {

        
          // dd($request);
      //  return dd($request); 
      DB::beginTransaction();

      try {
      
        $request->validate([
            'pwd_no' => 'required',
            'date_applied' => 'required|date',
            'application' => 'required',
            'last_name' => 'required',
            'first_name' => 'required',
            'middle_name' => 'required',
            'suffix_of_applicant' => 'nullable', // Updated validation rule
            'birthday' => 'required|date',
            'gender' => 'required',
            'status' => 'required',
            'email_add' => 'nullable|email',
            'image_path' => 'nullable|image',
        ]);
        


        $Pwdmember = $request->all(); // Retrieve all data from the request

        if (!array_key_exists('suffix_of_applicant', $Pwdmember)) {
            $Pwdmember['suffix_of_applicant'] = null; 
        }
        
        $Pwdmember = Pwdmember::create($Pwdmember);
        

//      // Step 2: Residence Data Validation and Storage
              $residence = new residence([      
                'house_and_street' => $request->input('house_and_street'),
                'purok' => $request->input('purok'),
                'barangay' => $request->input('barangay'),
                'municipality' => $request->input('municipality', 'Valencia City'), // Set default value to 'Valencia City'
                'province' => $request->input('province', 'Bukidnon'), // Set default value to 'Bukidnon'
                'region' => $request->input('region', '10'), // Set de
                'landline' => $request->input('landline'),
                'mobile_no' => $request->input('mobile_no'),
                'email_add' => $request->input('email_add'),
                'educational_attain' => $request->input('educational_attain'),
                'status_of_employment' => $request->input('status_of_employment'),
                'types_of_employment' => $request->input('types_of_employment'),
                'category_of_employment' => $request->input('category_of_employment'),  
              ]);
              $Pwdmember->residence()->save($residence);



//           // Step 3: Family Background Data Validation and Storage
      
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
  

          $organizationaccomp = new organizationaccomp([
            'organizational_affliated_name' => $request->input('organizational_affliated_name'),
            'contact_person' => $request->input('contact_person'),
            'office_address' => $request->input('father_middle_name'),
            'tel_no' => $request->input('suffix_of_father'),
            'applicant_last_name' => $request->input('applicant_last_name'),
            'applicant_first_name' => $request->input('applicant_first_name'),
            'applicant_middle_name' => $request->input('applicant_middle_name'),
            'suffix_of_applicant' => $request->input('suffix_of_applicant'),
            'guardian_last_name' => $request->input('guardian_first_name'),
            'guardian_first_name' => $request->input('guardian_middle_name'),
             'guard_middle_name' => $request->input('guard_middle_name'),
            'guardian_suffix' => $request->input('suffix_of_guardian'),
            'representative_last_name' => $request->input('representative_last_name'),
            'representative_first_name' => $request->input('representative_first_name'),
            'representative_middle_name' => $request->input('representative_middle_name'),
            'representative_suffix' => $request->input('representative_suffix'),
           
            
          ]);
             $Pwdmember->organizationaccomp()->save($organizationaccomp);
  

// // // --------------------------------------------------------------------------------------------------------------------------

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


// // // ---------------------------------------------------------------------------------------------------------------

  
      
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


// // // -----------------------------------------------------------------------------------------------------------------------

 
 
          $request->validate([
            'types_of_disability'=>'required',
          
          ]);

          $typesdisability = new typesdisability ;          
          $typesdisability->types_of_disability = json_encode($request->types_of_disability);
          $Pwdmember->typesdisability()->save($typesdisability);


        //   $request->validate([
        //     'types_of_disability' => 'required',
        // ]);
        
        // $typesdisability = new typesdisability;
        // $typesdisability->types_of_disability = implode(',', $request->types_of_disability);
        // $Pwdmember->typesdisability()->save($typesdisability);



// // ---------------------------------------------------------------------------------------------------------------------------------------------------


          $request->validate([
          'cause_of_disability'=>'required',

          ]);

          $causedisability = new causedisability ;     
          $causedisability->cause_of_disability = json_encode($request->cause_of_disability);
          $Pwdmember->causedisability()->save($causedisability);


        //   $request->validate([
        //     'cause_of_disability' => 'required',
        // ]);
        
        // $causedisability = new causedisability;
        // $causedisability->cause_of_disability = implode(',', $request->cause_of_disability);
        // $Pwdmember->causedisability()->save($causedisability);
// ---------------------------------------------------------------------------------------------------------------------

          // Step 8: Validate and store Devices (even if it's null)
          $devicesData = $request->input('device_given');

          $request->validate([
              'cause_of_disability' => 'required',
          ]);

          $devices = new Devices;
          $devices->device_given = json_encode($devicesData);
          $Pwdmember->devices()->save($devices);



        //  $devicesData = $request->input('device_given');
        //   $request->validate([
        //       'cause_of_disability' => 'required',
        //   ]);

        //   $devices = new Devices;
        //   $devices->device_given = implode(',', $devicesData);
        //   $Pwdmember->devices()->save($devices);


DB::commit();

// Redirect to a Success Page
return redirect()->route('registration.create')->with('message', 'PWD Member Saved Successfully');
} 
catch (\Exception $e) {
// Handle Exceptions and Rollback on Error

DB::rollBack();
return back()->withErrors(['error' => 'An error occurred.'])->withInput();
}

// ---------------------------------------------------------------------------------------------------------------------------------
return redirect()->route('registration.create')->with('message', 'SAVE ! Successuflly PWD Member');
    }
}

// -==================search engine=============================================================================================================================






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
      'pwd_member.application',
      'approvingsection.first_name_of_control_unit'
  )
  ->leftJoin('residence', 'pwd_member.id', '=', 'residence.pwdmember_id')
  ->leftJoin('familyback__idrefences', 'pwd_member.id', '=', 'familyback__idrefences.pwdmember_id')
  ->leftJoin('typesdisability', 'pwd_member.id', '=', 'typesdisability.pwdmember_id')
  ->leftJoin('causedisability', 'pwd_member.id', '=', 'causedisability.pwdmember_id')
  ->leftJoin('approvingsection', 'pwd_member.id', '=', 'approvingsection.pwdmember_id')
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







// ================================================================================================================================================================
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



  // $typesdisabilities = typesdisability::all();

  // $disabilities->types_of_disability::where('pwdmember_id', $id)->first();

  // $selectedDisabilities = $disabilities ? json_decode($disabilities->types_of_disability, true) : [];
  // ------------------------------------------------------------------------------------------------------------------------------

 // $disabilities->types_of_disability::where('pwdmember_id', $id)->first();

  // Controller code to fetch data
  $pwdmember = Pwdmember::find($id);
  $typesdisability = typesdisability::where('pwdmember_id', $id)->first();
  $causedisability = causedisability::where('pwdmember_id', $id)->first();
  $devices = devices::where('pwdmember_id', $id)->first();
  
  // Null check before decoding JSON data
  $typesData = $typesdisability ? json_decode($typesdisability->types_of_disability, true) : [];
  $causeData = $causedisability ? json_decode($causedisability->cause_of_disability, true) : [];
  $devicesData = $devices ? json_decode($devices->device_given, true) : [];
  
  // Encode array data to JSON
  $typesJson = json_encode($typesData);
  $causeJson = json_encode($causeData);
  $devicesJson = json_encode($devicesData);


  // ------------------------------------------------------------------------------------------


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
    'Other',

  ];
  return view ('Registration.edit', compact('result', 'attainments','puroks','barangays','municipalities','employments','categorys','types','occupations', 'disabilityOptions','typesJson', 'causeJson','devicesJson'));
  // return dd( $typesdisability);
}


public function update(Request $request, $id)
{
   
  // return dd($request);
    // Find the Pwdmember record by its ID
    $pwdmember = Pwdmember::findOrFail($id);

    // Step 1: Validate and update the Pwdmember data
    $pwdmemberData = $request->validate([
      'pwd_no' => 'required',
      'date_applied' => 'required|date',
      'application' => 'required',
      'last_name' => 'required',
      'first_name' => 'required',
      'middle_name' => 'required',
      'suffix_of_applicant' => 'nullable',
      'birthday' => 'required|date',
      'gender' => 'required',
      'status' => 'required',
      'email_add' => 'nullable|email',
      'image_path' => 'nullable|image',
    ]);

    $pwdmember->update($pwdmemberData);

    // Step 2: Update the Residence data
    $residenceData = $request->only([
        'house_and_street',
        'purok',
        'barangay',
        'municipality',
        'province',
        'region',
        'landline',
        'mobile_no',
        'email_add',
        'educational_attain',
        'status_of_employment',
        'types_of_employment',
        'category_of_employment',
    ]);

    $pwdmember->residence->update($residenceData);

//     // Step 3: Update the Family Background data
    $familybackData = $request->only([
        'father_last_name',
        'father_first_name',
        'father_middle_name',
        'suffix_of_father',
        'mother_last_name',
        'mother_first_name',
        'mother_middle_name',
        'guardian_last_name',
        'guardian_first_name',
        'guardian_middle_name',
        'suffix_of_guardian',
        'sss_no',
        'gsis_no',
        'pag_ibig_no',
        'psn_no',
        'philhealth',
        'occupations',
    ]);

    $pwdmember->familyback->update($familybackData);

//     // Step 4: Update the Organization Accomplishment data
    $organizationaccompData = $request->only([
        'organizational_affliated_name',
        'contact_person',
        'office_address',
        'tel_no',
        'applicant_last_name',
        'applicant_first_name',
        'applicant_middle_name',
        'suffix_of_applicant',
        'guardian_last_name',
        'guardian_first_name',
        'guardian_middle_name',
        'guard_middle_name',
        'guardian_suffix',
        'representative_last_name',
        'representative_first_name',
        'representative_middle_name',
        'representative_suffix',
    ]);

    $pwdmember->organizationaccomp->update($organizationaccompData);

//     // Step 5: Update the Approving Officer data
    $approvingofficerData = $request->only([
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
    ]);

    $pwdmember->approvingofficer->update($approvingofficerData);

//     // Step 6: Update the Approving Section data
    $approvingsectionData = $request->only([
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
    ]);

    $pwdmember->approvingsection->update($approvingsectionData);


   // types of disability

  //  dd($request);
  
            // Validate the request
            $request->validate([
              'types_of_disability' => 'required|array',
            ]);

            // Find the Pwdmember based on the $id
            $Pwdmember = Pwdmember::findOrFail($id);

            // Convert the array to JSON
            $types_of_disability = json_encode($request->types_of_disability);

            // Update the types_of_disability relationship
            $Pwdmember->typesdisability()->update(['types_of_disability' => $types_of_disability]);

  // // ---------------------------------------------------------------------------------------------------------------------------------------------------
  
            // Validate the request
            $request->validate([
              'cause_of_disability' => 'required|array',
            ]);

            // Find the Pwdmember based on the $id
            $Pwdmember = Pwdmember::findOrFail($id);

            // Convert the array to JSON
            $cause_of_disability = json_encode($request->cause_of_disability);

            // Update the causedisability relationship
            $Pwdmember->causedisability()->update(['cause_of_disability' => $cause_of_disability]);

                    
          
          // // Step 8: Validate and store Devices (even if it's null
        
            $request->validate([
              'device_given' => 'required|array',
            ]);
            
            // try{
              $device_given = json_encode($request->device_given);
              $pwdmember->devices()->update(['device_given' => $device_given]);

            try{
              // Redirect with success message
              return redirect()->route('profilling.index')->with('message', 'PWD Member Successfully Updated');
          } catch (\Exception $e) {
            // Handle Exceptions and Rollback on Error
            
            // DB::rollBack();
            return back()->withErrors(['error' => 'An error occurred.'])->withInput();
            }
                    }
  
  // ---------------------------------------------------------------------------------------------------------------------
  
  

  

        public function destroy(request $request, result $result)
        {
          return dd($request);
          
            $result->delete();

            // Optionally, you can redirect the user to a page after the delete operation
            return redirect()->route('profilling.index'); // Replace 'your.route.name' with your desired route
        }

        // =======================================================================================================================    
            
        // public function PwdMemberExport(Request $request)
        // {
        //     return Excel::download(new PwdMemberExport, 'PwdMemberExport.xlsx');
        // }

            
    }
