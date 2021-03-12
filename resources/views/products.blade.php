@extends('layout.app')

@section('title', 'Molisana prodotti')

@section('content')
    <section>
        <div class="container">
            

            <div class="cards">

                @php
                    // dd($tipi_pasta);
                @endphp       


                @foreach ($tipi_pasta as $tipo_pasta)
                    <article class="card">
                        <a href="{{route('pagina-'.$tipo_pasta['link'])}}">
                            <img src="{{asset($tipo_pasta['src'])}}" alt="">
                            {{-- {{-- <a href="{{route('pagina-homepage')}}">Home</ --}}
                        </a>
                    </article>
                @endforeach        
                    
            </div>
        </div>
    </section>
@endsection