<?php

namespace App\Exports;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use App\Models\PwdMember; 
use App\Exports\devicesExport;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromQuery;

use Maatwebsite\Excel\Concerns\Exportable;
use Illuminate\Contracts\Queue\ShouldQueue;





class devicesExport implements FromQuery, WithHeadings, ShouldQueue
{
   
    use Exportable;

public function collection()
{
    // You can leave this method empty if you're using FromQuery
}

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
        'DEVICES GIVEN',
        'BARANGAY',
        'DATE RELEASED',
        // Add other headings as needed
    ];
}

public function query()
{
    return DB::table('pwd_member')
        ->leftJoin('residence', 'pwd_member.id', '=', 'residence.pwdmember_id')
        ->leftJoin('typesdisability', 'pwd_member.id', '=', 'typesdisability.pwdmember_id')
        ->leftJoin('devices_given', 'pwd_member.id', '=', 'devices_given.pwdmember_id')
        ->select(
            'pwd_member.id',
            'typesdisability.Types_of_Disability',
            'pwd_member.pwd_no',
            'pwd_member.last_name',
            'pwd_member.first_name',
            'pwd_member.middle_name',
            'pwd_member.suffix_of_applicant',
            'devices_given.Device_Given',
            'residence.barangay',
            'pwd_member.date_applied' // Add the missing comma here
        )
        ->groupBy(
            'typesdisability.Types_of_Disability',
            'residence.barangay',
            'pwd_member.id',
            'pwd_member.pwd_no',
            'pwd_member.last_name',
            'pwd_member.first_name',
            'pwd_member.middle_name',
            'pwd_member.suffix_of_applicant',
            'residence.barangay',
            'devices_given.Device_Given',
            'pwd_member.date_applied' // Add the missing comma here
        )
        ->orderBy('residence.barangay', 'ASC')
        ->orderBy('typesdisability.Types_of_Disability', 'ASC')
        ->orderBy('pwd_member.last_name', 'ASC');
}


}