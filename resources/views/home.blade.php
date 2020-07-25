@extends('layouts.app')

@section('content')
    <h1> HOME </h1>
    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis nisi deleniti
     voluptatem ex molestias iure inventore rerum voluptatum sed. Provident voluptatem 
     distinctio ad illum. Inventore eum incidunt deleniti et quisquam. </p>
@endsection


@section('sidebar')
    @parent
    <p> this is appended to the sidebar</p>
@endsection