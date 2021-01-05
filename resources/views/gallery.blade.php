@extends('layouts.layout')

@section('content')
    
        <h1 class="heading transparent">{{ __('msg.gallery') }}</h1>
    {{--<div class="container transparent">
        @forelse ($images as $image)
            <div class="image column-33">
                <a href="{{ $image->url }}">
                    <img src="{{ $image->url }}" alt="{{ $image->name }}" style="height: 100%; width:100%">
                </a>
            </div>
        @empty
            {{ __('msg.gallery_1') }}
        @endforelse
    </div>--}}

    <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
          @forelse ($images as $image)
            <li data-target="#demo" data-slide-to="{{ $loop->index }}"></li>
          @empty
              {{ __('msg.gallery_1') }}
          @endforelse
        </ul>
      
        <!-- The slideshow -->
        <div class="carousel-inner">
            @forelse ($images as $image)
                <div class="carousel-item active">
                    <img src="{{ $image->url }}" alt="{{ $image->name }}">
                </div>            
            @empty
                {{ __('msg.gallery_1') }}
            @endforelse
        </div>
      
        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      
      </div>
@endsection