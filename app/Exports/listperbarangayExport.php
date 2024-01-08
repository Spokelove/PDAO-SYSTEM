<?php

namespace App\Exports;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use App\Models\PwdMember; 
use App\Exports\ListPerBarangayExport;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromQuery;

use Maatwebsite\Excel\Concerns\Exportable;
use Illuminate\Contracts\Queue\ShouldQueue;



class ListPerBarangayExport implements FromQuery, WithHeadings, ShouldQueue
{
    use Exportable;

public function headings(): array
{
    return [
        'ID',
        'TYPES OF DISABILITY',
        'PWD_NO',
        'LAST NAME',
        'FIRST NAME',
        'MIDDLE NAME',
        'SUFFIX OF APPLICANT',
        'GENDER',
        'BIRTHDAY',
        'PUROK',
        'STATUS',
        'BARANGAY',
        'OCCUPATIONS',
        // Add other headings as needed
    ];
}

public function query()
{
    return DB::table('pwd_member')
        ->leftJoin('residence', 'pwd_member.id', '=', 'residence.pwdmember_id')
        ->leftJoin('typesdisability', 'pwd_member.id', '=', 'typesdisability.pwdmember_id')
        ->leftJoin('familyback__idrefences', 'pwd_member.id', '=', 'familyback__idrefences.pwdmember_id')
        ->leftJoin('approvingsection', 'pwd_member.id', '=', 'approvingsection.pwdmember_id')
        ->select(
            'pwd_member.id',
            'typesdisability.Types_of_Disability',
            'pwd_member.pwd_no',
            'pwd_member.last_name',
            'pwd_member.first_name',
            'pwd_member.middle_name',
            'pwd_member.suffix_of_applicant',
            'pwd_member.gender',
            'pwd_member.birthday',
            'residence.purok',
            'pwd_member.status',
            'residence.barangay',
            'familyback__idrefences.occupations'
        )
        ->where('approvingsection.middle_name_of_reporting_unit', 'Active')
        ->where('pwd_member.status', '!=', 'Deceased')
        ->groupBy(
            'typesdisability.Types_of_Disability',
            'residence.barangay',
            'pwd_member.id',
            'pwd_member.pwd_no',
            'pwd_member.last_name',
            'pwd_member.first_name',
            'pwd_member.middle_name',
            'pwd_member.suffix_of_applicant',
            'pwd_member.gender',
            'pwd_member.birthday',
            'residence.purok',
            'pwd_member.status',
            'familyback__idrefences.occupations'
        )
        ->orderBy('residence.barangay', 'ASC')
        ->orderBy('typesdisability.Types_of_Disability', 'ASC')
        ->orderBy('pwd_member.last_name', 'ASC');
}
}