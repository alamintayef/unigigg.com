<?php

namespace App\Model\Student;

use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    //
    protected $table= 'jobs';
    protected $fillable = [
      'job_name',
      'job_type',
      'job_salary',
      'job_location',
      'job_description',
      'job_reqs',
      'job_reqs_additional',
      'job_start_date',
      'job_last_date_application',
    ];

    public function user()
    {
      return $this->belongsTo(User::class);

    }



}
