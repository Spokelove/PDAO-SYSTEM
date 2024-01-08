<?php

namespace App\Exports;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use App\Models\PwdMember; // Make sure to use the appropriate namespace for your PwdMember model.
use App\Exports\PerBarangayExport;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;




// class PerBarangayExport implements FromQuery, WithHeadings
// {
//     use Exportable;

//     public function headings(): array
// {
//     return [
//         'Barangay',
//         'Count of Females',
//         'Count of Males',
//         'Count Below 18 Years Old (Females)',
//         'Count Between 18-30 Years Old (Females)',
//         'Count Between 31-59 Years Old (Females)',
//         'Count 60 Years and Above (Females)',
//         'Count Below 18 Years Old (Males)',
//         'Count Between 18-30 Years Old (Males)',
//         'Count Between 31-59 Years Old (Males)',
//         'Count 60 Years and Above (Males)',
//     ];
// }

// public function query()
// {
//     return DB::table('pwd_member')
//         ->join('residence', 'pwd_member.id', '=', 'residence.pwdmember_id')
//         ->select(
//             'residence.barangay',
//             DB::raw('SUM(CASE WHEN pwd_member.gender = "Female" THEN 1 ELSE 0 END) as female_count'),
//             DB::raw('SUM(CASE WHEN pwd_member.gender = "Male" THEN 1 ELSE 0 END) as male_count'),
//             DB::raw('SUM(CASE WHEN pwd_member.gender = "Female" AND TIMESTAMPDIFF(YEAR, pwd_member.birthday, CURDATE()) < 18 THEN 1 ELSE 0 END) as female_below_18'),
//             DB::raw('SUM(CASE WHEN pwd_member.gender = "Female" AND TIMESTAMPDIFF(YEAR, pwd_member.birthday, CURDATE()) BETWEEN 18 AND 30 THEN 1 ELSE 0 END) as female_18_to_30'),
//             DB::raw('SUM(CASE WHEN pwd_member.gender = "Female" AND TIMESTAMPDIFF(YEAR, pwd_member.birthday, CURDATE()) BETWEEN 31 AND 59 THEN 1 ELSE 0 END) as female_31_to_59'),
//             DB::raw('SUM(CASE WHEN pwd_member.gender = "Female" AND TIMESTAMPDIFF(YEAR, pwd_member.birthday, CURDATE()) >= 60 THEN 1 ELSE 0 END) as female_60_and_above'),
//             DB::raw('SUM(CASE WHEN pwd_member.gender = "Male" AND TIMESTAMPDIFF(YEAR, pwd_member.birthday, CURDATE()) < 18 THEN 1 ELSE 0 END) as male_below_18'),
//             DB::raw('SUM(CASE WHEN pwd_member.gender = "Male" AND TIMESTAMPDIFF(YEAR, pwd_member.birthday, CURDATE()) BETWEEN 18 AND 30 THEN 1 ELSE 0 END) as male_18_to_30'),
//             DB::raw('SUM(CASE WHEN pwd_member.gender = "Male" AND TIMESTAMPDIFF(YEAR, pwd_member.birthday, CURDATE()) BETWEEN 31 AND 59 THEN 1 ELSE 0 END) as male_31_to_59'),
//             DB::raw('SUM(CASE WHEN pwd_member.gender = "Male" AND TIMESTAMPDIFF(YEAR, pwd_member.birthday, CURDATE()) >= 60 THEN 1 ELSE 0 END) as male_60_and_above')
//         )
//         ->groupBy('residence.barangay')
//         ->orderBy('residence.barangay', 'ASC');
// }
// }


