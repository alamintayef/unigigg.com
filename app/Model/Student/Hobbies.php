<?php

namespace App\Model\Student;

use Illuminate\Database\Eloquent\Model;

class Hobbies extends Model
{
    //
    protected $table="hobbies";

    protected $fillable = [
       'hobbies_name',
       'hobbies_related_work',

   ];
   public function user()
   {
       return $this->belongsTo(User::class);
   }
}
