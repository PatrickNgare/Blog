<?php

namespace App\Http\Controllers\posts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\post\PostModel;
use App\Models\post\Comment;
use App\Models\post\Category;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use PHPUnit\TextUI\XmlConfiguration\UpdateSchemaLocation;


class PostsController extends Controller
{
    public function index(){


        //First Section
        $posts=PostModel::all()->take(2);
        $postOne = PostModel::query()->orderBy('id', 'desc')->take(1)->get();
        $postTwo = PostModel::query()->orderBy('title', 'desc')->take(2)->get();


        //Business Section

        $postBiz=PostModel::where('category','Business')->take(2)->orderBy('id', 'desc')->get();
        $postBizTwo=PostModel::where('category','Business')->take(3)->orderBy('category', 'desc')->get();


        //Random postsection

        $randomPosts = PostModel::take(4)->orderby('category','desc')->get();


      //Culture Section

      $postCulture=PostModel::where('category','Culture')->take(2)->orderBy('id', 'desc')->get();
      $postCultureTwo=PostModel::where('category','Culture')->take(3)->orderBy('id', 'desc')->get();

      //Politics Section

      $postPolitics=PostModel::where('category','Politics')->take(9)->orderBy('created_at', 'asc')->get();


      //travel section
      $postTravel=PostModel::where('category','Travel')->take(1)->orderBy('id', 'desc')->get();
      $postTravelOne=PostModel::where('category','Travel')->take(1)->orderBy('title', 'desc')->get();
      $postTraveltwo=PostModel::where('category','Travel')->take(2)->orderBy('description', 'desc')->get();

      return view('posts.index',compact('posts','postOne','postTwo','postBiz','postBizTwo','randomPosts','postCulture','postCultureTwo','postPolitics','postTravel','postTravelOne','postTraveltwo'));

        }

        public function single($id){


            $single=PostModel::find($id);
            $user=User::find($single->user_id);
            $postPopular=PostModel::take(3)->orderBy('id', 'desc')->get();
            $categories = DB::table('categories')
               ->join('posts', 'posts.user_id', '=', 'categories.id')
               ->select('categories.name AS name', 'categories.id AS id', 'posts.user_id AS user_id', DB::raw('COUNT(posts.user_id) AS total'))
               ->groupBy('categories.name', 'categories.id', 'posts.user_id')
               ->get();


              //print_r($categories);

            //another commet
            return view('posts.single',compact('single','user','postPopular','categories'));


            //another comment

            $comments=Comment::where('post_id',$id)->get();
            $commentNum=$comments->count();
            $moreBlogs =PostModel::where('category',$single->category)
            ->where('id','!=', $id
            )->take(4)
            ->get();



            return view('posts.single',compact('single','user','postPopular','categories','comments','moreBlogs','commentNum'));


        }

    public function storeComment(Request $request){


        $insertComment=Comment::create([
            "comment"=>$request->comment,
            "user_id"=>Auth::User()->id,
            "user_name"=>Auth::User()->name,
            "post_id"=>$request->post_id,



        ]);

       return redirect('/posts/single/'.$request->post_id.'')->with('success','Comment added successfully' );
    }

    public function CreatePost(){

        $categories = Category::select('name')->distinct()->get();

        if(auth()->user()){
            return view("posts.create-post",compact('categories'));
        }else{

            return abort('404');
        }


    }

 public function storePost(Request $request){
    // Validate the form data including the image upload
    $request->validate([
        'title' => 'required|string',
        'category' => 'required|string',
        'description' => 'required|string',
        'image' => 'required|file|mimes:jpg,jpeg,png|max:2048', // Ensure it's a valid image
    ]);

    // Check if the image is uploaded and valid
    if ($request->hasFile('image') && $request->file('image')->isValid()) {
        // Define the destination path for saving the image
        $destinationPath = 'assets/images/';

        // Get the original file name of the image
        $fileName = $request->image->getClientOriginalName();

        // Move the file to the destination folder
        $request->image->move(public_path($destinationPath), $fileName);

        // Create a new post in the database
        $insertPost = PostModel::create([
            "title" => $request->title,
            "category" => $request->category,
            "user_id" => Auth::User()->id,
            "user_name" => Auth::User()->name,
            "description" => $request->description,
            "image" => $fileName, // Save the image name in the database
        ]);

        // Redirect back with a success message
        return redirect('/posts/create-post')->with('success', 'Post added successfully');
    }

    // If no file is uploaded or invalid, return with an error message
    return redirect()->back()->with('error', 'File upload failed.');
}



     public function deletePost($id){

          $deletePost=PostModel::find($id);

          $file_path=public_path('assets/images/'.$deletePost->image);
          unlink($file_path);
          $deletePost->delete();
          return redirect('/posts/index')->with('delete', 'Post Deleted successfully');

            }

            public function editPost($id){

                $single=PostModel::find($id);
                $categories = Category::select('name')->distinct()->get();
                if(auth()->user()){

                    if(Auth::user()->id== $single->user_id){


                        return view("posts.edit-post",compact('single','categories'));

                    }else{
                        return abort(404);
                    }
                }


            }



            public function updatePost(Request $request, $id){

                $updatePost=PostModel::find($id);

                $updatePost->update($request->all());

                Request()->validate([
                    'title' => 'required|string',
                    'category' => 'required|string',
                    'description' => 'required|string|max:1000',
                ]);

                if($updatePost){
                    return redirect('/posts/single/'. $updatePost->id.'')->with('update', 'Post Updated successfully');
                }

            }

    public function contact(){

        return view('pages.contact');
    }

    public function about(){

        return view('pages.about');
    }

    public function search(Request $request){

        $search = $request->search;

        $posts = PostModel::select()->where('title','LIKE',"%$search%")->get();

        return view('posts.search',compact('posts'));
    }
}