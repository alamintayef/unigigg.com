<?php

namespace App\Model\Student;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
  protected $table='blogs';
  protected $fillable = [
    'title',
    'subtitle',
    'body',
    'slug',
  ];

  public function user()
  {
   return $this->belongsTo(User::class);
  }
}
