<?php

namespace App\Http\Controllers;

use App\Models\Music;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MainController extends Controller
{
    public function index(Request $request)
    {
        $musics = Music::all();
        return view("index", ['musics' => $musics]);
    }
    public function about()
    {
        return view("about");
    }
    public function upload()
    {
        return view("upload");
    }
}
