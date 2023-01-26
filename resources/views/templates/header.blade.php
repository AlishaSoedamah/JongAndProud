<nav>
    <ul>
        <li><a href="/"><img class="logo" src="{{ asset('images/logo.png') }}" alt="Jong & proud logo"></a></li>
        <li><a href="/">Home</a></li>
        <li><a href="/about">Over ons</a></li>
        <li><a href="/activities">Activiteiten</a></li>
        <li><a href="/gallery">Galerij</a></li>
        <li><a href="/contact">Contact</a></li>
        @if(Session::has('user'))
            <li class="nav-item">
                <a>wecome {{ Session::get('user')['name']}}</a>
            </li>
            <li class="nav-item">
                <a href="/logout">logout</a>
            </li>
        @else
        <a href="/login"><li class="main-btn">Log in</li></a>
        <a href="/sign-up"><li class="main-btn">Aanmelden</li></a>
        @endif
    </ul>
</nav>