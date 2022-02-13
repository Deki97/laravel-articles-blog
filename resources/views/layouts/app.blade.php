<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Google Font Titillium Web Import --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
    
    {{-- Fontawesome Import --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    {{-- Css Link --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>@yield('page_title')</title>
</head>
<body>
    {{-- Qui dentro avrai i componenti header, footer e main --}}
    {{-- Per i componenti non statici utilizziamo @yield --}}

    {{-- Header --}}
    @include('partials.header')

    {{-- Main --}}
    <main>
        @yield('main_section')
    </main>

    {{-- Footer --}}
    @include('partials.footer')
</body>
</html>