<?php

namespace App\Model\Student;

use Illuminate\Database\Eloquent\Model;

class Interest extends Model
{
    //
    protected $table="interests";
    protected $fillable = [
       'interest_name',

   ];
   public function user()
   {
       return $this->belongsTo(User::class);
   }
}
