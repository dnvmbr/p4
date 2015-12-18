<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract,
AuthorizableContract,
CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
    * The database table used by the model.
    *
    * @var string
    */
    protected $table = 'users';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = ['name', 'email', 'password'];

    /**
    * The attributes excluded from the model's JSON form.
    *
    * @var array
    */
    protected $hidden = ['password', 'remember_token'];

    public function courses() {
        return $this->belongsToMany('\App\Course')->withTimestamps();
    }

    public function degree() {
        return $this->belongsTo('\App\Degree')->withTimestamps();
    }

    // boolean on if the user took the course
    public function tookCourse($course_id) {
        // $course_id = \App\Course::find($course_id)->pluck('id');
        $courses_taken =  \Auth::user()->courses()->get();
        foreach($courses_taken as $course) {
            if ($course_id == $course->id) {
                return true;
            }
        }
        return false;
    }


}
