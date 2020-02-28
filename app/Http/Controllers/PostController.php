<?php

namespace App\Http\Controllers;
use App\Post;
use App\User;
use Auth;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function showPost(){
        return view('posts.formPost');
    }
    public function addPost(Request $request ){
        $user = User::find(auth::id());
        $post = new Post;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->user_id = $user->id;
        $post -> save();
        return redirect('home');
    }
}
