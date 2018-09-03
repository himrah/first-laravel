@extends('layout')


@section('title')
    welcome page
@endsection

@section('content')
<h2>welcome page</h2>
go to <a href="/profile">profile</a> Page
go to <a href="/my">My</a> Page
<h2>Data</h2>
@foreach($data as $d)
    <li>{{$d["name"]}}</li>
    <li>{{$d["Roll"]}}</li>
@endforeach 

@endsection