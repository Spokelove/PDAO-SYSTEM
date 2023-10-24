<?php

namespace App\Exports;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use App\Models\PwdMember; // Make sure to use the appropriate namespace for your PwdMember model.
use App\Exports\PwdMemberExport;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;

class PwdMemberExport implements FromQuery, WithHeadings
{
    use Exportable;

    public function headings(): array
    {
        return [
            'id',
            'PWD No',
            'Last Name',
            'First Name',
            'Middle Name',
            'suffix_of_applicant',
            'Birthday',
            'Gender',
            'Age',
            'Status',
            'Purok',
            'Barangay',
            'Types of Disability',
            'Cause of Disability',
            'Occupations',
            'Father Last Name',
            'Father First Name',
            'Father Middle Name',
       
            'suffix_of_father',
            'Mother Last Name',
            'Mother First Name',
            'Mother Middle Name',
            'Guardian Last Name',
            'Guardian First Name',
            'Guardian Middle Name',
            'suffix_of_guardian',
            'Device Given',
        ];
    }

    public function query()
    {
        return PwdMember::query()
        ->select('pwd_member.id', 'pwd_member.pwd_no', 'pwd_member.last_name', 'pwd_member.first_name', 'pwd_member.middle_name', 'pwd_member.suffix_of_applicant', 'pwd_member.birthday', 'pwd_member.gender',
        \DB::raw('YEAR(CURDATE()) - YEAR(pwd_member.birthday) as age'), // Calculate age
        'pwd_member.status', 'residence.purok', 'residence.barangay', 'typesdisability.types_of_disability', 'causedisability.cause_of_disability', 'familyback__idrefences.occupations',
        'familyback__idrefences.father_last_name',
        'familyback__idrefences.father_first_name',
        'familyback__idrefences.father_middle_name',
        'familyback__idrefences.suffix_of_father',
        'familyback__idrefences.mother_last_name',
        'familyback__idrefences.mother_first_name',
        'familyback__idrefences.mother_middle_name',
        'familyback__idrefences.guardian_last_name',
        'familyback__idrefences.guardian_first_name',
        'familyback__idrefences.guardian_middle_name',
        'familyback__idrefences.suffix_of_guardian',
        'devices_given.device_given'
    )
    ->leftJoin('residence', 'pwd_member.id', '=', 'residence.pwdmember_id')
    ->leftJoin('typesdisability', 'pwd_member.id', '=', 'typesdisability.pwdmember_id')
    ->leftJoin('causedisability', 'pwd_member.id', '=', 'causedisability.pwdmember_id')
    ->leftJoin('familyback__idrefences', 'pwd_member.id', '=', 'familyback__idrefences.pwdmember_id')
    ->leftJoin('devices_given', 'pwd_member.id', '=', 'devices_given.pwdmember_id');

    }
}
        // return PwdMember::select(
        //     'pwd_no',
        //     'last_name',
        //     'first_name',
        //     'middle_name',
        //     'birthday',
        //     'gender',
        //     DB::raw('YEAR(CURDATE()) - YEAR(birthday) - (DATE_FORMAT(CURDATE(), "%m%d") < DATE_FORMAT(birthday, "%m%d")) as age'),
        //     'status',
        //     'date_applied', // Include the original date_applied
        //     DB::raw('DATE_ADD(date_applied, INTERVAL 5 YEAR) as expire_date')
        // )->get();
    
