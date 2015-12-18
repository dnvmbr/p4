<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex(Request $request)
    {
        return view('courses.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCreate()
    {
        $requirementModel = new \App\Requirement();
        $requirements_for_checkbox = $requirementModel->getRequirementsForCheckboxes();

        return view('courses.create')
        ->with('requirements_for_checkbox',$requirements_for_checkbox);
    }

    /**
     * Responds to requests to POST /courses/create
     */
    public function getPost(Request $request) {

        // $this->validate(
        //     $request,
        //     [
        //         'title' => 'required|min:5',
        //         'cover' => 'required|url',
        //         'published' => 'required|min:4',
        //       ]
        // );

        # Enter course into the database
        $course = new \App\Course();
        $course->course_name = $request->course_name;
            $course->crn = $request->crn;
        $course->course_hours = $request->course_hours;

        // $course->user_id = \Auth::id(); # <--- NEW LINE
        // $course->course_link = $request->purchase_link;

        $course->save();

        // // # Add the requirements
        if($request->requirements) {
            $requirements = $request->requirement;
        }
        else {
            $requirements = [];
        }
        $course->requirements()->sync($requirements);

        # Done
        \Session::flash('flash_message','Your book was added!');
        return redirect('/courses');

    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getShow($crn)
    {
        $course = \App\Course::where('crn','=',$crn)->with('requirements')->first();
        return view('courses.show')->with('course', $course);
    }

    public function getAdded($crn) {
        $course_id = \App\Course::where('crn','=',$crn)->first()->id;
        $user = \Auth::user();
        $user->courses()->attach($course_id);
        \Session::flash('flash_message','The course was added to your list!');
        return redirect()->back();;
    }
    public function getRemoved($crn) {
        $course_id = \App\Course::where('crn','=',$crn)->first()->id;
        $user = \Auth::user();
        $user->courses()->detach($course_id);

        \Session::flash('flash_message','The course was removed from your list!');
        return redirect()->back();
    }



}
