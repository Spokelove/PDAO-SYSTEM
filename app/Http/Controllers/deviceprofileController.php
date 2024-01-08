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
use App\Exports\devicesExport;






class DeviceProfileController extends Controller
{
    public function index()
    {
       
        $results = DB::table('pwd_member')
        ->join('residence', 'pwd_member.id', '=', 'residence.pwdmember_id')
        ->join('familyback__idrefences', 'pwd_member.id', '=', 'familyback__idrefences.pwdmember_id')
        ->join('typesdisability', 'pwd_member.id', '=', 'typesdisability.pwdmember_id')
        ->join('causedisability', 'pwd_member.id', '=', 'causedisability.pwdmember_id')
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
            DB::raw("COALESCE(devices_given.device_given, 'no device') AS device_given")
        )
        ->paginate(10); // Paginate the results with 10 items per page
    
    return view('deviceprofiled.index', compact('results'));
    }




    public function exportdevices()
    {
        return Excel::download(new DevicesExport, 'devices_export.csv');
    }

}