// return DB::table('pwd_member')
//     ->join('residence', 'pwd_member.id', '=', 'residence.pwdmember_id')
//     ->join('typesdisability', 'pwd_member.id', '=', 'typesdisability.pwdmember_id')
//     ->select(
//         'residence.barangay',
//         DB::raw('SUM(CASE WHEN pwd_member.gender = "Female" THEN 1 ELSE 0 END) as female_count'),
//         DB::raw('SUM(CASE WHEN pwd_member.gender = "Male" THEN 1 ELSE 0 END) as male_count'),
//         DB::raw('SUM(CASE WHEN pwd_member.gender = "Female" AND TIMESTAMPDIFF(YEAR, pwd_member.birthday, CURDATE()) < 18 THEN 1 ELSE 0 END) as female_below_18'),
//         DB::raw('SUM(CASE WHEN pwd_member.gender = "Female" AND TIMESTAMPDIFF(YEAR, pwd_member.birthday, CURDATE()) BETWEEN 18 AND 30 THEN 1 ELSE 0 END) as female_18_to_30'),
//         DB::raw('SUM(CASE WHEN pwd_member.gender = "Female" AND TIMESTAMPDIFF(YEAR, pwd_member.birthday, CURDATE()) BETWEEN 31 AND 59 THEN 1 ELSE 0 END) as female_31_to_59'),
//         DB::raw('SUM(CASE WHEN pwd_member.gender = "Female" AND TIMESTAMPDIFF(YEAR, pwd_member.birthday, CURDATE()) >= 60 THEN 1 ELSE 0 END) as female_60_and_above'),
//         DB::raw('SUM(CASE WHEN pwd_member.gender = "Male" AND TIMESTAMPDIFF(YEAR, pwd_member.birthday, CURDATE()) < 18 THEN 1 ELSE 0 END) as male_below_18'),
//         DB::raw('SUM(CASE WHEN pwd_member.gender = "Male" AND TIMESTAMPDIFF(YEAR, pwd_member.birthday, CURDATE()) BETWEEN 18 AND 30 THEN 1 ELSE 0 END) as male_18_to_30'),
//         DB::raw('SUM(CASE WHEN pwd_member.gender = "Male" AND TIMESTAMPDIFF(YEAR, pwd_member.birthday, CURDATE()) BETWEEN 31 AND 59 THEN 1 ELSE 0 END) as male_31_to_59'),
//         DB::raw('SUM(CASE WHEN pwd_member.gender = "Male" AND TIMESTAMPDIFF(YEAR, pwd_member.birthday, CURDATE()) >= 60 THEN 1 ELSE 0 END) as male_60_and_above'),
//         DB::raw('GROUP_CONCAT(typesdisability.types_of_disability) as types_of_disability'),
//         DB::raw('COUNT(*) as total_taga_barangay')
//     )
//     ->groupBy('residence.barangay')
//     ->orderBy('residence.barangay', 'ASC');
//     }
// }

// return DB::table('pwd_member')
//     ->join('residence', 'pwd_member.id', '=', 'residence.pwdmember_id')
//     ->join('typesdisability', 'pwd_member.id', '=', 'typesdisability.pwdmember_id')
//     ->select(
//         'residence.barangay',
//         DB::raw('SUM(CASE WHEN pwd_member.gender = "Female" THEN 1 ELSE 0 END) as female_count'),
//         DB::raw('SUM(CASE WHEN pwd_member.gender = "Male" THEN 1 ELSE 0 END) as male_count'),
//         DB::raw('SUM(CASE WHEN pwd_member.gender = "Female" AND TIMESTAMPDIFF(YEAR, pwd_member.birthday, CURDATE()) < 18 THEN 1 ELSE 0 END) as female_below_18'),
//         DB::raw('SUM(CASE WHEN pwd_member.gender = "Female" AND TIMESTAMPDIFF(YEAR, pwd_member.birthday, CURDATE()) BETWEEN 18 AND 30 THEN 1 ELSE 0 END) as female_18_to_30'),
//         DB::raw('SUM(CASE WHEN pwd_member.gender = "Female" AND TIMESTAMPDIFF(YEAR, pwd_member.birthday, CURDATE()) BETWEEN 31 AND 59 THEN 1 ELSE 0 END) as female_31_to_59'),
//         DB::raw('SUM(CASE WHEN pwd_member.gender = "Female" AND TIMESTAMPDIFF(YEAR, pwd_member.birthday, CURDATE()) >= 60 THEN 1 ELSE 0 END) as female_60_and_above'),
//         DB::raw('SUM(CASE WHEN pwd_member.gender = "Male" AND TIMESTAMPDIFF(YEAR, pwd_member.birthday, CURDATE()) < 18 THEN 1 ELSE 0 END) as male_below_18'),
//         DB::raw('SUM(CASE WHEN pwd_member.gender = "Male" AND TIMESTAMPDIFF(YEAR, pwd_member.birthday, CURDATE()) BETWEEN 18 AND 30 THEN 1 ELSE 0 END) as male_18_to_30'),
//         DB::raw('SUM(CASE WHEN pwd_member.gender = "Male" AND TIMESTAMPDIFF(YEAR, pwd_member.birthday, CURDATE()) BETWEEN 31 AND 59 THEN 1 ELSE 0 END) as male_31_to_59'),
//         DB::raw('SUM(CASE WHEN pwd_member.gender = "Male" AND TIMESTAMPDIFF(YEAR, pwd_member.birthday, CURDATE()) >= 60 THEN 1 ELSE 0 END) as male_60_and_above'),
//         DB::raw('GROUP_CONCAT(typesdisability.types_of_disability) as types_of_disability'),
//         DB::raw('COUNT(*) as total_taga_barangay'),
//         DB::raw('SUM(CASE WHEN pwd_member.gender = "Female" THEN 1 ELSE 0 END) as total_female'),
//         DB::raw('SUM(CASE WHEN pwd_member.gender = "Male" THEN 1 ELSE 0 END) as total_male')
//     )
//     ->groupBy('residence.barangay')
//     ->orderBy('residence.barangay', 'ASC');
//     }
// }



