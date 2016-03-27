<?php

namespace App\Model\Student;

use Illuminate\Database\Eloquent\Model;

class EmShortlist extends Model
{
    //
    protected $table='em_shortlists';
    protected $fillable = [
      'user_id', 'shortlisted_for_job_id',
    ];

    protected $hidden = ['user_id', 'shortlisted_for_job_id',];
}
