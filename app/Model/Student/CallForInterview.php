<?php

namespace App\Model\Student;

use Illuminate\Database\Eloquent\Model;

class CallForInterview extends Model
{
    //
    protected $table ='call_for_interviews';
    protected $fillable =[
      'appointment', 'time','identifier','transaction_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
