<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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


    public function store(Request $request)
    {
        $request->validate([
           'status'=> 'string|max:250',
           'image'=> 'mimes:jpg,jpeg,png,svg,gif|max:3000',
        ]);

        if($request->hasFile('image')){
            $file= $request->file('image');

            $extension= $file->getClientOriginalExtension();
            $fileName= 'image_' . time() . '.' . $extension;
            $location= '/images/user_'. Auth::user()->id. '/';

            $file->move(public_path().$location, $fileName);
            $imageFinal= $location.$fileName;
        }

        Post::insert([
           'status'=> $request->get('status') ?? '',
           'photo'=> $request->hasFile('image') ? $imageFinal : '',
           'likes'=> json_encode(array()),
           'shares'=> json_encode(array()),
           'user_id'=> Auth::user()->id,
        ]);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
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
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
