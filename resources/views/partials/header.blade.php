    <header>
        <div class="logo-container">
            <img src="{{Vite::asset("resources/img/dc-logo.png")}}">
        </div>
        <div class="navbar-container">
            <ul>
                @foreach ($navbarLinks as $navbarLink)
                <li>
                    <a href="#">
                        {{ strtoUpper($navbarLink["text"]) }}
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </header>
