@extends('layouts.main')
@section('container')
    <h1>All of about me</h1>
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
    <img src="img/{{ $image }}" alt="{{ $name }}">
@endsection