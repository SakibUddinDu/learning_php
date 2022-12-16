<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Flasher\Prime\FlasherInterface;

class PostController extends Controller
{
    // public function add(Request $request, FlasherInterface $flasher ){
    public function add(Request $request){
        $request->validate([
            'title'=>'required',
            'content'=>'required',
        ]);
        $post =new Post();
        $post->title =$request->title;
        $post->date=now();
        $post->content =$request->content;

        $post->save();

        // $flasher->addSuccess('Book saved successfully');

        // return "post is Saved"." ". $post->id;
        return redirect()->route('dashboard');
        // return redirect('items');

        // return $post;
        // return request('title');
    }
    public function index(){
        return view('posts');
    }
}
