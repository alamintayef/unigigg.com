<?php

namespace App\Model\Student;

use Illuminate\Database\Eloquent\Model;

class OddJobs extends Model
{

  protected $table="odd_jobs";
  protected $fillable = [
     'title','type','description','offering','area','university','job_expires',


 ];
  public function user()
  {
      return $this->belongsTo(User::class);
  }
}
