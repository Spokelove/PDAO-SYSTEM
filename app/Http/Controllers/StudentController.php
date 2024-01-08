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
use Carbon\Carbon; // Import the Carbon library
use App\Models\Puroks;






class StudentController extends Controller

{
    
    public function index(Request $request)

    {

        
        $attainments = EducationalAttainment::all();
        $puroks = Purok::all();
        $barangays = Barangay::all();
        $municipalities = Municipality::all();
        $employments = StatusEmployment::all();
        $categorys = CategoryEmployment::all();
        $types =typeEmployment::all();
        $occupations =Occupation::all();

        // / Total of all members
        // $totalMembers = Pwdmember::count();
        $totalMembers = Pwdmember::where(function ($query) {
            $query->whereDoesntHave('approvingsection', function ($subQuery) {
                $subQuery->where('middle_name_of_reporting_unit', 'Deceased');
            })->orWhereHas('approvingsection', function ($subQuery) {
                $subQuery->where('middle_name_of_reporting_unit', '!=', 'Deceased')
                    ->whereNotNull('middle_name_of_reporting_unit');
            });
        })
        ->count();
    
        // <grand total of female and male>
        //         $genderCounts = DB::table('pwd_member')
        //     ->select('gender', DB::raw('COUNT(*) AS count'))
        //     ->groupBy('gender')
        //     ->get();

        // $smaleCount = $genderCounts->where('gender', 'Male')->first()->count ?? 0;
        // $sfemaleCount = $genderCounts->where('gender', 'Female')->first()->count ?? 0;
//    <TOTAL==OF PWD MEMBER===================================================================================>


        $totalMembers = Pwdmember::where(function ($query) {
            $query->whereDoesntHave('approvingsection', function ($subQuery) {
                $subQuery->where('middle_name_of_reporting_unit', 'Deceased');
            })->orWhereHas('approvingsection', function ($subQuery) {
                $subQuery->where('middle_name_of_reporting_unit', '!=', 'Deceased')
                    ->whereNotNull('middle_name_of_reporting_unit');
            });
        })->count();

        $genderCounts = Pwdmember::where(function ($query) {
            $query->whereDoesntHave('approvingsection', function ($subQuery) {
                $subQuery->where('middle_name_of_reporting_unit', 'Deceased');
            })->orWhereHas('approvingsection', function ($subQuery) {
                $subQuery->where('middle_name_of_reporting_unit', '!=', 'Deceased')
                    ->whereNotNull('middle_name_of_reporting_unit');
            });
        })
        ->select('gender', DB::raw('COUNT(*) AS count'))
        ->groupBy('gender')
        ->get();
        
        $smaleCount = $genderCounts->where('gender', 'Male')->first()->count ?? 0;
        $sfemaleCount = $genderCounts->where('gender', 'Female')->first()->count ?? 0;
        




    // ================================================================================================

    // $application = $request->input('application', 'new'); // Default to 'new' if no value is selected

    // $totalNew = Pwdmember::where('application', 'new')->count();
    // $totalRenewal = Pwdmember::where('application', 'renewal')->count();
    // $totalTransfer = Pwdmember::where('application', 'transfer')->count(); // Corrected variable name
    // // Define your date range
    // $startDate = Carbon::now()->subMonths(3); // Change the date range as needed
    // $endDate = Carbon::now();

    // // Count male and female new applicants within the date range
    // $femaleCountNewApplicants = Pwdmember::where('gender', 'Female')
    //     ->whereBetween('created_at', [$startDate, $endDate])
    //     ->count();

    // $maleCountNewApplicants = Pwdmember::where('gender', 'Male')
    //     ->whereBetween('created_at', [$startDate, $endDate])
    //     ->count();
    $application = $request->input('application', 'new'); // Default to 'new' if no value is selected

    $totalNew = Pwdmember::where('application', 'new')
        ->where('status', '!=', 'Deceased')
        ->whereHas('approvingsection', function ($query) {
            $query->where('middle_name_of_reporting_unit', '!=', 'Deceased');
        })
        ->count();
    
    $totalRenewal = Pwdmember::where('application', 'renewal')
        ->where('status', '!=', 'Deceased')
        ->whereHas('approvingsection', function ($query) {
            $query->where('middle_name_of_reporting_unit', '!=', 'Deceased');
        })
        ->count();
    
    $totalTransfer = Pwdmember::where('application', 'transfer')
        ->where('status', '!=', 'Deceased')
        ->whereHas('approvingsection', function ($query) {
            $query->where('middle_name_of_reporting_unit', '!=', 'Deceased');
        })
        ->count();
    
    // Define your date range
    $startDate = Carbon::now()->subMonths(3); // Change the date range as needed
    $endDate = Carbon::now();
    
                        // Count male and female new applicants within the date range, excluding deceased
            $femaleCountNewApplicants = Pwdmember::where('gender', 'Female')
            ->whereDoesntHave('approvingsection', function ($query) {
                $query->where('middle_name_of_reporting_unit', 'Deceased');
            })
            ->whereBetween('created_at', [$startDate, $endDate])
            ->count();

            $maleCountNewApplicants = Pwdmember::where('gender', 'Male')
            ->whereDoesntHave('approvingsection', function ($query) {
                $query->where('middle_name_of_reporting_unit', 'Deceased');
            })
            ->whereBetween('created_at', [$startDate, $endDate])
            ->count();


    
// ======================below 18===================================================================

$totalBelow18 = DB::table('pwd_member')
    ->select(DB::raw('COUNT(*) as total_below_18'))
    ->whereRaw('TIMESTAMPDIFF(YEAR, birthday, CURDATE()) < 18')
    ->first();

$totalMaleBelow18 = PwdMember::where('gender', 'Male')
    ->whereRaw('TIMESTAMPDIFF(YEAR, birthday, CURDATE()) < 18')
    ->count();

$totalFemaleBelow18 = PwdMember::where('gender', 'Female')
    ->whereRaw('TIMESTAMPDIFF(YEAR, birthday, CURDATE()) < 18')
    ->count();


// ===========================================================================================================
       
    // $eighteenToThirty = Pwdmember::whereBetween('age', [18, 30])->count();
    $minAge = 18;
    $maxAge = 30;
    
    $eighteenToThirty = PwdMember::whereRaw("TIMESTAMPDIFF(YEAR, birthday, CURDATE()) BETWEEN ? AND ?", [$minAge, $maxAge])->count();
// ===============================female and male================================================================================================================
    $minAge = 18;
    $maxAge = 30;
    
    $eighteenToThirtyMale = PwdMember::whereRaw("TIMESTAMPDIFF(YEAR, birthday, CURDATE()) BETWEEN ? AND ? AND gender = 'Male'", [$minAge, $maxAge])->count();
    
    $eighteenToThirtyFemale = PwdMember::whereRaw("TIMESTAMPDIFF(YEAR, birthday, CURDATE()) BETWEEN ? AND ? AND gender = 'Female'", [$minAge, $maxAge])->count();
    
    // echo "Kabuuang bilang ng lalaki (18-30): " . $eighteenToThirtyMale;
    // echo "Kabuuang bilang ng babae (18-30): " . $eighteenToThirtyFemale;

    // echo $totalMembers;

// =============================================31 to 59=====================================================================================================================
    
$minAge = 31;
$maxAge = 59;

// Kabuuang bilang ng mga PwdMember (31-59)
$thirtyOneToFiftyNineCount = PwdMember::whereRaw("TIMESTAMPDIFF(YEAR, birthday, CURDATE()) BETWEEN ? AND ?", [$minAge, $maxAge])->count();

// echo "Kabuuang bilang ng mga PwdMember (31-59): " . $thirtyOneToFiftyNineCount;

// echo "Kabuuang bilang ng mga PwdMember (31-59): " . $thirtyOneToFiftyNineCount;


    $minAge = 31;
    $maxAge = 59;
    
    $thirtyOneToFiftyNineMale = PwdMember::whereRaw("TIMESTAMPDIFF(YEAR, birthday, CURDATE()) BETWEEN ? AND ? AND gender = 'Male'", [$minAge, $maxAge])->count();
    
    $thirtyOneToFiftyNineFemale = PwdMember::whereRaw("TIMESTAMPDIFF(YEAR, birthday, CURDATE()) BETWEEN ? AND ? AND gender = 'Female'", [$minAge, $maxAge])->count();
    
    // echo "Kabuuang bilang ng lalaki (31-59): " . $thirtyOneToFiftyNineMale;
    // echo "Kabuuang bilang ng babae (31-59): " . $thirtyOneToFiftyNineFemale;
    
// ===============================================60 ====================================================================================================================

$minAge = 60;

// Kabuuang bilang ng mga lalaki (60 pataas)
$sixtyAndAboveMaleCount = PwdMember::whereRaw("TIMESTAMPDIFF(YEAR, birthday, CURDATE()) >= ? AND gender = 'Male'", [$minAge])->count();

// Kabuuang bilang ng mga babae (60 pataas)
$sixtyAndAboveFemaleCount = PwdMember::whereRaw("TIMESTAMPDIFF(YEAR, birthday, CURDATE()) >= ? AND gender = 'Female'", [$minAge])->count();

// echo "Kabuuang bilang ng mga lalaki (60 pataas): " . $sixtyAndAboveMaleCount;
// echo "Kabuuang bilang ng mga babae (60 pataas): " . $sixtyAndAboveFemaleCount;


$minAge = 60;

// Kabuuang bilang ng mga PwdMember (60 pataas)
$sixtyAndAboveCount = PwdMember::whereRaw("TIMESTAMPDIFF(YEAR, birthday, CURDATE()) >= ?", [$minAge])->count();

// echo "Kabuuang bilang ng mga PwdMember (60 pataas): " . $sixtyAndAboveCount;


// ========================================================================================================================================================================

$thirtyOneToFiftyNine = Pwdmember::whereBetween('age', [31, 59])->count();
$sixtyAbove = Pwdmember::where('age', '>=', 60)->count();
   



// APPLICATION------------------------------------------------------------------------------------------------


// =============================NEW===================================================================
//    new
    $newApplicants = PwdMember::where('application', 'New')
    ->selectRaw('SUM(CASE WHEN gender = "Male" THEN 1 ELSE 0 END) AS male_count')
    ->selectRaw('SUM(CASE WHEN gender = "Female" THEN 1 ELSE 0 END) AS female_count')
    ->first();

    $maleCount = $newApplicants->male_count;
    $femaleCount = $newApplicants->female_count;

// =======================RENEW========================================================================================

    // renew


    $renewApplicants = PwdMember::where('application', 'Renew')
    ->selectRaw('SUM(CASE WHEN gender = "Male" THEN 1 ELSE 0 END) AS male_count')
    ->selectRaw('SUM(CASE WHEN gender = "Female" THEN 1 ELSE 0 END) AS female_count')
    ->selectRaw('COUNT(*) AS total_renewals')
    ->first();

        $rmaleCount = $renewApplicants->male_count;
        $rfemaleCount = $renewApplicants->female_count;
        $totalRenewal = $renewApplicants->total_renewals;

  


    // transfer
    $transferApplicants = PwdMember::where('application', 'Transfer')
        ->selectRaw('SUM(CASE WHEN gender = "Male" THEN 1 ELSE 0 END) AS male_count')
        ->selectRaw('SUM(CASE WHEN gender = "Female" THEN 1 ELSE 0 END) AS female_count')
        ->first();

    $tmaleCount = $transferApplicants->male_count;
    $tfemaleCount = $transferApplicants->female_count;


    // ========================= Devices============================================================================
    // Now you have counts for male and female applicants for each application type

    // $totalDevicesCount = Devices::where('device_given', '<>', 'none')->count();
    // $totalDevicesCount= Devices::whereJsonDoesntContain('device_given', '["none"]')->count();


    $totalDevicesCount = Devices::where('device_given', '<>', '["none"]')->count();


    // $maleDeviceGivenCount = Devices::join('pwd_member', 'devices_given.pwdmember_id', '=', 'pwd_member.id')
    // ->where('pwd_member.gender', 'Male')
    // ->count();

    $maleDeviceGivenCount = DB::table('devices_given')
    ->join('pwd_member', 'devices_given.pwdmember_id', '=', 'pwd_member.id')
    ->where('pwd_member.gender', 'Male')
    ->whereNotExists(function ($query) {
        $query->select(DB::raw(1))
            ->from('devices_given as dg')
            ->whereRaw('JSON_CONTAINS(dg.device_given, ?)', ['["none"]'])
            ->whereRaw('dg.pwdmember_id = pwd_member.id');
    })
    ->count();


     // Bilangin ang mga babae na may devices
    //   $femaleDeviceGivenCount = Devices::join('pwd_member', 'devices_given.pwdmember_id', '=', 'pwd_member.id')
    // ->where('pwd_member.gender', 'Female')
    // ->count();

    $femaleDeviceGivenCount = DB::table('devices_given')
    ->join('pwd_member', 'devices_given.pwdmember_id', '=', 'pwd_member.id')
    ->where('pwd_member.gender', 'Female')
    ->whereNotExists(function ($query) {
        $query->select(DB::raw(1))
            ->from('devices_given as dg')
            ->whereRaw('JSON_CONTAINS(dg.device_given, ?)', ['["none"]'])
            ->whereRaw('dg.pwdmember_id = pwd_member.id');
    })
    ->count();

//    ==========================cause of disability================================================================ 

$totalCauseOfDisabilities = causedisability::selectRaw('COUNT(*) as total_cause_of_disabilities')
    ->whereRaw('JSON_LENGTH(cause_of_disability) > 0')
    ->get()
    ->first()
    ->total_cause_of_disabilities;

    $totalAutism = causedisability::whereJsonContains('cause_of_disability->1', 'Austim')->count();


// ------------------austism-------------------------------------------------------

$count = DB::table('causedisability')
    ->where('cause_of_disability', ["Austim"])
    ->count();


    $count = Causedisability::where('cause_of_disability','["AUTISM"]')->count();

// -------------------ADHD--,CEREBRAL , DOWN SYNDRON-------------------------------------------------------------------
$adhdCount = Causedisability::where('cause_of_disability', '["ADHD"]')->count();
$cerebralPalsyCount = Causedisability::where('cause_of_disability', '["CEREBRAL PALSY"]')->count();
$downSyndromeCount = Causedisability::where('cause_of_disability', '["DOWN SYNDROME"]')->count();

$totalCongenitalInbornCount = $adhdCount + $cerebralPalsyCount + $downSyndromeCount;
// ========================================================================================================================  
// Add counts for other causes
$acquiredCount = causedisability::where('cause_of_disability', '["ACQUIRED"]')->count();
$chronicIllnessCount = causedisability::where('cause_of_disability', '["CHRONIC ILLNES"]')->count();
$injuryCount = causedisability::where('cause_of_disability', '["INJURY"]')->count();
$otherSpecifyCount = causedisability::where('cause_of_disability', 'other specify')->count();

// Calculate the total count
$totalCongenitalInbornCount = $adhdCount + $cerebralPalsyCount + $downSyndromeCount +
                              $acquiredCount + $chronicIllnessCount + $injuryCount + $otherSpecifyCount;

// Now $totalCongenitalInbornCount contains the total count of records with the specified causes of disability.

// =========================inborn male and female total==================================================================================================

// 

// You can then use $maleRecords and $femaleRecords as needed.


// Now you have the total counts for congenital/inborn causes and the foreign key pwdmember_id for males and females.


// Now you have the total counts for congenital/inborn causes and the counts for males and females.


// ---------------------------------------------------------------------------------------------------------------------------------------
{
    // Define the types and count them in your query
    $disabilityData = Causedisability::select(
        DB::raw('JSON_UNQUOTE(JSON_EXTRACT(cause_of_disability, "$[1]")) as cause_type_1'),
        DB::raw('JSON_UNQUOTE(JSON_EXTRACT(cause_of_disability, "$[2]")) as cause_type_2'),
        DB::raw('JSON_UNQUOTE(JSON_EXTRACT(cause_of_disability, "$[3]")) as cause_type_3'),
        DB::raw('JSON_UNQUOTE(JSON_EXTRACT(cause_of_disability, "$[4]")) as cause_type_4'),
        DB::raw('JSON_UNQUOTE(JSON_EXTRACT(cause_of_disability, "$[5]")) as cause_type_5'),
        DB::raw('JSON_UNQUOTE(JSON_EXTRACT(cause_of_disability, "$[6]")) as cause_type_6'),
        DB::raw('JSON_UNQUOTE(JSON_EXTRACT(cause_of_disability, "$[7]")) as cause_type_7'),
        DB::raw('COUNT(*) as total')
    )
    ->whereNotNull(DB::raw('JSON_EXTRACT(cause_of_disability, "$[1]")'))
    ->orWhereNotNull(DB::raw('JSON_EXTRACT(cause_of_disability, "$[2]")'))
    ->orWhereNotNull(DB::raw('JSON_EXTRACT(cause_of_disability, "$[3]")'))
    ->orWhereNotNull(DB::raw('JSON_EXTRACT(cause_of_disability, "$[4]")'))
    ->orWhereNotNull(DB::raw('JSON_EXTRACT(cause_of_disability, "$[5]")'))
    ->orWhereNotNull(DB::raw('JSON_EXTRACT(cause_of_disability, "$[6]")'))
    ->orWhereNotNull(DB::raw('JSON_EXTRACT(cause_of_disability, "$[7]")'))
    ->groupBy('cause_type_1', 'cause_type_2', 'cause_type_3', 'cause_type_4', 'cause_type_5', 'cause_type_6', 'cause_type_7')
    ->get();

    // Assuming you have an Eloquent model for the "causedisability" table
    $disabilityModel = new Causedisability;

    // Hydrate the results into the Eloquent model
    $results = $disabilityModel->hydrate($disabilityData->toArray());
    

    // Pass the $results variable to your view
    // return view('your-view-name', ['results' => $results]);
}


            // $disabilityData = causedisability::select(
            //     DB::raw('JSON_UNQUOTE(JSON_EXTRACT(cause_of_disability, "$[1]")) as cause_type'),
            //     DB::raw('COUNT(*) as total')
            // )
            // ->whereNotNull(DB::raw('JSON_EXTRACT(cause_of_disability, "$[1]")'))
            // ->groupBy('cause_type')
            // ->get();



        //    $disabilityModel = new causedisability;
        //     $results = $disabilityModel->hydrate($disabilityData->toArray());

$totalAutism = CauseDisability::whereJsonContains('cause_of_disability->1', 'Austim')->count();


        // dd($totalAutism);
        


// =========================================================================================================================
                // Ngayon, $totalCauseOfDisabilities ay naglalaman ng bilang ng mga na-check na checkboxes
                $totalTypesOfDisabilities = DB::table('typesdisability')
                    ->select(DB::raw('COUNT(*) as total_types_of_disabilities'))
                    ->whereRaw('JSON_LENGTH(types_of_disability) > 0')
                    ->get()
                    ->first()
                    ->total_types_of_disabilities;

// --------------------------------death record-----------------------------------------------------------------------



// $caused = CauseDisability::select(
//         DB::raw('JSON_UNQUOTE(JSON_EXTRACT(cause_of_disability, "$[0]")) AS category'),
//         DB::raw('JSON_UNQUOTE(JSON_EXTRACT(cause_of_disability, "$[1]")) AS type')
//     )
//     ->whereRaw('JSON_UNQUOTE(JSON_EXTRACT(cause_of_disability, "$[1]")) IS NOT NULL')
//     ->orWhereRaw('JSON_UNQUOTE(JSON_EXTRACT(cause_of_disability, "$[2]")) IS NOT NULL')
//     ->orWhereRaw('JSON_UNQUOTE(JSON_EXTRACT(cause_of_disability, "$[3]")) IS NOT NULL')
//     ->orWhereRaw('JSON_UNQUOTE(JSON_EXTRACT(cause_of_disability, "$[4]")) IS NOT NULL')
//     ->groupBy('category', 'type')
//     ->get();


$totalDeceasedMembers = Pwdmember::whereHas('approvingsection', function ($query) {
    $query->where('middle_name_of_reporting_unit', 'Deceased');
})->count();



// =================================================================================================================================================================

return view('students.index', compact(
    'transferApplicants', 'tmaleCount', 'tfemaleCount',
    'rfemaleCount', 'rmaleCount', 'renewApplicants',
    'totalNew', 'totalRenewal', 'application',
    'totalMembers', 'totalTransfer', 
    'eighteenToThirty', 'thirtyOneToFiftyNine',
    'sixtyAbove',
    'newApplicants',
    'femaleCount',
     'maleCount', 
     'totalDevicesCount',
    'eighteenToThirtyMale',
     'eighteenToThirtyFemale',
    'thirtyOneToFiftyNineMale',
    'thirtyOneToFiftyNineFemale', 
    'thirtyOneToFiftyNineCount',
     'sixtyAndAboveCount',
    'sixtyAndAboveFemaleCount',
     'sixtyAndAboveFemaleCount', 
     'sixtyAndAboveMaleCount',
    'femaleDeviceGivenCount', 
    'maleDeviceGivenCount', 
    'totalCauseOfDisabilities',
    'totalTypesOfDisabilities',
    //  'totalAutismCases', 
     'smaleCount', 'sfemaleCount',
     'totalBelow18',
    //  'totalMaleCount',
     'totalFemaleBelow18',
     'totalMaleBelow18',
    //  'caused','
    'totalAutism',
    'count',
    'adhdCount',
    'cerebralPalsyCount',
    'downSyndromeCount',
    'totalCongenitalInbornCount',
    'acquiredCount',
    'chronicIllnessCount',
    'injuryCount',
    'otherSpecifyCount',
    'totalDeceasedMembers'
  
   

))->with(['results' => $results]);


   }

}

