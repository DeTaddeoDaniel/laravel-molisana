@extends('layout.app')

@section('title', 'Molisana homepage')

@section('content')

@php
    dd($pasta);   
@endphp

    <img src="{{$pasta['src']}}" alt="">
    
@endsection