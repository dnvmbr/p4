<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';
    public function getCoursesForCheckboxes() {

        $courses = $this->orderBy('course_name','ASC')->get();

        $coursesForCheckboxes = [];

        foreach($courses as $course) {
            $coursesForCheckboxes[$course['id']] = $course;
        }
        return $coursesForCheckboxes;
    }


    
    // public function getAddRemove() {
    //     if (course id = course id on course_user pivot  )
    //             <button type="submit" class="btn btn-warning">Remove from Completed!</button>
    //              when clicked, remove from pivot
    //     else {
    //         <button type="submit" class="btn btn-warning">Remove from Completed!</button> > when clicked,                                        add to pivot
    //     }
    // }

    public function requirements() {
        return $this->belongsToMany('\App\Requirement');
    }
    public function users() {
        return $this->belongsToMany('\App\User')->withTimestamps();
    }

}
