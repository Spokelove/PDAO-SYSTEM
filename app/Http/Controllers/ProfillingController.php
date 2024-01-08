<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pwdmember;
use App\Models\residence;
use App\Models\causedisability;
use App\Models\typesdisability;
use App\Models\familyback__idrefences;
use Illuminate\Support\Facades\DB;
use App\Models\devices_given;
use App\Models\devices;
use Carbon\Carbon; // Import the Carbon library
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\PwdMemberExport;
use App\Exports\perbarangayExport;
use App\Exports\seniorExport;
use App\Exports\ListPerBarangayExport;
use App\Exports\typesExport;




class ProfillingController extends Controller
{
    public function index()
    {

        //  function _construct() 
//  {
//     $this->registration = new registration ;
//   }
$results = DB::table('pwd_member')
->join('residence', 'pwd_member.id', '=', 'residence.pwdmember_id')
->join('familyback__idrefences', 'pwd_member.id', '=', 'familyback__idrefences.pwdmember_id')
->join('typesdisability', 'pwd_member.id', '=', 'typesdisability.pwdmember_id')
->join('causedisability', 'pwd_member.id', '=', 'causedisability.pwdmember_id')
->join('approvingsection', 'pwd_member.id', '=', 'approvingsection.pwdmember_id') // Join the approvingsection table
->leftJoin('devices_given', 'pwd_member.id', '=', 'devices_given.pwdmember_id')
->select(
    'pwd_member.id',
    'pwd_member.date_applied',
    'pwd_member.application',
    'pwd_member.last_name',
    'pwd_member.first_name',
    'pwd_member.middle_name',
    'pwd_member.suffix_of_applicant',
    'pwd_member.birthday',
    'pwd_member.gender', // Add the 'gender' field
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
    'approvingsection.middle_name_of_reporting_unit', // Include the new field from approvingsection table
    DB::raw("COALESCE(devices_given.device_given, 'no device') AS device_given")
)
->paginate(10); // Paginate the results with 10 items per page

return view('profilling.index', compact('results'));

    }
    public function search(Request $request)
    {
        $inputQuery = $request->input('query');

        // Perform a search query with pagination
            $results = PwdMember::select(
                'pwd_member.*',
                'residence.purok',
                'residence.house_and_street',
                'residence.barangay',
                'residence.municipality',
                'familyback__idrefences.occupations',
                'typesdisability.types_of_disability',
                'causedisability.cause_of_disability',
                \DB::raw('TIMESTAMPDIFF(YEAR, pwd_member.birthday, CURDATE()) AS age'),
                \DB::raw("COALESCE(devices_given.device_given, 'no device') AS device_given"),
                'residence.educational_attain', // Educational Attainment from the residence table
                'familyback__idrefences.father_last_name',
                'familyback__idrefences.father_first_name',
                'familyback__idrefences.father_middle_name',
                'familyback__idrefences.mother_last_name',
                'familyback__idrefences.mother_first_name',
                'familyback__idrefences.mother_middle_name',
                'familyback__idrefences.guardian_last_name',
                'familyback__idrefences.guardian_first_name',
                'familyback__idrefences.guardian_middle_name'
            )
                ->leftJoin('residence', 'pwd_member.id', '=', 'residence.pwdmember_id')
                
                ->leftJoin('familyback__idrefences', 'pwd_member.id', '=', 'familyback__idrefences.pwdmember_id')
                ->leftJoin('typesdisability', 'pwd_member.id', '=', 'typesdisability.pwdmember_id')
                ->leftJoin('causedisability', 'pwd_member.id', '=', 'causedisability.pwdmember_id')
                ->leftJoin('devices_given', 'pwd_member.id', '=', 'devices_given.pwdmember_id')
                ->where(function ($queryBuilder) use ($inputQuery) {
                    $queryBuilder->where('last_name', 'like', '%' . $inputQuery . '%')
                        ->orWhere('first_name', 'like', '%' . $inputQuery . '%')
                        ->orWhere('middle_name', 'like', '%' . $inputQuery . '%')
                        ->orWhere('birthday', 'like', '%' . $inputQuery . '%')
                        ->orWhere('residence.barangay', 'like', '%' . $inputQuery . '%')
                        ->orWhere('causedisability.cause_of_disability', 'like', '%' . $inputQuery . '%')
                        ->orWhere('typesdisability.types_of_disability', 'like', '%' . $inputQuery . '%');
                })
                ->paginate(10);
        
            return view('profilling.search', compact('results'));
        }
        

