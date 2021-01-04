@extends('layouts.layout')

@section('content')
    
        <h1 class="heading transparent">{{ __('msg.gallery') }}</h1>
    <div class="container">
        @forelse ($images as $image)
            <img src="{{ $image->url }}" alt="{{ $image->name }}">
        @empty
            {{ __('msg.gallery_1') }}
        @endforelse
    </div>
@endsection