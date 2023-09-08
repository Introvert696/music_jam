<?php

namespace App\Http\Controllers;

use App\Models\Music;
use App\Models\MusicPlaylist;
use App\Models\Playlist;
use Illuminate\Http\Request;

class PlaylistController extends Controller
{
    public function show(Request $request, $id)
    {
        $playlist = Playlist::where("id", $id)->get()[0];
        $tracks = MusicPlaylist::where("playlist_id", $id)->get();
        $musics = [];

        foreach ($tracks as $tr) {

            $ms = Music::where('id', $tr['music_id'])->get();
            array_push($musics, $ms[0]);
        }


        return view('playlist', ['playlist' => $playlist, 'musics' => $musics]);
    }
}
