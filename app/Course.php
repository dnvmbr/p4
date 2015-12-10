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

    public function requirements(){
        return $this->belongsToMany('\App\Requirement');
    }
}
