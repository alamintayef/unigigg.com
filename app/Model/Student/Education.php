<?php

namespace App\Model\Student;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    //
    protected $table="education";
    protected $fillable = [
       'Degree_name','Degree_type','Degree_start_date','Degree_end_date','Degree_institute',
       'Degree_result',

   ];
   public function user()
   {
       return $this->belongsTo(User::class);
   }
}
