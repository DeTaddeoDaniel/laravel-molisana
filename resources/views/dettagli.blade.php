@extends('layout.app')

@section('css')
    <link rel="stylesheet" href="/css/app.css">
@endsection

@section('title', 'Molisana homepage')

@section('content')

    <img src="{{$pasta['src']}}" alt="">
    
@endsection