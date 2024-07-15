<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/js/app.js')

</head>
<body>
    {{-- !IMPORTO IL LAYOUT PRINCIPALE --}}
    @extends("layout.app")
    <header>
        {{-- ! INCLUDO I PARTIALS I CUI @SECTIONS VANNO A SOSTITUIRSI AGLI @YIELD NEL LAYOUT PRINCIPALE --}}
        @include("partials.header")
    </header>

    <main>
        {{-- ! INCLUDO I PARTIALS I CUI @SECTIONS VANNO A SOSTITUIRSI AGLI @YIELD NEL LAYOUT PRINCIPALE --}}
        @include("partials.main")
    </main>

    <footer>
        {{-- ! INCLUDO I PARTIALS I CUI @SECTIONS VANNO A SOSTITUIRSI AGLI @YIELD NEL LAYOUT PRINCIPALE --}}
        @include("partials.footer")
    </footer>
</body>
</html>
