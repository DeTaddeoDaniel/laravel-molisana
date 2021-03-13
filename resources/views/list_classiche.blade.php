@extends('layout.app')

@section('css')
    <link rel="stylesheet" href="/css/app.css">
@endsection

@section('title', 'Molisana classiche')

@section('content')
    <section class="bg-azzurro">
        <div class="container ">
            
            @php
                $collection = collect($paste);
                $pasta_lunga = $collection -> where('tipo','lunga');
                $pasta_corta = $collection -> where('tipo','corta');
                $pasta_cortissima = $collection -> where('tipo','cortissima');

                // dd($pasta_lunga);

            @endphp       

            {{-- PASTA: LUNGHE --}}
            <h2>LE LUNGHE</h2>
            
            <div class="cards">

                @foreach ($pasta_lunga as $pasta) 

                    <article class="card">
                        <a href="#">
                            <img src="{{asset($pasta['src'])}}" alt="$tipo_pasta['link']">
                        </a>
                    </article>

                    {{-- lunga / corta / cortissima --}}

                @endforeach        
                    
            </div>
            
            {{-- PASTA: LE CORTE --}}
            <h2>LE corte</h2>
            
            <div class="cards">

                @foreach ($pasta_corta as $pasta) 

                    <article class="card">
                        <a href="#">
                            <img src="{{asset($pasta['src'])}}" alt="$tipo_pasta['link']">
                        </a>
                    </article>

                    {{-- lunga / corta / cortissima --}}

                @endforeach        
                    
            </div>

            {{-- PASTA: LE CORTISSIME --}}
            <h2>LE cortissima</h2>
            
            <div class="cards">

                @foreach ($pasta_corta as $pasta) 

                    <article class="card">
                        <a href="#">
                            <img src="{{asset($pasta['src'])}}" alt="$tipo_pasta['link']">
                        </a>
                    </article>

                    {{-- lunga / corta / cortissima --}}

                @endforeach        
                    
            </div>

            


        </div>
    </section>
@endsection

{{-- <a href="{{route('pagina-homepage')}}">Home</ --}}