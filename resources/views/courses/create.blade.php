@extends('layouts.master')

@section('title')
Create Course
@stop

@section('content')

<h1 align=center>Add a new course</h1></br>

<form method='POST' action='/courses/create'>
    <div class=courses>
        <div class="col-md-4">
            <input type='hidden' value='{{ csrf_token() }}' name='_token'>

            <div class='form-group'>
                <label><strong>* Course Name:</strong></label>
                <input
                type='text'
                id='course_name'
                name='course_name'
                value='{{ old('course_name') }}'
                >
                <div class=error>
                    @if($errors->get('course_name'))
                            @foreach($errors->get('course_name') as $error)
                                Please enter a course name
                            @endforeach
                    @endif
                </div>
            </div>

            <div class='form-group'>
                <label for='CRN'><strong>* CRN (5 Digits): </strong></label>
                <input
                type='number'
                id='crn'
                name="crn"
                value='{{ old('crn') }}'
                >
                <div class=error>
                    @if($errors->get('crn'))
                        @foreach($errors->get('crn') as $error)
                            Please enter the courses 5 Digit CRN
                        @endforeach
                    @endif
                </div>
            </div>

            <div class='form-group'>
                <label for='course_hours'><strong>Credit Hours: </strong></label>
                <label><input type="radio" name="course_hours" value="2"> 2 </label>

                <label><input type="radio" name="course_hours" value="4" checked> 4</label>
            </div>

            <div class='form-group'>
                <label for='title'><strong>URL Course Site: </strong></label>
                <input
                type='text'
                id='harvard_url'
                name='harvard_url'
                value='{{ old('harvard_url') }}'
                >
            </div>

        </div>
        <div class="col-md-3">
            <div class='form-group'>
                <div class=error>
                    @if($errors->get('requirements'))
                        @foreach($errors->get('requirements') as $error)
                            <p>Please select atleast one requirement</p>
                        @endforeach
                    @endif
                </div>

                <strong>* Requirements</strong></br>
                @foreach($requirements_for_checkbox as $requirement_id => $requirement)
                <label><input type='checkbox' name='requirements[]' value='{{$requirement_id}}'> {{ $requirement['requirement_name'] }}</label><br>
                @endforeach
            </div>
        </div>
        <div class="col-md-3">
            <button type="submit" class="btn btn-primary">Add Course!</button>
            <div class=error>
                @if(count($errors) > 0)
                    Please fix your errors in red!
                @endif
            </div>
        </div>
    </div>

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
