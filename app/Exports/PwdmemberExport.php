<?php

namespace App\Exports;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use App\Models\PwdMember; // Make sure to use the appropriate namespace for your PwdMember model.
use App\Exports\PwdMemberExport;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;


class PwdMemberExport implements FromQuery, WithHeadings, WithMapping, ShouldAutoSize
{
    use Exportable;
    public function headings(): array
    {
        return [
            'ID',
            'PWD_NO',
            'LAST NAME',
            'FIRST NAME',
            'MIDDLE NAME',
            'SUFFIX OF APPLICANT',
            'TYPES OF DISABILITY',
            'CAUSE OF DISABILITY',
            'PUROK',
            'BARANGAY',
            'BIRTHDAY',
            'SEX',
            'AGE',
            'CIVIL STATUS',
            'EDUCATIONAL ATTAINMENT',
            'OCCUPATIONS',
            'FATHER LAST NAME',
            'FATHER FIRST NAME',
            'FATHER MIDDLE NAME',
            'SUFFIX OF FATHER',
            'MOTHER LAST NAME',
            'MOTHER FIRST NAME',
            'MOTHER MIDDLE NAME',
            'GUARDIAN LAST NAME',
            'GUARDIAN FIRST NAME',
            'GUARDIAN MIDDLE NAME',
            'SUFFIX OF GUARDIAN',
            'DEVICE GIVEN',
        ];
    }

    public function query()
    {
        return PwdMember::query()
            ->select(
                'pwd_member.id',
                'pwd_member.pwd_no',
                'pwd_member.last_name',
                'pwd_member.first_name',
                'pwd_member.middle_name',
                'pwd_member.suffix_of_applicant',
                'typesdisability.Types_of_Disability',
                'causedisability.Cause_of_Disability',
                'residence.purok',
                'residence.barangay',
                'pwd_member.birthday',
                'pwd_member.gender',
                'pwd_member.age', // Assuming 'age' is the correct column name
                'pwd_member.status',
                'residence.educational_attain',
                'familyback__idrefences.occupations', // Corrected the table name
                'familyback__idrefences.Father_Last_Name', // Corrected the table name
                'familyback__idrefences.Father_First_Name', // Corrected the table name
                'familyback__idrefences.Father_Middle_Name', // Corrected the table name
                'familyback__idrefences.suffix_of_father', // Corrected the table name
                'familyback__idrefences.Mother_Last_Name', // Corrected the table name
                'familyback__idrefences.Mother_First_Name', // Corrected the table name
                'familyback__idrefences.Mother_Middle_Name', // Corrected the table name
                'familyback__idrefences.Guardian_Last_Name', // Corrected the table name
                'familyback__idrefences.Guardian_First_Name', // Corrected the table name
                'familyback__idrefences.Guardian_Middle_Name', // Corrected the table name
                'familyback__idrefences.suffix_of_guardian', // Corrected the table name
                'devices_given.Device_Given'
            )
            ->leftJoin('residence', 'pwd_member.id', '=', 'residence.pwdmember_id')
            ->leftJoin('typesdisability', 'pwd_member.id', '=', 'typesdisability.pwdmember_id')
            ->leftJoin('causedisability', 'pwd_member.id', '=', 'causedisability.pwdmember_id')
            ->leftJoin('familyback__idrefences', 'pwd_member.id', '=', 'familyback__idrefences.pwdmember_id')
            ->leftJoin('devices_given', 'pwd_member.id', '=', 'devices_given.pwdmember_id')
            ->leftJoin('approvingsection', 'pwd_member.id', '=', 'approvingsection.pwdmember_id')
            ->where('approvingsection.middle_name_of_reporting_unit', 'Active')
            ->where('pwd_member.status', '!=', 'Active') // Exclude Deceased records
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
                'pwd_member.age',
                'pwd_member.status',
                'residence.purok',
                'residence.barangay',
                'typesdisability.Types_of_Disability',
                'causedisability.Cause_of_Disability',
                'residence.educational_attain',
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

    public function map($row): array
    {
        return [
            $row->id,
            $row->pwd_no,
            $row->last_name,
            $row->first_name,
            $row->middle_name,
            $row->suffix_of_applicant,
            $row->Types_of_Disability,
            $row->Cause_of_Disability,
            $row->purok,
            $row->barangay,
            $row->birthday,
            $row->gender,
            number_format($row->age), // Assuming 'age' is the correct column name
            $row->status,
            $row->educational_attain,
            $row->occupations,
            $row->Father_Last_Name,
            $row->Father_First_Name,
            $row->Father_Middle_Name,
            $row->suffix_of_father,
            $row->Mother_Last_Name,
            $row->Mother_First_Name,
            $row->Mother_Middle_Name,
            $row->Guardian_Last_Name,
            $row->Guardian_First_Name,
            $row->Guardian_Middle_Name,
            $row->suffix_of_guardian,
            $row->Device_Given,
        ];
    }

    public function styles(Worksheet $sheet)
{
    // Set column widths individually
    $sheet->getColumnDimension('A')->setWidth(55);  // ID
    $sheet->getColumnDimension('B')->setWidth(55);  // PWD_NO
    $sheet->getColumnDimension('C')->setWidth(55);  // LAST NAME
    $sheet->getColumnDimension('D')->setWidth(55);  // FIRST NAME
    // ... Set widths for other columns
    // $sheet->getColumnDimension('Z')->setWidth(15);  // DEVICE GIVEN
}
}
