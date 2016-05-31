<?php

namespace App\Model\Student;

use Illuminate\Database\Eloquent\Model;

class EmInfo extends Model
{
    //

    protected $table ='em_infos';
    protected $fillable = [
      'company_name',
      'company_phone',
      'company_email',
      'company_address',
      'company_type',
      'company_size',
      'company_description',
 ];
   public function user()
   {

        return $this->belongsTo(User::class);

   }

}
