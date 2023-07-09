<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Category;
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
        $post = Post::latest()->get();
        return view('backend.post.index', compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.post.create',[
            'post'      => new Post,
            'category'  => Category::get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        $file = $request->file('image');
        $path = time() . '_' . $request->title . '.' . $file->getClientOriginalExtension();
      
        // dd($request->category_id);
        Post::create([
            'category_id'   => $request->category_id,
            'title'         => $request->title,
            'body'          => $request->body,
            'image'         => $path
        ]);
        Storage::disk('local')->put('public/post/' . $path, file_get_contents($file)); 

        return redirect()->route('post.index')->with('success', 'Data Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $category   = Category::all();
        return view('backend.post.edit', compact('category', 'post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, Post $post)
    {
        if($request->hasFile('image')){
            
            $file = $request->file('image');
            $path = time() . '_' . $request->title . '.' . $file->getClientOriginalExtension();
            Storage::delete('public/post/' . $post->image);
            Storage::disk('local')->put('public/post/' . $path, file_get_contents($file)); 
        }else{
            $path       = $post->image;
        }

        $post->update([
            'category_id'   => $request->category_id,
            'title'         => $request->title,
            'body'          => $request->body,
            'image'         => $path
        ]);
        
        return redirect()->route('post.index')->with('success', 'Data Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        Storage::delete('public/post/' . $post->image);

        return redirect()->back()->with('success', 'Data Berhasil Di Delete');

    }
}
