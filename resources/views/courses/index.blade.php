@extends('layouts.master')

@section('title')
    All Curses
@stop

@section('content')

    <h1>All Courses</h1>
    <h4>Here are some courses!</h4>
    <ul>
        <li>course 1</l1>
        <li>course 2</l1>
        <li>course 3</l1>
        <li>course 4</l1>
        <li>course 5</l1>
        <li>course 6</l1>
    </ul


    {{-- @foreach($courses as $course)
        <div>
            <h2>{{ $course->title }}</h2>
            <a href='/courses/edit/{{$course->id}}'>Edit</a><br>
        </div>
    @endforeach --}}

@stop
