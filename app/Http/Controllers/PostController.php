<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.post.index', ['posts' => Post::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.post.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // For Validation
        $validateData = $request->validate([
            'title'     => 'required|max:100',
            'user_id'   => 'required|integer',
            'content'   => 'required',
            'picture'   => 'required|file|image|mimes:png,jpg,jpeg|max:2000'
        ]);

        //upload image
        $image = $request->file('picture');
        $image->storeAs('public/posts', $image->hashName());

        // Make A Array
        $postData = [
            'title'     => $request->input('title'),
            'user_id'   => $request->input('user_id'),
            'content'   => $request->input('content'),
            'picture'   => $image->hashName(),
        ];

        // Save In Database
        Post::create($postData);

        return redirect('/admin/post')->with('message', "post created successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($post)
    {
        //Method findOrFail() akan menghasilkan halaman 404 jika data id mahasiswa tidak ditemukan
        $result = Post::findOrFail($post);

        return view('admin.post.show', ['post' => $result]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('admin.post.edit',['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        // For Validation
        $validateData = $request->validate([
            'title'     => 'required|max:100',
            'user_id'   => 'required|integer',
            'content'   => 'required',
            'picture'   => 'required|file|image|mimes:png,jpg,jpeg|max:2000'
        ]);

        // Rename Picture File Name
        $extFile = $request->picture->getClientOriginalExtension();
        $fileName = 'post-'.time().".".strtolower($extFile);

        // Store Picture to public/images/admin/posts
        $path = $request->picture->move('images/admin/posts', $fileName);

        // Make A Array
        $postData = [
            'title'     => $request->input('title'),
            'user_id'   => $request->input('user_id'),
            'content'   => $request->input('content'),
            'picture'   => $fileName
        ];

        // Save In Database
        $post->update($postData);

        return redirect('/admin/post')->with('message', "post updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //delete image
        Storage::delete('public/posts/'.$post->picture);

        $post->delete();

        return redirect('/admin/post')->with('message', "post deleted successfully");
    }
}
