<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'video' => 'required',
            'category' => 'required',
        ]);
        // Handle file upload

        if ($request->hasFile('video')) {
            // Get file name with the extension
            $filenameWithExt = $request->file('video')->getClientOriginalName();
            // Get just file name
            $fileName = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just the extension
            $extension = $request->file('video')->getClientOriginalExtension();
            // File nameto store
            $fileNameToStore = $fileName . '_' . time() . '.' . $extension;
            // Upload video
            \Image::make($request->file('video'))->save(public_path('posts/') . $fileNameToStore);
        } else {
            return response()->json('error', 'video is required');
        }
        // Create Product
        $post = new Post;
        $post->title = $request->input('title');
        $post->video = $fileNameToStore;
        $post->user_id = auth()->user()->id;
        $post->category_id = Category::findOrFail($request->input('category'));
        $post->save();

        return response()->json([200, 'success', 'Video successfully uploaded']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
