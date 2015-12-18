@extends('layouts.master')

@section('title')
All the courses
@stop

@section('content')
<h1 align=center>Viewing All Courses</h1>
@foreach($allCourses as $course)
<div>
    <p><a href='/courses/{{$course["crn"] }}'><h4>{{ $course["course_name"]}}</h4></a>
        @if($user->tookCourse($course['id']))
        <a href="/courses/{{ $course['crn'] }}/remove">Remove course from completed</a>
        @endif
        @if(!$user->tookCourse($course['id']))
        <a href="/courses/{{ $course['crn'] }}/add">Add course to completed</a>
        @endif
    </br></br>
    </p>
</div>
@endforeach
@stop
