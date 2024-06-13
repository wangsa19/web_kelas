<?php

namespace App\Http\Controllers;
use App\Models\Profile;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        $profil = Profile::all();
        return view('profile', compact('profil'));
    }
    public function create(){
    return view('admin.add-profile');
    }

    public function store(Request $request){
        $request->validate([
            'nama' => 'required',
            'foto' => 'required|mimes:jpg,png,jpeg',
            'kata' => 'required',
        ]);
        $imageName = '';
        if($request->file('foto')){
            $extension = $request->file('foto')->getClientOriginalExtension();
            $imageName = $request->nama . time() . '.' . $extension;
            $request->file('foto')->storeAs('foto-profil', $imageName);
        }
        Profile::create([
            'nama' => $request->nama,
            'foto' => $imageName,
            'kata_kata' => $request->kata
        ]);
        return redirect()->back()->with('message', 'berhasil menambah profil..');
    }

    public function edit($id){
        return view('admin.edit-profile');
    }
    public function delete($id){
        $profil = Profile::findOrFail($id);
        $profil->delete();

        return redirect()->back()->with('message', 'berhasil menghapus profile');
    }
}
