<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        {{-- Metas --}}
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- Title --}}
        <title>{{ __('msg.beautyStudio') }} - {{ __('msg.antre18') }}</title>
        {{-- Styles --}}
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link href="css/mycss.css" rel="stylesheet" type="text/css">
        <style>
            body {
                font-family: 'Montserrat', sans-serif
            }
        </style>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
        {{-- Scripts --}}
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script>
            function openNav() {
              document.getElementById("navbar").style.width = "100%";
            }
            function closeNav() {
              document.getElementById("navbar").style.width = "0%";
            }
        </script>
    </head>
    <body>
        <div class="topnav overflow-auto fixed-top">
            <button class="showMenu" onclick="openNav()">&#9776;{{ __('msg.menuBtn') }}</button>
            <div class="lang">
                <a href="/setlocale/bg"><b>Български</b></a>
                <a href="/setlocale/en"><b>English</b></a>
                <a href="/setlocale/ru"><b>Română</b></a>
            </div>
        </div>
        
        <nav id="navbar">
            <button class="hideMenu" onclick="closeNav()">&times;</button>
            <div class="overlay-content">
                <a href="{{ route('welcome') }}">{{__('msg.home')}}</a>
                {{-- <a href="{{ route('catalogue') }}">{{ __('msg.catalogue') }}</a> --}}
                <a href="{{ route('service') }}">{{ __('msg.service') }}</a>
                <a href="{{ route('pricelist') }}">{{ __('msg.pricelist') }}</a>
                {{--<a href="{{ route('promo') }}">{{ __('msg.promo') }}</a>--}}
                <a href="{{ route('gallery') }}">{{ __('msg.gallery') }}</a>
                <a href="{{ route('aboutme') }}">{{ __('msg.aboutme') }}</a>
                <a href="{{ route('contact') }}">{{ __('msg.contact') }}</a>
            </div>
        </nav>
        
        @yield('content')

        <footer>
            <div class="container transparent">
                <div>
                    <a href="{{ route('contact') }}">{{ __('msg.contact') }}</a>
                    <ul style="list-style-type: none;">
                        <li>{{ __('msg.contact_1') }}</li>
                        <li>{{ __('msg.contact_2') }}</li>
                        <li>{{ __('msg.contact_3') }}</li>
                        <li>{{ __('msg.contact_4') }}</li>
                    </ul>
                </div>
            </div>
        </footer>
    </body>
</html>