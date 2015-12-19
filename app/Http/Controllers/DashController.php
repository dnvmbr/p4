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

    //Susan Buck helped out heavily with the configuring of the requirements remaining functionality.
    public function getIndex(Request $request)
        {
            $userCourses = \App\Course::whereHas('users', function($query)
            {
                $query->where('user_id', '=', \Auth::id());
            })->get();

            # Get all the requirements
            $requirements = \App\Requirement::all();

            # Array to keep track of the requirements this user has completed
            $satisfied_requirements = [];

            # See what requirements this user has satisfied by looping through all their courses
            foreach($userCourses as $userCourse) {

                # Find out what requirements this particular course satisifies
                $course = \App\Course::where('id','=',$userCourse->id)->with('requirements')->first();

                # Loop through all the requirements this course satisfies
                foreach($course->requirements as $requirement){

                    # If we've never had an instance of this requirement being satisfied
                    # We'll start the count off with how many hours this particular course satisfies
                    if(!isset($satisfied_requirements[$requirement->id]['course_hours'])) {
                        $satisfied_requirements[$requirement->id]['course_hours'] = $course->course_hours;
                    }
                    # However, if we have had an instance of this requirement being satisfied
                    # Then we want to *add* to the total of how many hours that this requirement has had satisfied
                    else {
                        $satisfied_requirements[$requirement->id]['course_hours'] += $course->course_hours;
                    }
                }
            }

            # Now we'll loop through all the requirements and update each one with a count of 'hours_remaining'
            foreach($requirements as &$requirement) {

                # If they have anything that satisfies this requirement
                if(isset($satisfied_requirements[$requirement->id])) {

                    # Then how many hours have been completed...
                    $hours_completed = $satisfied_requirements[$requirement->id]['course_hours'];

                    # Subtract that from this requirements `requirement_hours`
                    # That kets stored in a new attribute for this $requirement, called `remaining_hours`
                    $requirement->remaining_hours = $requirement->requirement_hours - $hours_completed;
                }
                # They have nothing that satisfies this requirement, thus remaining_hours is unchanged
                else {
                    $requirement->remaining_hours = $requirement->requirement_hours;
                }
            }

            return view('dash.index')
            ->with('userCourses', $userCourses)
            ->with('requirements', $requirements);
        }

}
