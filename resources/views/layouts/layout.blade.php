<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        {{-- Metas --}}
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- Title --}}
        <title>Салон за красота - Антре 18</title>
        {{-- Styles --}}
        <style>
            body {
                color: #dfae10;
                background-color: #121214;
            }
            a {
                border: solid 1px;
                text-decoration: none;
                color: #dfae10;
            }
            a:hover {
                background-color: #dfae10;
                color: #000000
            }
        </style>
    </head>
    <body>
        <img src="img/logo-blck.png" alt="logo" width="200px" height="120px">
        <nav class="navbar">
            <a href="{{ route('welcome') }}">Начална страница</a>
            <a href="{{ route('catalogue') }}">Каталог</a>
            <a href="{{ route('service') }}">Услуги</a>
            <a href="{{ route('pricelist') }}">Ценоразпис</a>
            <a href="{{ route('promo') }}">Промо пакети</a>
            <a href="{{ route('gallery') }}">Галерия</a>
            <a href="{{ route('aboutme') }}">За мен</a>
            <a href="{{ route('contact') }}">Контакти</a>
        </nav>
        @yield('content')
    </body>
</html>