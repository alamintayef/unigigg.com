<?php

namespace App\Model\Student;

use Illuminate\Database\Eloquent\Model;

class Vlogvdo extends Model
{
    //
    protected $table='vlogvdos';
    protected $fillable=[
      'vlogurl','catagory',
    ];

    public function user()
    {

         return $this->belongsTo(User::class);

    }
}
