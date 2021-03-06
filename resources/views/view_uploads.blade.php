@extends('components.master')
@include('components.nav')

<p class="msg">{{ session('msg') }}</p>
<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th class="cs-p-1">Name</th>
                <th class="cs-p-1">URL</th>
            </tr>
        </thead>

        @forelse($images as $image)
            <tr>
                <td class="cs-p-1">{{ $image->name }}</td>
                <td class="cs-p-1"><a href="{{ $image->url }}">View Image</a></td>
                <td class="cs-p-1">
                    <form action="/view-uploads/{{ $image->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button>Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <p>No Images at the moment</p>
        @endforelse
    </table>
</div>