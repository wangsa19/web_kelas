<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::all();
        $categories = Gallery::distinct()->pluck('category');
        return view('gallery', compact('galleries', 'categories'));
    }

    public function admin()
    {
        $galleries = Gallery::all();
        $categories = Gallery::distinct()->pluck('category');
        return view('admin.galery', compact('galleries', 'categories'));
    }

    public function add()
    {
        return view('admin.add-gallery');
    }

    public function store(Request $request)
    {
        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category' => 'required',
        ]);

        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('public/gallery');
            $fileName = basename($path);
        } else {
            return redirect()->back()->with('error_message', 'Upload foto gagal.');
        }

        Gallery::create([
            'photo' => $fileName,
            'category' => $request->category,
        ]);


        return redirect()->route('admin.galery')->with('success_message', 'Upload Foto Berhasil.');
    }

    public function edit($id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('admin.edit-gallery', compact('gallery'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category' => 'required',
        ]);

        $gallery = Gallery::findOrFail($id);

        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('public/gallery');
            $gallery->photo = $path;
        }

        $gallery->category = $request->category;
        $gallery->save();

        return redirect()->route('admin.galery')->with('success_message', 'Foto Berhasil di Edit.');
    }


    public function delete($id)
    {
        $gallery = Gallery::find($id);
        Storage::delete($gallery->photo);
        $gallery->delete();

        return back()->with('message', 'Foto Berhasil dihapus!');
    }
}
