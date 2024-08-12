<?php

namespace App\Imports;

use App\Models\OpenfundStudent;
use Maatwebsite\Excel\Concerns\ToModel;

class OpenfundStudentImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // dd($row);
        return new OpenfundStudent([


            'qalam_id' => $row[0],
            'student_name' => $row[1],
            'father_name' => $row[2],
            'institutions' => $row[3],
            'discipline' => $row[4],
            'contact_no' => $row[5],
            'home_address' => $row[6],
            'scholarship_name' => $row[7],
            'nust_trust_fund_donor_name' => $row[8],
            'province' => $row[9],
            'domicile' => $row[10],
            'gender' => $row[11],
            'program' => $row[12],
            'degree' => $row[13],
            'year_of_admission' => $row[14],
            'father_status' => $row[15],
            'father_profession' => $row[16],
            'father_profession_category' => $row[17],
            'organization' => $row[18],
            'category' => $row[19],
            'monthly_income' => $row[20],
            'statement_of_purpose' => $row[21],
            'remarks' => $row[22],
        ]);
    }
}