class PerBarangayExport implements FromQuery, WithHeadings
{
    use Exportable;

    public function headings(): array
    {
        return [
            'Barangay',
            'Count of Females',
            'Count of Males',
            'Count Below 18 Years Old (Females)',
            'Count Between 18-30 Years Old (Females)',
            'Count Between 31-59 Years Old (Females)',
            'Count 60 Years and Above (Females)',
            'Count Below 18 Years Old (Males)',
            'Count Between 18-30 Years Old (Males)',
            'Count Between 31-59 Years Old (Males)',
            'Count 60 Years and Above (Males)',
            'Types of Disability',
            'Total Taga Barangay',
            'Total Females',
            'Total Males',
        ];
    }
    
    public function query()
    {
        return DB::table('pwd_member')
            ->join('residence', 'pwd_member.id', '=', 'residence.pwdmember_id')
            ->join('typesdisability', 'pwd_member.id', '=', 'typesdisability.pwdmember_id')
            ->select(
                'residence.barangay',
                DB::raw('SUM(CASE WHEN pwd_member.gender = "Female" THEN 1 ELSE 0 END) as female_count'),
                DB::raw('SUM(CASE WHEN pwd_member.gender = "Male" THEN 1 ELSE 0 END) as male_count'),
                DB::raw('SUM(CASE WHEN pwd_member.gender = "Female" AND TIMESTAMPDIFF(YEAR, pwd_member.birthday, CURDATE()) < 18 THEN 1 ELSE 0 END) as female_below_18'),
                DB::raw('SUM(CASE WHEN pwd_member.gender = "Female" AND TIMESTAMPDIFF(YEAR, pwd_member.birthday, CURDATE()) BETWEEN 18 AND 30 THEN 1 ELSE 0 END) as female_18_to_30'),
                DB::raw('SUM(CASE WHEN pwd_member.gender = "Female" AND TIMESTAMPDIFF(YEAR, pwd_member.birthday, CURDATE()) BETWEEN 31 AND 59 THEN 1 ELSE 0 END) as female_31_to_59'),
                DB::raw('SUM(CASE WHEN pwd_member.gender = "Female" AND TIMESTAMPDIFF(YEAR, pwd_member.birthday, CURDATE()) >= 60 THEN 1 ELSE 0 END) as female_60_and_above'),
                DB::raw('SUM(CASE WHEN pwd_member.gender = "Male" AND TIMESTAMPDIFF(YEAR, pwd_member.birthday, CURDATE()) < 18 THEN 1 ELSE 0 END) as male_below_18'),
                DB::raw('SUM(CASE WHEN pwd_member.gender = "Male" AND TIMESTAMPDIFF(YEAR, pwd_member.birthday, CURDATE()) BETWEEN 18 AND 30 THEN 1 ELSE 0 END) as male_18_to_30'),
                DB::raw('SUM(CASE WHEN pwd_member.gender = "Male" AND TIMESTAMPDIFF(YEAR, pwd_member.birthday, CURDATE()) BETWEEN 31 AND 59 THEN 1 ELSE 0 END) as male_31_to_59'),
                DB::raw('SUM(CASE WHEN pwd_member.gender = "Male" AND TIMESTAMPDIFF(YEAR, pwd_member.birthday, CURDATE()) >= 60 THEN 1 ELSE 0 END) as male_60_and_above'),
                DB::raw('GROUP_CONCAT(typesdisability.types_of_disability) as types_of_disability'),
                DB::raw('COUNT(*) as total_taga_barangay'),
                DB::raw('SUM(CASE WHEN pwd_member.gender = "Female" THEN 1 ELSE 0 END) as total_female'),
                DB::raw('SUM(CASE WHEN pwd_member.gender = "Male" THEN 1 ELSE 0 END) as total_male')
            )
            ->leftJoin('approvingsection', 'pwd_member.id', '=', 'approvingsection.pwdmember_id')
            ->where('approvingsection.middle_name_of_reporting_unit', 'Active')
            ->where('pwd_member.status', '!=', 'Deceased') // Exclude Deceased records
            ->groupBy('residence.barangay')
            ->orderBy('residence.barangay', 'ASC');
    }
}
