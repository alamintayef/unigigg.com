<?php

namespace App\Model\Student;

use Illuminate\Database\Eloquent\Model;

class Reference extends Model
{
    //
    protected $table='references';
    protected $fillable=[
      'referred_by',
      'reference_description',
      'referee_number',
    ];

    public function user()
    {
       return $this->belongsTo(User::class);
    }
}
