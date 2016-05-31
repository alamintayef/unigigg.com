<?php

namespace App\Model\Student;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
      protected $table = 'images';
      protected $fillable = ['filePath'];

      public function user()
      {
          return $this->belongsTo(User::class);
      }
}
