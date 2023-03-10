<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    protected function index()
    {
        $images = Image::get();
        return view('home', compact('images'));
    }

    public function album(){
         $albums =Album::with('images')->get();


        return view('welcome', compact('albums'));
    }

    public function show($id){

        $albums = Album::findOrFail($id);

        return view('gallery', compact('albums'));

    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'album'=>'required|min:3|max:50',
            'image'=>'required',
        ]);

        $album = Album::create(['name'=>$request->get('album')]);

        if ($request->hasFile('image')) {

            foreach ($request->file('image') as $image) {

                $path = $image->store('uploads', 'public');

                Image::create([
                    'name' => $path,
                    'album_id' => $album->id,
                ]);
            }
        }

        return "<div class='alert alert-success'> Album created successfully!</div>";

    }

    public function destroy(){
        $id = request('id');
        $image = Image::findOrFail($id);
        $filename = $image->name;
        $image->delete();
        \Storage::delete('public/'.$filename);
        return redirect()->back()->with('message', 'Image delete successfully');
    }

    public function addImage(Request $request){
        $albumId = request('id');
        if ($request->hasFile('image')) {

            foreach ($request->file('image') as $image) {

                $path = $image->store('uploads', 'public');

                Image::create([
                    'name' => $path,
                    'album_id' =>$albumId,
                ]);
            }
        }

        return redirect()->back()->with('message', 'Image added successfully');
    }


}
