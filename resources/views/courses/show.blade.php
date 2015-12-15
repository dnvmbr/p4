@extends('layouts.master')


@section('title')
    Show Course
@stop

@section('content')
    @if($title)
        <h1>Show course: {{ $title }}</h1>
    @else
        <h1>No course chosen</h1>
    @endif
@stop
