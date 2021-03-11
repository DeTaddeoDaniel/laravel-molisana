@extends('layout.app')

@section('title', 'Molisana homepage')

@section('content')
    <p>
        <span>Sono il prodotto: </span>
        <span>@php echo $pasta['titolo']; @endphp</span>
    </p>

    @php
        // dd($pasta);
    @endphp

    <img src="{{$pasta['src']}}" alt="">
    
    <div class="sezioneImmagine"></div>
@endsection