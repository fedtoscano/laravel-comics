<footer>
    <div class="footer-top">
        <div class="navbar-container">

            <ul id="dc-comics-ul">
                <li>DC COMICS</li>
                @foreach ($dcComicsUlEls as $link )
                    <li>
                        {{$link}}
                    </li>
                @endforeach
            </ul>

            <ul id="shop-ul">
                <li>SHOP</li>
                @foreach ($shopUlEls as $link )
                <li>
                    {{$link}}
                </li>
            @endforeach

            </ul>

            <ul id="dc-ul">
                <li>DC</li>
                @foreach ($dcUlEls as $link )
                <li>
                    {{$link}}
                </li>
            @endforeach

            </ul>

            <ul id="sites-ul">
                <li>SITES</li>
                @foreach ($sitesUlEls as $link )
                <li>
                    {{$link}}
                </li>
                @endforeach
            </ul>

        </div>

        <div class="dc-logo-container">

            <img src="{{Vite::asset("resources/img/dc-logo-bg.png")}}" alt="">
        </div>
    </div>

    <div class="footer-bottom">
        <div class="sign-up">
            <button>SIGN UP NOW!</button>
        </div>
        <div class="follow-us">
            <span>FOLLOW US</span>
            <div class="socials-container">
                <img src="{{Vite::asset("resources/img/footer-facebook.png")}}" alt="">
                <img src="{{Vite::asset("resources/img/footer-twitter.png}")}}" alt="">
                <img src="{{Vite::asset("resources/img/footer-youtube.png}")}}" alt="">
                <img src="{{Vite::asset("resources/img/footer-periscope.png")}}" alt="">
                <img src="{{Vite::asset("resources/img/footer-pinterest.png")}}" alt="">
            </div>
        </div>
    </div>

</footer>