//     // Check a condition, for example, if $totalMembers is greater than 10
       
//             // Pass the totalMembers count to a different view
//             // return view('students.index', compact('totalMembers','totalNew','totalMembers'));
        


// public function show($id){
//     $data = Students::findorFail($id);
  
//        return view('students.edit',['student' => $data]);

// }

// public function create(){
//     return view('students.create')->with('title', 'Add New');

// }

// public function store(Request $request){
//     $validated = $request->validate([
//         "first_name" => ['required', 'min:4'],
//         "last_name" => ['required', 'min:4'],
//         "gender" => ['required'],
//         "age" => ['required'],
//         "email" => ['required', 'email', Rule::unique('students','email')],
       
//   ]);

//        Students::create($validated);
//       return  redirect('/')->with('message','New Student was added successfully!');
      
// } 
//   public function update(Request $request, Students $student){
//         //   dd($request);

         
//     $validated = $request->validate([
//         "first_name" => ['required', 'min:4'],
//         "last_name" => ['required', 'min:4'],
//         "middle_name" => ['required', 'min:4'],
//         "suffix" => ['required'],
//         "gender" => ['required'],
//         "age" => ['required'],
//         "email" => ['required', 'email'],
       
//   ]);



//        $student->update($validated);

//     //   dd($request);

//        return back()->with('message', 'Data Was successfully updated');
//   }




//   public function destroy(Students $student){
//        $student->delete();
//        return redirect('/')->with('message', 'Data was successfully deleted');
//   }
// public function searchdata(Request $request)
// {  
//      dd($request);

//     // $query = $request->search;
//     // $student = Students::orderBy('first_name','DESC')->where('first_name','LIkE'.'%'.$query.'%')->paginate(10);
//     // return view('search',compact('students'));

// }


// //  public function cancel(Request $request,Students $student){
// //     return redirect('/');
// //  }


// }


//       //$data = Students::where('age','<', '19')->orderBy ('first_name', 'asc')->limit(5)->get();

// //$data = DB::table('students')
//        // ->select(DB::raw('count(*) as gender_count,gender
//         //'))->groupBy('gender')->get();

//     //return view('students.index' ,['students' => $data]);

