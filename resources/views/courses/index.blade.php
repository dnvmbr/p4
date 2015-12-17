@extends('layouts.master')

@section('title')
All the courses
@stop

@section('content')
    <p>Add search functionality</p>
    <h1>Viewing All Courses</h1>
    @foreach($allCourses as $allCourse)
        <div>
            <h3><a href='/courses/{{$allCourse->crn}}'>{{ $allCourse->course_name }}</a></h3>
            {{-- <a href='/courses/edit/{{$allCourse->id}}'>Edit</a> |
            <a href='/courses/confirm-delete/{{$allCourse->id}}'>Delete</a><br> --}}
        </div>
    @endforeach
@stop
