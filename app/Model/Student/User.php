<?php

namespace App\Model\Student;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','type',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password','type','remember_token',
    ];

// talent
    public function userinfo()
    {
      return $this->hasOne(UserInfo::class);
    }

    public function skills()
    {
       return $this->hasMany(Skills::class);
    }

    public function interests()
    {
       return $this->hasMany(Interest::class);
    }

    public function hobbies()
    {
       return $this->hasMany(Hobbies::class);
    }

    public function education()
    {
       return $this->hasMany(Education::class);
    }
    public function experiences()
    {
       return $this->hasMany(Experience::class);
    }

    public function exccs()
    {
       return $this->hasMany(ExtraCur::class);
    }
    public function funfacts()
    {
       return $this->hasOne(FunFacts::class);
    }

    //Common

    public function images()
    {//baki ase
       return $this->hasOne(Image::class);
    }

    //recruiter

    public function eminfo()
    {
      return $this->hasOne(EmInfo::class);
    }
    public function jobs()
    {
        return $this->hasMany(Jobs::class);

    }
    public function oddjobs()
    {
        return $this->hasMany(OddJobs::class);

    }
    public function ref()
    {
        return $this->hasMany(Reference::class);

    }
    public function bill()
    {
        return $this->hasMany(Billing::class);

    }

}
