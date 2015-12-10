@extends('layouts.master')

@section('title')
    Grad Dashboard
@stop

@section('content')

    <h1>Your Graduation Dashboard</h1>
    <p>You're almost there!</p></br>
    <h3>Requirements Remaining:</h3>
    <ul>
        <li>course 5</l1>
        <li>course 6</l1>
    </ul>

    <h3>Classes Taken:</h3>
    <ul>
        <li>course 1</l1>
        <li>course 2</l1>
        <li>course 3</l1>
        <li>course 4</l1>
    </ul


    {{-- @foreach($courses as $course)
        <div>
            <h2>{{ $course->title }}</h2>
            <a href='/courses/edit/{{$course->id}}'>Edit</a><br>
        </div>
    @endforeach --}}

@stop
