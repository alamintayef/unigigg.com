<?php

namespace App\Model\Student;

use Illuminate\Database\Eloquent\Model;

class Vprofile extends Model
{
    //
    protected $table='vprofiles';
    protected $fillable=[
      'vdourl',
    ];

    public function user()
    {

         return $this->belongsTo(User::class);

    }
}
