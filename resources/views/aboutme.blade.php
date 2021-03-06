@extends('layouts.layout')

@section('content')
<div class="wrapper">
    <h1 class="heading transparent">{{ __('msg.aboutme') }}</h1>
</div>
    <div class="container transparent">
        <div class="row">
            <div class="column-66">
                <p class="paragraph">{{__('msg.aboutme_1')}}</p>
                <p class="paragraph">{{__('msg.aboutme_2')}}</p>
            </div>
            <div class="column-33 round">
                <img src="/img/denitsa.jpeg" alt="Denitsa">
            </div>
        </div>
    </div>
    <div class="container transparent">
        <div class="row">
            <div class="column-33 round">
                <img src="/img/denitsa2.jpeg" alt="Denitsa2">
            </div>
            <div class="column-66">
                <p class="paragraph">{{__('msg.aboutme_3')}}</p>
            </div>
        </div>
    </div>
@endsection