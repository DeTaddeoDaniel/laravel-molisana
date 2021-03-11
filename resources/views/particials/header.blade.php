<header>
    
    <div class="container">
        <div class="logo">
        <img src="{{asset('img/logo.png')}}" alt="logo">
    </div>

    <nav>
        <ul>
            <li class="{{ Request::is('/') ? 'active' : '' }}">
                <a href="{{route('pagina-homepage')}}">Home</a>
            </li>
            <li class="{{ Request::is('i-prodotti') ? 'active':''}}">
                <a href="{{route('pagina-prodotti')}}">Prodotti</a>
            </li>
            <li class="{{ Request::is('news') ? 'active' :''}}">
                <a href="{{route('pagina-notizie')}}">Notizie</a>
            </li>
        </ul>
    </nav>
    </div>

</header>