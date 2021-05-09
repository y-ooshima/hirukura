<?php

namespace App\Http\Controllers;

use App\Post;
use App\hillclimb_locations;
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
        $hillclimb_locations = hillclimb_locations::all();

        return view('review.create', compact('hillclimb_locations'));
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
        $post = new Post();
        $post->user_id = $request->input('user_id');
        $post->hillclimb_location_id = $request->input('hillclimb_location_id');
        $post->comment = $request->input('comment');
        $post->image_path = $request->input('image_path');
        $post->evaluation_point = $request->input('evaluation_point');
        $post->difficulty_point = $request->input('difficulty_point');
        $post->scenery_point = $request->input('scenery_point');
        $post->road_surface_point = $request->input('road_surface_point');
        $post->mileage = $request->input('mileage');
        $post->running_time = $request->input('running_time');
        $post->climbing_day = $request->input('climbing_day');

        $post->save();

        return redirect()->route('posts.show', ['id' => $post->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);

        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = [
            'comment' => $request->comment,
            'image_path' => $request->image_path,
            'evaluation_point' => $request->evaluation_point,
            'difficulty_point' => $request->difficulty_point,
            'road_surface_point' => $request->road_surface_point,
            'mileage' => $request->mileage,
            'running_time' => $request->running_time,
            'climbing_day' => $request->climbing_day,
        ];
        Post::where('id', $id)->update($update);
        return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::where('id', $id)->delete();
        
        $hillclimb_locations = hillclimb_locations::all();
        return view('review.create', compact('hillclimb_locations'));
    }
}
