@extends('layouts.layout')

@section('content')
    
        <h1 class="heading transparent">{{ __('msg.pricelist') }}</h1>
        <ul class="pricelist">
        <div class="container transparent">
            <li>{{ __('msg.pricelist_1') }}</li>
            <li>{{ __('msg.pricelist_2') }}</li>
            <li>{{ __('msg.pricelist_3') }}</li>
            <li>{{ __('msg.pricelist_4') }}</li>
            <li>{{ __('msg.pricelist_5') }}</li>
            <li>{{ __('msg.pricelist_6') }}</li>
            <li>{{ __('msg.pricelist_7') }}</li>
        </ul>
    </div>
@endsection