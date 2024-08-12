<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpenfundStudent extends Model
{
    use HasFactory;
    protected $table = 'openfund_studentss';
    protected $fillable = [
        'qalam_id',
        'student_name',
        'father_name',
        'institutions',
        'discipline',
        'contact_no',
        'home_address',
        'scholarship_name',
        'nust_trust_fund_donor_name',
        'province',
        'domicile',
        'gender',
        'program',
        'degree',
        'year_of_admission',
        'father_status',
        'father_profession',
        'father_profession_category',
        'organization',
        'category',
        'monthly_income',
        'statement_of_purpose',
        'remarks',
    ];
}
