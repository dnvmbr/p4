@extends('layouts.master')

@section('title')
Grad Dashboard
@stop

@section('content')
    <div align=center>
        <h2>{{  $user->name  }}'s Dashboard</h2></br>
    </div>
    <div class="row">
        <div class="col-md-4">
            <h3>Requirements Remaining</h3>
            <ul>
                @foreach($requirements as $requirement)
                    @if($requirement->remaining_hours <= 0)
                        <li><strike>{{$requirement->requirement_name}} ({{$requirement->remaining_hours}} credits)</strike></li>
                    @else
                        <li>{{$requirement->requirement_name}} ({{$requirement->remaining_hours}} credits)</li>
                    @endif
                @endforeach
            </ul>
        </div>
        <div class="col-md-5">
            <h3>Completed Courses</h3>
            @if(sizeof($userCourses) == 0)
                You have not added any courses. <a href=/courses/>Add some!</a>
            @else
                <ul>
                    @foreach($userCourses as $userCourse)
                        <li><a href='/courses/{{$userCourse->crn}}'>{{ $userCourse->course_name }}</a></li>
                    @endforeach
                </ul>
            @endif
        </div>
        <div class="col-md-3">
            <h3>External Links...</h3>
            <ul>
                <li><a href='https://www.pin1.harvard.edu/cas/login?service=https%3A%2F%2Fwww.pin1.harvard.edu%2Fpin%2Fauthenticate%3F__authen_application%3DFAS_DCE_DCEWEB%26splash%3Dextension'>Online Services</a></li>
                <li><a href='http://www.extension.harvard.edu/academics/courses/courses-by-degree/bachelor-of-liberal-arts'>Degree Course Search</a></li>
            </ul>
        </div>
    </div>
@stop
