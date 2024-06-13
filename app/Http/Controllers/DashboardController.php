<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $profil = Profile::all();
        return view('admin.dashboard', compact('profil'));
    }
}
