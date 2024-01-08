<?php

namespace App\Exports;

namespace App\Exports;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use App\Models\PwdMember; // Make sure to use the appropriate namespace for your PwdMember model.
use App\Exports\disabilityExport;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;

class disabilityExport implements FromQuery, WithHeadings

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
                'Suffix of Applicant',
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
                'Suffix of Father',
                'Mother Last Name',
                'Mother First Name',
                'Mother Middle Name',
                'Guardian Last Name',
                'Guardian First Name',
                'Guardian Middle Name',
                'Suffix of Guardian',
                'Device Given',
            ];
        }
    
        public function query()
        {
            return PwdMember::query()
                ->select(
                    // 'residence.barangay',
                    'pwd_member.id',
                    'pwd_member.pwd_no',
                    'pwd_member.last_name',
                    'pwd_member.first_name',
                    'pwd_member.middle_name',
                    'pwd_member.suffix_of_applicant',
                    'pwd_member.birthday',
                    'pwd_member.gender',
                    'pwd_member.Age',
                    'pwd_member.status',
                    'residence.purok',
                    'residence.barangay', // Ensure 'barangay' is selected here
                    'typesdisability.Types_of_Disability',
                    'causedisability.Cause_of_Disability',
                    'familyback__idrefences.occupations',
                    'familyback__idrefences.Father_Last_Name',
                    'familyback__idrefences.Father_First_Name',
                    'familyback__idrefences.Father_Middle_Name',
                    'familyback__idrefences.suffix_of_father',
                    'familyback__idrefences.Mother_Last_Name',
                    'familyback__idrefences.Mother_First_Name',
                    'familyback__idrefences.Mother_Middle_Name',
                    'familyback__idrefences.Guardian_Last_Name',
                    'familyback__idrefences.Guardian_First_Name',
                    'familyback__idrefences.Guardian_Middle_Name',
                    'familyback__idrefences.suffix_of_guardian',
                    'devices_given.Device_Given'
                )
                ->leftJoin('residence', 'pwd_member.id', '=', 'residence.pwdmember_id')
                ->leftJoin('typesdisability', 'pwd_member.id', '=', 'typesdisability.pwdmember_id')
                ->leftJoin('causedisability', 'pwd_member.id', '=', 'causedisability.pwdmember_id')
                ->leftJoin('familyback__idrefences', 'pwd_member.id', '=', 'familyback__idrefences.pwdmember_id')
                ->leftJoin('devices_given', 'pwd_member.id', '=', 'devices_given.pwdmember_id')
                ->orderBy('residence.barangay', 'ASC')
                ->orderBy('pwd_member.last_name', 'ASC')
                ->groupBy(
                   
                    'pwd_member.id',
                    'pwd_member.pwd_no',
                    'pwd_member.last_name',
                    'pwd_member.first_name',
                    'pwd_member.middle_name',
                    'pwd_member.suffix_of_applicant',
                    'pwd_member.birthday',
                    'pwd_member.gender',
                    'pwd_member.Age',
                    'pwd_member.status',
                    'residence.purok',
                    'residence.barangay',
                    'typesdisability.Types_of_Disability',
                    'causedisability.Cause_of_Disability',
                    'familyback__idrefences.occupations',
                    'familyback__idrefences.Father_Last_Name',
                    'familyback__idrefences.Father_First_Name',
                    'familyback__idrefences.Father_Middle_Name',
                    'familyback__idrefences.suffix_of_father',
                    'familyback__idrefences.Mother_Last_Name',
                    'familyback__idrefences.Mother_First_Name',
                    'familyback__idrefences.Mother_Middle_Name',
                    'familyback__idrefences.Guardian_Last_Name',
                    'familyback__idrefences.Guardian_First_Name',
                    'familyback__idrefences.Guardian_Middle_Name',
                    'familyback__idrefences.suffix_of_guardian',
                    'devices_given.Device_Given'
                );
        }
    }