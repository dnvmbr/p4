@extends('layouts.master')

@section('title')
    List Courses
@@stop


@section('content')
    @if(!isset($title))
        You have not specified a course
    @else
        <h1>Show course: {{ $title }}</h1>
    @endif
@stop

@section('body')
@@stop
