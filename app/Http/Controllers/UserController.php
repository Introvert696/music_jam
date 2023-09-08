<?php

namespace App\Http\Controllers;

use App\Models\Playlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $playlists = Playlist::where('creater_user', Auth()->user()->id)->get();

        return view("profile", ['playlists' => $playlists]);
    }
}
