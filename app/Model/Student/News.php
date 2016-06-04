<?php

namespace App\Model\Student;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
  protected $table="news";
  protected $fillable = [
     'news_title','news_description','news_start_date','news_link','news_last_date_of_application',
     'hosted_by','news_slug'

 ];
 public function user()
 {
     return $this->belongsTo(User::class);
 }
}
