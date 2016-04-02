<?php

namespace App\Model\Student;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    //
    protected $fillable = [
        'exp_name', 'exp_start_date', 'exp_end_date','exp_description', 'exp_validation',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
