<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use App\Mountains;
use Illuminate\Support\Facades\Auth;
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
        $post = Post::latest()->first();

        $user_id = $post->user_id;
        $user = User::findOrFail($user_id);

        $mountain_id = $post->mountain_id;
        $mountain = Mountains::findOrFail($mountain_id);

        return view('posts.index',compact('post','user','mountain'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $user_id = Auth::user()->id;

        $mountain_name = $request->input('mountain_name');
        $mountain_id = Mountains::where('name', $mountain_name)->value('id');

        $post = new Post();
        $post->user_id = $user_id;
        $post->mountain_id = $mountain_id;
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

        $user_id = $post->user_id;
        $user = User::findOrFail($user_id);

        $mountain_id = $post->mountain_id;
        $mountain = Mountains::findOrFail($mountain_id);

        return view('posts.show', compact('post','mountain','user'));
    }

    public function usersShow()
    {
        $user_id = Auth::user()->id;
        $posts = Post::where('user_id', $user_id)->get();

        return view('users.past_show', compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user_id = Auth::user()->id;

        $post = Post::findOrFail($id);
        if($user_id == $post->user_id){
            return view('users.edit', compact('post'));
        }else{
            return redirect('/');
        }
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
            'scenery_point' => $request->scenery_point,
            'road_surface_point' => $request->road_surface_point,
            'mileage' => $request->mileage,
            'running_time' => $request->running_time,
            'climbing_day' => $request->climbing_day,
        ];
        Post::where('id', $id)->update($update);
        return redirect('/mypage/show');

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

        return redirect('/');
    }

    public function search(Request $request)
    {

        $data = $request->all();//データ読み取り
        $prefecture_name = $data['text'];

        $mountain_name = Mountains::where('prefecture', $prefecture_name)->pluck('name');
        
        return response()->json($mountain_name);

    }
}
