@extends('layout.app')

@section('title', 'Molisana prodotti item')

@section('content')
    <section>
        <div class="container">
            @php
                $arrayProdotti = [
                    '1','2','3'
                ]
            @endphp

            <div class="types">

                @foreach ($arrayProdotti as $prodotto)
                    <div class="card">
                        <p>This is number {{ $prodotto->id }}</p>
                    </div>
                @endforeach
                    
            </div>
        </div>
    </section>
@endsection