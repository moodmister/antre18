@extends('layouts.layout')

@section('content')
    <div class="wrapper">
        <h1 class="heading transparent">{{ __('msg.pricelist') }}</h1>
    </div>
    <div class="container transparent">    
        <ul class="pricelist">
            <li>{{ __('msg.pricelist_1') }}</li>
            <li>{{ __('msg.pricelist_2') }}</li>
            <li>{{ __('msg.pricelist_3') }}</li>
            <li>{{ __('msg.pricelist_4') }}</li>
            <li>{{ __('msg.pricelist_5') }}</li>
            <li>{{ __('msg.pricelist_6') }}</li>
            <li>{{ __('msg.pricelist_7') }}</li>
        </ul>
        {{ __('msg.pricelist_8') }}
    </div>
@endsection