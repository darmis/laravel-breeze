<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('user.edit')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        
            $request->validate([
                'name' => 'required|string|max:255|min:2',
                'email' => 'unique:users,email,'.$user->id,
                'new_password' => 'required|string|confirmed|min:8',
            ]);
    
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->new_password);
            $user->save();

            return redirect('/')->with('success', 'User profile updated successfully!');

    }
}
