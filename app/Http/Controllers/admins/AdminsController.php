<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\post\PostModel;
use App\Models\post\Category;
use App\Models\Admin\Admin;
use Illuminate\Support\Facades\Hash;

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

        $categories = Category::select('name')->distinct()->get();
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


        return view('admins.create-admins');
    }

    public function storeAdmins(Request $request){

        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
          // Create a new post in the database
        $insertAdmin = Admin::create([
            "email" => $request->email,
            "name" => $request->name,
            "password" => Hash::make($request->password),

        ]);

        // Redirect back with a success message
        return redirect('/admin/show-admins')->with('success', 'Admin added successfully');


        return view('admins.create-admins');
    }


    public function categories(){
        $categories = Category::all();
        return view('admins.categories',compact('categories'));
    }

    public function createCategories(){


        return view('admins.create-categories');
    }

    public function storeCategories(Request $request){

        $data = request()->validate([
            'name' => 'required',
        ]);
          // Create a new post in the database
        $insertCategory = Category::create([
            "name" => $request->name,

        ]);

        // Redirect back with a success message
        return redirect('/admin/show-categories')->with('success', 'Category created successfully');
}

public function deleteCategories($id)
{
    // Find the category by ID or fail if not found
    $category = Category::find($id);

    // Delete the category
    $category->delete();

    // Redirect back to the categories list with a success message
    return redirect('/admin/show-categories')->with('delete', 'Category Deleted Successfully');
}

public function edit($id)
{


$category=Category::find($id);


return view('admins.edit-categories',compact('category'));
}


public function updateCategories(Request $request, $id)
{
    Request()->validate([
        'name' => 'required|max:40',
    ]);

    $updatecategory = Category::find($id);
    $updatecategory->update($request->all());  

    return redirect('/admin/show-categories')->with('update', 'Category updated successfully');
}


public function posts(){

    $posts=PostModel::all();

  return view('admins.posts',compact('posts'));

}

public function deletePosts($id)
{
    // Find the category by ID or fail if not found
    $post = PostModel::find($id);

    $file_path=public_path('assets/images/'.$post->image);
     unlink($file_path);
    // Delete the category
    $post->delete();

    // Redirect back to the categories list with a success message
    return redirect('/admin/show-posts')->with('delete', 'Post Deleted Successfully');
}


}
