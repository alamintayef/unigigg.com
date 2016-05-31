<?php

namespace App\Model\Student;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    //
    protected $table="trainings";
    protected $fillable = [
       'title','training_slug','training_type','training_description','application_fee','application_dead_line',
       'payment_method',

   ];
}
