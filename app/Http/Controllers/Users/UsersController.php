<?php

namespace App\Http\Controllers\Users;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function editProfile($id){
        $user = User::find($id);
        return view('users.update-profile', compact('user'));
    }

    public function updateProfile(Request $request, $id){

        $updateProfile=User::find($id);

        $updateProfile->update($request->all());

        if($updateProfile){
            return redirect('/users/update/'. $updateProfile->id.'')->with('update', 'Post Updated successfully');
        }

}
}