@extends('layout')


@section('title')
    profile page
@endsection

@section('content')
<h2>This is profile page</h2>
@if($id)
<h3> Id is {{$id}}</h3>
@endif
@endsection
