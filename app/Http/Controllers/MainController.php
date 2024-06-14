<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $title = 'main';
        $katakata = Profile::all();
        return view('main', compact('katakata', 'title'));
    }
}
