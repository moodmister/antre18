@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Табло</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Добре дошла, Дени!
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Галерия</div>

                <div class="card-body">
                    <a href="/file-upload">Качване на файлове</a>
                    <a href="/view-uploads">Преглед на качените файлове</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection