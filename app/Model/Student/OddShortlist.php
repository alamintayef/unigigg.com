<?php

namespace App\Model\Student;

use Illuminate\Database\Eloquent\Model;

class OddShortlist extends Model
{
    //
    protected $table='odd_shortlists';
    protected $fillable = [
      'user_id','shortlistedby' ,'shortlisted_for_job_id',
    ];

    protected $hidden = ['user_id','shortlistedby' ,'shortlisted_for_job_id',];
}
