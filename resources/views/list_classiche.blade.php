@extends('layout.app')

@section('title', 'Molisana classiche')

@section('content')
    <section>
        <div class="container">
            

            <div class="cards">

                @php
                    // dd($paste);
                @endphp       


                @foreach ($paste as $pasta)
                    <article class="card">
                        <a href="#">
                            <img src="{{asset($pasta['src'])}}" alt="$tipo_pasta['link']">
                        </a>
                    </article>
                @endforeach        
                    
            </div>
        </div>
    </section>
@endsection

{{-- <a href="{{route('pagina-homepage')}}">Home</ --}}