<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Http\Requests\StoreBlogPost;

class PostController extends Controller
{
    public function index()
    {
        $post = new Post;
        $data = $post->data();
        return view("posts.index", compact('data'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(StoreBlogPost $request)
    {
        // $request->file('photo')->store('images', 'public');
        // $data =  $request->all();
        // return view('posts.index', compact('data'));
        $validate = $request->validated();
        return back()->with('message', 'Your form has been successfully submitted.');
    }

    public function show($id)
    {
        $data = [
            'name' => "Ishrat Ali",
            'age' => 23
        ];
        return view('posts.show', compact('data'));
    }

    public function edit($id)
    { }

    public function update(Request $request, $id)
    { }

    public function destroy($id)
    { }
}
