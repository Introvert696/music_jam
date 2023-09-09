<?php

namespace App\Http\Controllers;

use App\Http\Requests\Music\StoreRequest;
use App\Models\Music;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class MusicController extends Controller
{
    public function get($title)
    {
        $filePath = storage_path('app\public\\' . $title);
        $filePath = storage_path('app\public\\' . $title);
        return response()->download($filePath);
    }
    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $file = $request->file('file');
        $musictitle = $data['title'] . ".mp3";
        $file->storeAs('/public', $musictitle);
        $musicData['title'] = $musictitle;
        $musicData['creater_user'] = Auth::user()->id;
        $music = Music::create($musicData);
        return redirect(route("main"));
    }
}
