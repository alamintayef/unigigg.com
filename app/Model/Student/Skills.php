<?php

namespace App\Model\Student;

use Illuminate\Database\Eloquent\Model;

class Skills extends Model
{
    //
    protected $table="skills";
    protected $fillable = [
       'skill_name',
       'skill_level',
       'skill_experience',
       'skill_proof',
   ];
   public function user()
   {
       return $this->belongsTo(User::class);
   }

}
