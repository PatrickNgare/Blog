<?php

namespace App\Http\Controllers\Users;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\post\PostModel;

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
        'email' => 'required|email|max:25',
        'bio'   => 'required|max:300',
        'name'  => 'required|string|max:25',
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
    $latestPost = PostModel::where('user_id', $id)
    ->orderBy('created_at', 'desc')
    ->take(4)
    ->get();


    return view('users.profile',compact('profile','latestPost'));

}




}

