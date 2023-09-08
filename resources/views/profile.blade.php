@extends('layouts.app')
@section('content')
    <div class="container">
        <p class="fs-1">Мой профиль</p>
        <hr>
        <p class="fs-4">Имя: {{ Auth::user()->name }}</p>
        <p class="fs-4">Почта: {{ Auth::user()->email }}</p>
        <p class="fs-2">Мои плейлисты</p>
        <hr>
        <div class="row">
            @foreach ($playlists as $item)
                <div class="col-sm-3 mb-3 mb-sm-0 mt-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $item['title'] }}</h5>
                            <a href="{{ route('playlist.show', ['id' => $item['id']]) }}"
                                class="btn btn-primary">Открыть</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endsection
