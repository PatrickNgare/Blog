<?php

namespace App\Http\Controllers\posts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\post\PostModel;
use App\Models\post\Comment;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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

            //another comment

            $comments=Comment::where('post_id',$id)->get();
            $moreBlogs =PostModel::where('category',$single->category)
            ->where('id','!=', $id
            )->take(4)
            ->get();


            return view('posts.single',compact('single','user','postPopular','categories','comments','moreBlogs'));

        }

    public function storeComment(Request $request){


        $insertComment=Comment::create([
            "comment"=>$request->comment,
            "user_id"=>Auth::User()->id,
            "user_name"=>Auth::User()->name,
            "post_id"=>$request->post_id,



        ]);

       return redirect('/posts/single/'.$request->post_id.'')->with('success','Comment added succesfully' );
    }


    }

