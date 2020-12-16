@extends('layouts.layout')

@section('content')
    <div class="wrapper">
        <h1>Галерия</h1>

        @forelse ($images as $image)
            <img src="{{ $image->url }}" alt="{{ $image->name }}">
        @empty
            Няма изображения
        @endforelse
    </div>
@endsection