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
        <img src="img/logo-wht.png" alt="logo" width="200px" height="120px">
        <nav id="navbar">
            <button class="hideMenu" onclick="closeNav()">&times;</button>
            <div class="overlay-content">
                <a href="{{ route('welcome') }}">Начална страница</a>
                <a href="{{ route('catalogue') }}">Каталог</a>
                <a href="{{ route('service') }}">Услуги</a>
                <a href="{{ route('pricelist') }}">Ценоразпис</a>
                <a href="{{ route('promo') }}">Промо пакети</a>
                <a href="{{ route('gallery') }}">Галерия</a>
                <a href="{{ route('aboutme') }}">За мен</a>
                <a href="{{ route('contact') }}">Контакти</a>
            </div>
        </nav>
        <button class="showMenu" onclick="openNav()">&#9776;Меню</button>
        @yield('content')
    </body>
</html>