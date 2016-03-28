<?php

namespace App\Model\Student;

use Illuminate\Database\Eloquent\Model;

class Billing extends Model
{
    //
    protected $table='billings';
    protected $fillable = [
      'bkash_number',
      'transaction_id',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
