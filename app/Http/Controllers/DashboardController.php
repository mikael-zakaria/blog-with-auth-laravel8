<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.post.index', ['posts' => Post::all()]);
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
        return view('dashboard.post.show', ['post' => $result]);
    }
}