        public function filter(Request $request)
        {
            $start_date = Carbon::parse($request->start_date)->format('Y-m-d');
            $end_date = Carbon::parse($request->end_date)->format('Y-m-d');
        
            $results = Pwdmember::select('pwd_member.*', 'residence.purok', 'residence.barangay', 'residence.municipality', 'typesdisability.types_of_disability', 'causedisability.cause_of_disability', 'devices_given.device_given')
                ->join('residence', 'pwd_member.id', '=', 'residence.pwdmember_id')
                ->join('typesdisability', 'pwd_member.id', '=', 'typesdisability.pwdmember_id')
                ->join('causedisability', 'pwd_member.id', '=', 'causedisability.pwdmember_id')
                ->leftJoin('devices_given', 'pwd_member.id', '=', 'devices_given.pwdmember_id')
                ->whereDate('pwd_member.created_at', '>=', $start_date)
                ->whereDate('pwd_member.created_at', '<=', $end_date)
                ->paginate(10);
        
            return view('profilling.index', compact('results'))->with('message', 'Date Filter!');
        }
        




 
    public function destroy($id)
    {
        $result = PwdMember::find($id);
    
        if (!$result) {
            return redirect()->route('profilling.index')->with('error', 'Result not found');
        }
    
        $result->delete();

        return redirect(route('profilling.index'))->with ('message',' PWDMEMBER Deleted Successfully');
    }
     





    public function export()
    {
        return Excel::download(new PwdMemberExport, 'masterlist.csv');
    }
      
    public function exportperbarangay ()
    {
        return Excel::download(new perbarangayExport, 'totallistperbarangayExport.csv');
    }    

    public function exportsenior ()
    {
        return Excel::download(new seniorExport, 'seniorcitizenExport.csv');
    } 
    
    public function exportlistperbarangay()
    {
        return Excel::download(new listPerBarangayExport, 'perbarangayExport.csv');
    }
    
    public function exportypes()
    {
        return Excel::download(new typesExport, 'disability_data.csv');
    }

  

}



// // ==================================END====================================================================================
// =========================================================================================================================



// class ProfillingController extends Controller
// {
//   public function index ()
//   {

//     // $results = Pwdmember::paginate(10);
//     // $devices_given = devices_given::paginate(10);
//     $residences = Residence::paginate(10);
//     $Pwdmembers = PwdMember::paginate(10);
//     $causedisability = causedisability::paginate(10);
//     $typesdisability = typesdisability::paginate(10);
//     // $familyback__idrefences = familyback__idrefences::paginate(10);
    
//     $results = DB::table('pwd_member')
//     ->join('residence', 'pwd_member.id', '=', 'residence.pwdmember_id')
//     ->join('familyback__idrefences', 'pwd_member.id', '=', 'familyback__idrefences.pwdmember_id')
//     ->join('typesdisability', 'pwd_member.id', '=', 'typesdisability.pwdmember_id')
//     ->join('causedisability', 'pwd_member.id', '=', 'causedisability.pwdmember_id')
//     ->leftJoin('devices_given', 'pwd_member.id', '=', 'devices_given.pwdmember_id')
//     ->select(
//         'pwd_member.id',
//         'pwd_member.date_applied',
//         'pwd_member.application',
//         'pwd_member.last_name',
//         'pwd_member.first_name',
//         'pwd_member.middle_name',
//         'pwd_member.suffix_of_applicant',
//         'pwd_member.birthday',
//         DB::raw('TIMESTAMPDIFF(YEAR, pwd_member.birthday, CURDATE()) AS age'),
//         'pwd_member.status',
//         'residence.pwdmember_id',
//         'residence.purok',
//         'residence.house_and_street',
//         'residence.barangay',
//         'residence.municipality',
//         'familyback__idrefences.occupations',
//         'typesdisability.types_of_disability',
//         'causedisability.cause_of_disability',
//         DB::raw("COALESCE(devices_given.device_given, 'no device') AS device_given")
//     )
//     ->get();

    
// // -----------------------------------------------------------------------------------------------------------




