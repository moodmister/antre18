@extends('layouts.layout')

@section('content')
    <div class="wrapper">
        <h1>{{ __('msg.pricelist') }}</h1>
        <ul class="pricelist">
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