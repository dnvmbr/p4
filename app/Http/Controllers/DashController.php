<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DashController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function getIndex(Request $request)
    {

        $userCourses = \App\Course::whereHas('users', function($query)
        {
            $query->where('user_id', '=', \Auth::id());
        })->get();
        $requirements = \App\Requirement::all();

        $satisfied_requirements = []; // array to keep track of satisfied requirements
        $count = 0;
        $total_hours_for_this_requirement = 0;
        $hours_completed = 0;
        $reamaining_hours = 0;


        foreach ($userCourses as $userCourse) {
            $course = \App\Course::where('id','=',$userCourse->id)->with('requirements')->first();
            foreach($course->requirements as $requirement){
                $satisfied_requirements[$count]['requirement_name'] = $requirement->requirement_name;
                $satisfied_requirements[$count]['course_hours'] = $course->course_hours;
                $satisfied_requirements[$count]['course_id'] = $course->id;
                $count++;
            }
        }
        dump($satisfied_requirements);

        foreach ($requirements as $requirement) {
            $find = array_search($requirement->requirement_name, $satisfied_requirements);
            $hours_completed = $satisfied_requirements[$find]['course_hours'];
            dump($hours_completed);


            $total_hours_for_this_requirement = $requirement->requirement_hours;
            $remaining_hours = $total_hours_for_this_requirement - $hours_completed;

        }



        return view('dash.index')
        ->with('userCourses', $userCourses)
        ->with('requirements', $requirements);
    }


}
