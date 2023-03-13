<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\post;
use App\Http\Requests\StorepostRequest;
use App\Http\Requests\UpdatepostRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostController extends Controller
{

    public function index()
    {
        $data['posts']=Post::where('user_id', auth()->id())->get();
        if (Auth::user()->role_id == 1){
            $data['posts']=Post::get();
        }
        $data['categories']=Category::get();

        return view('backend.post-index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.post-index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorepostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorepostRequest $request)
    {
        $path = '';
        if ($request->hasFile('image')){
            $path = $request->file('image')->store('post');
        }
        Post::create([
            'user_id' => Auth::id(),
            'category_id' => $request->get('category_id'),
            'title' => $request->get('title'),
            'slug' => Str::slug($request->title, '-'),
            'description' => $request->get('description'),
            'image' => $path
        ]);
        return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(post $post)
    {
        $data['post'] = $post;
        $data['categories']=Category::get();
        return view('backend.post-edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepostRequest  $request
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatepostRequest $request, post $post)
    {
        if ($request->hasFile('image')){
            if ($post->image){
                Storage::delete($post->image);
            }
            $path = $request->file('image')->store('post');
            $post->image = $path;
        }
        $post->category_id = $request->category_id;
        $post->title = $request->title;
        $post->slug = preg_replace('/\s+/u', '-', trim($request->title));
        $post->description = $request->description;
        if ($request->has('status')){
            $post->status = $request->status;
        }

        $post->update();
        return redirect()->route('post.index') ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(post $post)
    {
        $post->delete();
        return redirect()->route('post.index');
    }
}
