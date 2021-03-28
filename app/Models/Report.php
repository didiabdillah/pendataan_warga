<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $primaryKey = 'report_id';

    protected $fillable = [
        'report_nik',
        'report_name',
        'report_sex',
        'report_birth_place',
        'report_birth_date',
        'report_address',
        'report_rt',
        'report_rw',
        'report_phone',
        'report_job',
        'report_duration',
        'report_purpose',
        'report_health_status',
        'report_province',
        'report_district',
    ];
}
