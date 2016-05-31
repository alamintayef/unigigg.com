<?php

namespace App\Model\Student;

use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    //
    protected $table="competitions";
    protected $fillable = [
       'title','description','competition_slug','event_date','last_date_of_application','competition_link',
       'organized_by',

   ];
}
