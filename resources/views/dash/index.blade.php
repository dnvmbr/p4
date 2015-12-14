@extends('layouts.master')

@section('title')
Grad Dashboard
@stop

@section('content')
    <div align=center>
        <h1>Your Graduation Dashboard</h1>
        <p>You're almost there!</p></br>
    </div>
    <h3>Requirements Remaining</h3>
    <ul>
            @foreach($courses->requirements as $requirement)
                <li>{{$requirement->requirement_name}} ({{$requirement->requirement_hours}} credits)</li>
            @endforeach
    </ul>

    <h3>Classes Taken</h3>
    <strong>{{$courses->course_name}}</strong>
    <ul>
        @foreach($courses->requirements as $requirement)
            <li>{{$requirement->requirement_name}}</li>
        @endforeach
    </ul>

    @stop
