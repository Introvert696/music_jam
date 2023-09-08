<?php

namespace App\Http\Controllers;

use App\Http\Requests\MusicPlaylist\StoreRequest;
use App\Models\MusicPlaylist;
use App\Models\Playlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MusicPlaylistController extends Controller
{
    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $favoritePlaylist = Playlist::firstOrCreate([
            'title' => 'Любимое',
            'creater_user' => Auth::user()->id
        ]);
        // dd($favoritePlaylist['id']);
        MusicPlaylist::firstOrCreate([
            'music_id' => $data['music_id'],
            'playlist_id' => $favoritePlaylist['id']
        ]);
        return redirect("");
    }
}