// // ---------------------------------------------------------------------------------------------------------------

//   return view('profilling.index', compact('residences', 'Pwdmembers', 'results','typesdisability','causedisability','results'));
        
// }
// public function search(Request $request)
// {
//   // dd($request);
//   {
   
//     $inputQuery = $request->input('query');

//     $results = Pwdmember::select(
//         'pwd_member.*',
//         'residence.purok',
//         'residence.house_and_street',
//         'residence.barangay',
//         'residence.municipality',
//         'familyback__idrefences.occupations',
//         'typesdisability.types_of_disability',
//         'causedisability.cause_of_disability',
//         \DB::raw('TIMESTAMPDIFF(YEAR, pwd_member.birthday, CURDATE()) AS age'),
//         \DB::raw("COALESCE(devices_given.device_given, 'no device') AS device_given")
//     )
//         ->leftJoin('residence', 'pwd_member.id', '=', 'residence.pwdmember_id')
//         ->leftJoin('familyback__idrefences', 'pwd_member.id', '=', 'familyback__idrefences.pwdmember_id')
//         ->leftJoin('typesdisability', 'pwd_member.id', '=', 'typesdisability.pwdmember_id')
//         ->leftJoin('causedisability', 'pwd_member.id', '=', 'causedisability.pwdmember_id')
//         ->leftJoin('devices_given', 'pwd_member.id', '=', 'devices_given.pwdmember_id')
//         ->where(function ($queryBuilder) use ($inputQuery) {
//             $queryBuilder->where('last_name', 'like', '%' . $inputQuery . '%')
//                 ->orWhere('first_name', 'like', '%' . $inputQuery . '%')
//                 ->orWhere('middle_name', 'like', '%' . $inputQuery . '%')
//                 ->orWhere('birthday', 'like', '%' . $inputQuery . '%')
//                 ->orWhere('residence.barangay', 'like', '%' . $inputQuery . '%');
//         })
//         ->paginate(10);
    
//   return view('Profilling.search', compact('results'));
// }

// // public function edit (user $user){

// //     return view ('user.edit',['users'=>$user]);
 
 
// // }
//   // public function refresh(Request $request)
//   // {
//   //     // Your logic here.

//   //     // After performing some operations, use back() to refresh the page.
//   //     return back();
//   // }
// }


// // public function filter(Request $request)
// // {
// //     // $start_date = $request->start_date;
//     // $end_date = $request->end_date;

//     // $results = Pwdmember::whereDate('created_at', '>=', $start_date)
//     //     ->whereDate('created_at', '<=', $end_date)
//     //     ->paginate(50); // Use the paginate() method directly on the query builder

//     // return view('profilling.index', compact('results'))->with('message', 'Date Filter!');

// public function filter(Request $request)
// {
//     $start_date = Carbon::parse($request->start_date)->format('Y-m-d');
//     $end_date = Carbon::parse($request->end_date)->format('Y-m-d');

//     $results = Pwdmember::whereDate('created_at', '>=', $start_date)
//         ->whereDate('created_at', '<=', $end_date)
//         ->paginate(50);

//     return view('profilling.index', compact('results'))->with('message', 'Date Filter!');
// }

// public function destroy(Result $result)
// {
//     // Perform any authorization checks here, if needed
//     // For example, check if the user is authorized to delete this record

//     // Delete the record
//     $result->delete();

//     // Redirect back to the records listing page or wherever you prefer
//     return redirect()->route('registration.index')->with('success', 'Record deleted successfully');
// }

// }