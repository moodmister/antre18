@extends('layouts.layout')

@section('content')
    
    <h1 class="heading transparent">{{ __('msg.contact') }}</h1>
    <div class="container transparent">
        <ul style="list-style-type: none;">
            <li>{{ __('msg.contact_1') }}</li>
            <li>{{ __('msg.contact_2') }}</li>
            <li>{{ __('msg.contact_3') }}</li>
            <li>{{ __('msg.contact_4') }}</li>
        </ul>
    </div>
    
    <div class="mapouter hide-600">
        <div class="gmap_canvas">
            <iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=%D0%B0%D0%BD%D1%82%D1%80%D0%B5%2018&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
        </div>
    </div>

    <div class="mapouter-small hide--600">
        <div class="gmap_canvas-small">
            <iframe width="300" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=%D0%B0%D0%BD%D1%82%D1%80%D0%B5%2018&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
        </div>
    </div>
@endsection