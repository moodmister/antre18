@extends('layouts.layout')

@section('content')
<div class="wrapper">
  <h1 class="transparent heading"><b>{{ __('msg.service') }}</b></h1>
</div>
<div class="container transparent">
    <div class="row">
      <div class="column-66">
        <h2 class="large-font">{{ __('msg.service_1') }}</h1>
        <p class="paragraph">
            {{ __('msg.service_1_1') }}</p>
      </div>
      <div class="column-33">
          <img src="/img/Manicure/manicure-picture-1.jpeg" width="335" height="471">
      </div>
    </div>
</div>
<div class="container transparent">
    <div class="row">
        <div class="column-33">
            <img src="/img/Lashes/lashes-picture.jpg" width="335" height="471" style="margin:40px 0">
        </div>
        <div class="column-66">
        <h2 class="large-font">{{ __('msg.service_2') }}</h1>
        <p class="paragraph">{{__('msg.service_2_1')}}</p>
      </div>
    </div>
</div>
@endsection