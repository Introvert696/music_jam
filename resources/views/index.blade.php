@extends('layout.main')
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
        </div>
    </div>

    <div class="container">
        <table class="table music-list">
            @foreach ($musics as $item)
                <tr>
                    <th>{{ $item['title'] }}</th>
                </tr>
                <p></p>
            @endforeach
        </table>
    </div>
@endsection
