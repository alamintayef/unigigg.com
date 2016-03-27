<?php

namespace App\Model\Student;

use Illuminate\Database\Eloquent\Model;

class FunFacts extends Model
{
    //
    protected $table='fun_facts';
    protected $fillable = ['fun_facts','inspiration_qot','Why_you','Why_not_you',];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
