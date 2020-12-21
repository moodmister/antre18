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
                color: #000000;
                background-color: #eee3b5
            }
            a {
                display: inline-block;
                color: #eee3b5;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
            }
            a:hover {
                color: #000;
                background-color: #dac78b
            }
            a{
                text-decoration: none;
            }
            nav {
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color: #000;
                
            }
        </style>
    </head>
    <body>
        <img src="img/logo-wht.png" alt="logo" width="200px" height="120px">
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