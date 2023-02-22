<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $posts = Post::with('tag')->get();
//        return $posts;
        return view('home', compact('posts'));

//        $users =User::get();
//        $users = User::query()
//            ->with('posts');
////            ->get();
//
//        return view('home', compact('users'));

    }
//    public function index(){
//        return view('home');
//    }

    public function create()
    {
        return view('home');
    }

    public function store(Request $request)
    {
        $title = $request->get('title');
        echo $title;
    }
}
