@extends('layouts.master')

@section('title')
Create Course
@stop





@section('content')

<h1>Add a new course</h1>

{{-- @include('errors') --}}

<form method='POST' action='/courses/create'>

    <input type='hidden' value='{{ csrf_token() }}' name='_token'>

    <div class='form-group'>
        <label>Course Name:</label>
        <input
        type='text'
        id='course_name'
        name='course_name'
        value='{{ old('course_name') }}'
        >
    </div>

    <div class='form-group'>
        <label for='CRN'>CRN (5 Digits): </label>
        <input
        type='text'
        id='crn'
        name="crn"
        value='{{ old('crn') }}'
        >
    </div>

    <div class='form-group'>
        <label for='course_hours'>Credit Hours: </label>
        <label><input type="radio" name="course_hours" value="2"> 2  </label>

        <label><input type="radio" name="course_hours" value="4" checked> 4 </label>
    </div>

    <div class='form-group'>
        <label for='title'>URL Course Site: </label>
        <input
        type='text'
        id='course_link'
        name='course_link'
        value='{{ old('course_link') }}'
        >
    </div>


    <div class='form-group'>
        <label for='requirements'>Requirements</label>
        @foreach($requirements_for_checkbox as $requirement_id => $requirement)
        <label><input type='checkbox' name='requirements[]' value='{{$requirement_id}}'> {{ $requirement['requirement_name'] }}</label><br>
        @endforeach
    </div>

    <button type="submit" class="btn btn-primary">Add Course!</button>
</form>

@stop


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')
{{-- <script src="/js/books/create.js"></script> --}}
@stop
