@extends('layouts.layout')

@section('content')
    <div class="wrapper">
        <h1>{{ __('msg.gallery') }}</h1>
        @forelse ($images as $image)
            <img src="{{ $image->url }}" alt="{{ $image->name }}">
        @empty
            {{ __('msg.gallery_1') }}
        @endforelse
    </div>
@endsection