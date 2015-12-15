@extends('layouts.master')

@section('title')
    All the courses
@stop

@section('content')
    <div class='courses'>
        @foreach($courses as $course)
            {{-- <h2>{{ $course->crn }}</h2> --}}
        @endforeach
    </div>
@stop
