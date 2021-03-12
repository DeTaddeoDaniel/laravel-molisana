@extends('layout.app')

@section('title', '{$paste["titolo"]}')

@section('content')
    <section>
        <div class="container">
            

            <div class="cards">

                @foreach ($paste as $pasta)
                    <article class="card">
                        <a href="{{route($pasta['pagina'])}}">
                            <img src="{{asset($pasta['src'])}}" alt="">
                            {{-- {{-- <a href="{{route('pagina-homepage')}}">Home</ --}}
                        </a>
                    </article>
                @endforeach        
                    
            </div>
        </div>
    </section>
@endsection