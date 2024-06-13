<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $katakata = Profile::all();
        return view('main', compact('katakata'));
    }
}
