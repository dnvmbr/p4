@extends('layouts.master')


@section('title')
    Show Course
@stop

@section('content')
        <h1>Course Name: {{ $course->course_name }}</h1>
        @if($user->tookCourse($course['id']))
        <a href="/courses/{{ $course['crn'] }}/removefromuser">   Remove from taken courses</a>
        @endif
        @if(!$user->tookCourse($course['id']))
        <a href="/courses/{{ $course['crn'] }}/add">   Add to taken courses!</a>
        @endif

        <h3>Harvard Page: </h3>
        <div>
            <h3>Requirements</h3>
            <ul>
                @foreach($course->requirements as $requirement)
                    <li>{{ $requirement->requirement_name }}</li>
                @endforeach
            </ul>
        </div>

@stop
