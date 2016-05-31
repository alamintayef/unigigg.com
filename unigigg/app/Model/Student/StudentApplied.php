<?php

namespace App\Model\Student;

use Illuminate\Database\Eloquent\Model;

class StudentApplied extends Model
{
    //
    protected $table='student_applieds';
    protected $fillable=[
      'applied_for_job_id','user_id',
    ];
    protected $hidden=[
      'applied_for_job_id','user_id',
    ];

}
