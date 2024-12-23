<?php

namespace App\Http\Controllers\Users;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function editProfile($id){
        $user = User::find($id);

        if (auth()->user()){
            if (Auth::user()->id==$user->id){
                return view('users.update-profile', compact('user'));
            }else{
                return abort('404');
            }
        }else {
            return abort('404');
        }


    }
public function updateProfile(Request $request, $id)
{
    $request->validate([
        'email' => 'required|email',
        'bio'   => 'nullable|string',
        'name'  => 'required|string|max:255',
    ]);

    $user = User::find($id);

    if (!$user) {
        return redirect()->back()->with('error', 'User not found.');
    }

    $user->update($request->only(['email', 'bio', 'name']));

    return redirect('/posts/index')->with('update.user', 'Profile updated successfully.');
}

public function profile($id){

    $profile=User::find($id);


    return view('users.profile',compact('profile'));

}

}

