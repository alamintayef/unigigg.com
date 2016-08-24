<?php

namespace App\Model\Student;

use Illuminate\Database\Eloquent\Model;

class CompetitionApplied extends Model
{
    //
    protected $table='student_applieds';
    protected $fillable=[
      'competition_id','user_id','Team_name',
    ];
    protected $hidden=[
      'competition_id','user_id',
    ];
}
