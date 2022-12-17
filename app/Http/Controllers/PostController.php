<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Flasher\Prime\FlasherInterface;

class PostController extends Controller
{
    public function add(Request $request, FlasherInterface $flasher ){
        $request->validate([
            'title'=>'required',
            'content'=>'required',
        ]);


        // if validation fails




        $post =new Post();
        $post->title =$request->title;
        $post->date=now();
        $post->content =$request->content;

        $post->save();
        $flasher->addSuccess('Book saved successfully');

        // return "post is Saved"." ". $post->id;
        return redirect()->route('dashboard');
        // return redirect('items');

        // return $post;
        // return request('title');
    }
    
    public function index(){
        // dd("posts");
        return view('posts');
    }

    public function edit($id, FlasherInterface $flasher ){
        // $post =Post::findOrFail($id);
        $post =Post::find($id);
        if(empty($post)){
            $flasher->addError('Page Not Found');
            return redirect()->route('dashboard');
        };
        

        return view('editPost', [
            'post'=>$post
        ]);
    }

    public function update($id, Request $request, FlasherInterface $flasher ){
        $updatedPost=Post::findOrFail($id);

        $request->validate([
            'title'=>'required',
            'content'=>'required',
        ]);

        $updatedPost->title = $request->title;
        $updatedPost->content = $request->content;

        $updatedPost->save();
        $flasher->addSuccess('Book saved successfully');

        // return "update";
        return redirect() ->route('dashboard');
    }

    public function delete($id, Request $request, FlasherInterface $flasher ){
        $deletedPost=Post::findOrFail($id);

        $deletedPost->delete();
        $flasher->addSuccess('Post deleted successfully');

        // return "update";
        return redirect() ->route('dashboard');
    }
}
