@extends('layouts.master')


@section('title')
    Show Course
@stop

@section('content')
    <div class=shower>
        <h1>{{ $course->course_name }}</h1>
        @if($user->tookCourse($course['id']))
        <a href="/courses/{{ $course['crn'] }}/remove">Remove from taken courses</a>
        @endif
        @if(!$user->tookCourse($course['id']))
        <a href="/courses/{{ $course['crn'] }}/add">   Add to taken courses!</a>
        @endif
        <div>
            <h3>Requirements</h3>
            <ul>
                @foreach($course->requirements as $requirement)
                    <li>{{ $requirement->requirement_name }}</li>
                @endforeach
            </ul>
        </div>
        @if($course->harvard_url)
            <h3><a href='{{$course->harvard_url}}'>Link to HarvardExt's page</a></h3>
        @endif

    </div>

@stop
