<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function mypage()
    {
        $user = Auth::user();
        return view('users.mypage', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //ビューへ渡して表示
        $user = Auth::user();
        return view('users.profile', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user = Auth::user();
        
        $user->name = $request->input('name') ? $request->input('name') : $user->name;
        $user->email = $request->input('email') ? $request->input('email') : $user->email;
        $user->update();
        
        return redirect()->route('mypage');
    }

    public function editPassword()
    {
        return view('users.edit_password');
    }
    
    public function updatePassword(Request $request)
    {
        $user = Auth::user();

        if ($request->input('password') == $request->input('confirm_password')) {
            $user->password = bcrypt($request->input('password'));
            $user->update();
        } else {
            return redirect()->route('mypage.edit_password');
        }

        return redirect()->route('mypage');
    }

    public function delete(Request $request)
    {
        $article = Auth::user($request->id);
        $article->delete();
        return redirect('/');
    }
}
