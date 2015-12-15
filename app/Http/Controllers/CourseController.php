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
        $courses = \App\Course::where('course_name','=','CSCI E-15 Dynamic Web Applications')->with('requirements')->first();
        return view('courses.index')
        ->with('courses', $courses);
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

        # Enter book into the database
        $course = new \App\Course();
        $course->course_name = $request->course_name;
        $course->crn = $request->crn;
        $course->course_hours = $request->course_hours;

        // $course->user_id = \Auth::id(); # <--- NEW LINE
        // $course->course_link = $request->purchase_link;

        $course->save();

        // # Add the tags
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getShow($title = null)
    {
        return view('courses.show')->with('title', $title);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
