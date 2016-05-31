<?php

namespace App\Model\Student;

use Illuminate\Database\Eloquent\Model;

class ExtraCur extends Model
{
    //
    protected $table ='extra_curs';
    protected $fillable = [
        'excc_name', 'excc_start_date', 'excc_end_date','excc_description',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
