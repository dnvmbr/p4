@extends('layouts.master')

@section('title')
Grad Dashboard
@stop

@section('content')
<div align=center>
    <h1>Your Graduation Dashboard</h1>
    <h2>{{  $user->name  }} you're almost there!</h2></br>
</div>
<div class="row">
    <div class="col-md-6">
        <h3>Requirements Remaining</h3>
        <ul>
            @foreach($requirements as $requirement)
            <li>{{$requirement->requirement_name}} ({{$requirement->requirement_hours}} credits)</li>
            @endforeach
        </ul>

    </div>
    <div class="col-md-6">
        <h3>Completed Courses</h3>
        <ul>
            @foreach($userCourses as $userCourse)
            <li><a href='/courses/{{$userCourse->crn}}'>{{ $userCourse->course_name }}</a></li>
            @endforeach
        </ul>

    </div>
</div>


@stop
