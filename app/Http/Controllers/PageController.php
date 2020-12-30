<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Auth;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            //code...
            $posts = Post::orderBy('created_at', 'desc')->paginate(10);
            return view('index')->with('posts', $posts);
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    /**
     * watch a single video.
     *
     * @return \Illuminate\Http\Response
     */
    public function watch($uuid)
    {
        try {
            //code...
            $post = Post::where('uuid', $uuid)->first();
            $posts = Post::orderBy('created_at', 'desc')->paginate(10);
            return view('watch_video', compact(['post', $post, 'posts', $posts]));
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function account()
    {
        if (Auth::guest()) {
            //is a guest so redirect
            return redirect('/login');
        }
        return view('user/account');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
