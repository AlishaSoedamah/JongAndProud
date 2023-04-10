<nav>
    <a href="/"><img class="logo" src="{{ asset('images/logo.png') }}" alt="Jong & proud logo"></a>
    <ul class="nav-menu">
        <li><a href="/">Home</a></li>
        <li><a href="/about">Over ons</a></li>
        <li><a href="/activities">Activiteiten</a></li>
        <li><a href="/contact">Contact</a></li>
        <!-- @if(Session::has('user'))
            <li class="nav-item">
                <a>Wekom {{ Session::get('user')['name']}}!</a>
            </li>
            <li class="nav-item">
                <a href="/logout">logout</a>
            </li>
        @else
        <a href="/log-in"><li class="main-btn">Log in</li></a>
        <a href="/sign-up"><li class="main-btn">Aanmelden</li></a>
        @endif -->
    </ul>
    <div class="hamburger">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </div>
</nav>