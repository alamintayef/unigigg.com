<?php

namespace App\Model\Student;

use Illuminate\Database\Eloquent\Model;

class OddApplied extends Model
{
    //
    protected $table='odd_applieds';
    protected $fillable=[
      'applied_for_job_id','user_id',
    ];
    protected $hidden=[
      'applied_for_job_id','user_id',
    ];
}
