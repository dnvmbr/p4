@extends('layouts.master')


@section('title')
    Show Course
@stop

@section('content')
    @if($title)
        
        <h1>Course Name: {{ $title }}
        <button type="submit" class="btn btn-primary">I took this course!</button></h1>
        <h3>Harvard Page: </h3>

        <div>
            <h3>Requirements</h3>
            {{-- <ul>
                @foreach($allCourses as $allCourse)
                    <li>{{ $allCourse->requirement_name }}</li>
                @endforeach
            </ul> --}}
        </div>
    @else
        <h1>No course chosen</h1>
    @endif

@stop
