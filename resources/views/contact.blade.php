@extends('layouts.layout')

@section('content')
    <div class="wrapper">
        <h1>Контакти</h1>
        <ul style="list-style-type: none;">
            <li>гр. Русе 7002</li>
            <li>ул. Петко Р. Славейков 18</li>
            <li>тел. +359 877 515 375</li>
            <li>antre18.art@gmail.com</li>
        </ul>
        <div class="mapouter">
            <div class="gmap_canvas">
                <iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=%D0%B0%D0%BD%D1%82%D1%80%D0%B5%2018&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            </div>
            <style>
                .mapouter {
                    position:relative;
                    text-align:right;
                    height:500px;
                    width:600px
                }
                .gmap_canvas {
                    overflow:hidden;
                    background:none!important;
                    height:500px;
                    width:600px;
                    height: 100%;
                    width: 100%
                    }
                </style>
            </div>
    </div>
@endsection