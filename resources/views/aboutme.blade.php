@extends('layouts.layout')

@section('content')
    <h1 class="heading transparent">{{ __('msg.aboutme') }}</h1>
    <div class="container transparent">
        <div class="row">
            <div class="column-66">
                <p class="paragraph">{{__('msg.aboutme_1')}}</p>
                <p class="paragraph">{{__('msg.aboutme_2')}}</p>
            </div>
            <div class="column-33">
                <img src="/img/denitsa.jpg" alt="Denitsa">
            </div>
        </div>
    </div>
@endsection