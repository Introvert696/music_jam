@extends('layouts.app')
@section('content')
    <div class="container">
        <p class="text-center  fs-1  " style="color:rgb(241, 173, 218);">Добро пожаловать в Music_jam</p>
    </div>
    <div class="container">
        <audio controls class="m-auto" id="musicplayer" autoplay hidden>
            <source src="{{ route('music', ['title' => 'none']) }}" type="audio/mp3">
        </audio>
        <div class="player">
            <p class="text-center fs-1" id="music-title"></p>
            <div class="progressbar">
                <div class="progressline">

                </div>
            </div>
            <div class="player-controll-btns ">
                <div class="control-btn" id="prewios">PREW</div>
                <div class="control-btn" id="playbtn">PLAY</div>
                <div class="control-btn" id="pausebtn">PAUSE</div>
                <div class="control-btn" id="next">NEXT</div>
            </div>
            <p class="text-center fs-5" style="color:rgb(241, 173, 218);">Громкость</p>
            <div class="player-controll-volume">
                <div class="progress-volume">

                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <table class="table music-list">
            @foreach ($musics as $item)
                <tr>
                    <th class="flex" style="display:flex; justify-content:space-between ">
                        <div class="title">{{ $item['title'] }} </div>
                        @auth
                            <div class="btn right-0">
                                <form action="{{ route('musicplaylist.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="music_id" value="{{ $item['id'] }}">
                                    <button type="submit" class="btn">Добавить</button>
                                </form>
                            </div>
                        @endauth
                    </th>
                </tr>
            @endforeach
        </table>
        {{ $musics->links() }}
    </div>
@endsection
