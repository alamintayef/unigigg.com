<?php

namespace App\Model\Student;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    //
    protected $table ='user_info';
    protected $fillable = [
      'fname','lname','area','post_code',
      'institute','passing_date','mobile','universityId','NId','facebookId','LinkedInId',
    ];

   public function user()
   {
       return $this->belongsTo(User::class);
   }
}
