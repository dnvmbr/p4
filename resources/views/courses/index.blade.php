@extends('layouts.master')

@section('title')
All the courses
@stop

@section('content')
<p>Add search functionality</p>
<h1>Viewing All Courses</h1>
@foreach($allCourses as $course)
<div>
    <p><a href='/courses/{{$course["crn"] }}'><h3>{{ $course["course_name"]}}</h3></a>
        @if($user->tookCourse($course['id']))
        <a href="/courses/{{ $course['crn'] }}/remove">Remove course from completed</a>
        @endif
        @if(!$user->tookCourse($course['id']))
        <a href="/courses/{{ $course['crn'] }}/add">Add course to completed</a>
        @endif
    </p>
</div>
@endforeach
@stop
