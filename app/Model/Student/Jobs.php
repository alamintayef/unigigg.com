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
      'min_edu_level',
      'major',
      'cgpa',
      'job_education_reqs',
      'job_skill_reqs',
      'job_reqs_additional',
      'job_start_date',
      'job_last_date_application',
      'job_expires',
      'paid',
    ];

    public function user()
    {
      return $this->belongsTo(User::class);

    }

    public function jobSkills()
    {
       return $this->hasMany(jobSkills::class);
    }



}
