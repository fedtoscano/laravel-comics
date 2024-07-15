<main>
    <section>
        <ul id="card-list">
            @foreach ($comics as $comic)
            <article class="single-card">
                    <img src="{{ $comic["thumb"]}}" alt="">
                    <span> {{ $comic["title"] }}</span>
            </article>
            @endforeach
        </ul>
    </section>
</main>

