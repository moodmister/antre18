<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        {{-- Metas --}}
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- Title --}}
        <title>Салон за красота - Антре 18</title>
        {{-- Styles --}}
        <link href="css/mycss.css" rel="stylesheet" type="text/css">
        {{-- Scripts --}}
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
        <div>

            <button class="showMenu" onclick="openNav()">&#9776;{{ __('msg.menuBtn') }}</button>
            <button class="showMenu" onclick="">Български</button>
            <button class="showMenu" onclick="">English</button>
        </div>
        <img src="img/logo-wht.png" alt="logo" width="200px" height="120px">
        
        <nav id="navbar">
            <button class="hideMenu" onclick="closeNav()">&times;</button>
            <div class="overlay-content">
                <a href="{{ route('welcome') }}">{{__('msg.home')}}</a>
                <a href="{{ route('catalogue') }}">{{ __('msg.catalogue') }}</a>
                <a href="{{ route('service') }}">{{ __('msg.service') }}</a>
                <a href="{{ route('pricelist') }}">{{ __('msg.pricelist') }}</a>
                <a href="{{ route('promo') }}">{{ __('msg.promo') }}</a>
                <a href="{{ route('gallery') }}">{{ __('msg.gallery') }}</a>
                <a href="{{ route('aboutme') }}">{{ __('msg.aboutme') }}</a>
                <a href="{{ route('contact') }}">{{ __('msg.contact') }}</a>
            </div>
        </nav>
        
        @yield('content')
    </body>
</html>