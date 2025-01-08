<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\post\PostModel;
use App\Models\post\Category;
use App\Models\Admin\Admin;

class AdminsController extends Controller
{
    public function viewlogin(){
        return view('admins.login-admins');
    }

    public function checkLogin(Request $request)
    {
        // Validate the form input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5',  // Adjust password rule as per your requirement
        ]);

        // Attempt to authenticate with the 'admin' guard
        $remember_me = $request->has('remember_me') ? true : false;

        // Authenticate using the provided credentials
        if (Auth::guard('admin')->attempt(['email' => $request->input('email'), 'password' => $request->input('password')], $remember_me)) {
            // If successful, redirect to the dashboard
            return redirect()->route('admins.dashboard');
        }

        // If authentication fails, return back with error message
        return redirect()->back()->with('error', 'Invalid credentials');
    }


    public function index(){

        $post = PostModel::all();
        $postCount = $post->count();

        $categories = Category::all();
        $countcategories = $categories->count();

        $admins = Admin::all();
        $adminsCount = $admins->count();



        return view('admins.index',compact('postCount','countcategories','adminsCount'));
    }

   //admins sections
    public function admins(){
        $admins = Admin::all();
        return view('admins.admins',compact('admins'));
    }

    public function createAdmins(){
        

        return view('admins.create-admins',compact('admins'));
    }

    public function storeAdmins(){

        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
         


        return view('admins.create-admins');
    }
}


