<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;
use Auth;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
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
     * Fetch category
     */
    public function upload()
    {
        if (Auth::guest()) {
            //is a guest so redirect
            return redirect('/login');
        }
        try {
            //code...
            $categories = Category::all();
            return view('user/upload')->with('categories', $categories);
        } catch (\Throwable $th) {
            //throw $th;
        }
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
            'description' => 'required',
            'category' => 'required',
            'video' => 'required|file|mimes:mp4|max:1000000',
        ]);
        // Variables
        $title = $request->title;
        $description = $request->description;
        $category = $request->category;
        $video = request()->file('video');
        $path = $video->store('videos');
        // Handle file upload
        try {
            
            // Get category
            $cat = Category::where('name', '=', $category)->firstOrFail();
            $category_id = $cat->id;
            // Create Product
            $post = new Post;
            $post->uuid = Uuid::uuid4();
            $post->user_id = auth()->user()->id;
            $post->category_id = $category_id;
            $post->title = $title;
            $post->description = $description;
            $post->video = $path;
            $post->save();

        return back()->with('success', 'Video successfully uploaded');
        } catch (\Throwable $th) {
            //throw $th;
            return back()->with('error', 'Unable to upload video' .$th);
        }
        
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
