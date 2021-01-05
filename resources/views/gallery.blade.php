@extends('layouts.layout')

@section('content')
    
    <h1 class="heading transparent xlarge-font"><b>{{ __('msg.gallery') }}</b></h1>
    
    <div class="container">
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
                @foreach ($images as $image)
                    @if ($loop->first)
                        <div class="carousel-item active">
                            <img src="{{ $image->url }}" alt="{{ $image->name }}">
                        </div>
                    @else
                        <div class="carousel-item">
                            <img src="{{ $image->url }}" alt="{{ $image->name }}">
                        </div>
                    @endif
                @endforeach
            </div>
        
            <!-- Left and right controls -->
            @empty($images)
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
                </a>
            @endempty
        </div>
    </div>
@endsection