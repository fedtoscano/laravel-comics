    <header>
        <div class="logo-container">
            <a href="/">
                <img src="{{Vite::asset("resources/img/dc-logo.png")}}">
            </a>
        </div>
        <div class="navbar-container">
            <ul>
                @foreach ($navbarLinks as $navbarLink)
                <li class="{{ (Route::currentRouteName()==$navbarLink["text"]) ? "active" : "" }}">
                    <a href="/{{ $navbarLink["text"] }}">
                        {{ strtoUpper($navbarLink["text"]) }}
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </header>
