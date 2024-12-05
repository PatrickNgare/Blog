<?php

namespace App\Http\Controllers\posts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\post\PostModel;

class PostsController extends Controller
{
    public function index(){


        //First Section
        $posts=PostModel::all()->take(2);
        $postOne = PostModel::query()->orderBy('id', 'desc')->take(1)->get();
        $postTwo = PostModel::query()->orderBy('title', 'desc')->take(2)->get();


        //Business Section

        $postBiz=PostModel::where('category','Business')->take(2)->get();
        $postBizTwo=PostModel::where('category','Business')->take(3)->orderBy('title', 'desc')->get();


        //Random postsection

        $randomPosts = PostModel::take(4)->orderby('category','desc')->get();


      //Culture Section

      $postCulture=PostModel::where('category','Culture')->take(2)->get();
      $postCultureTwo=PostModel::where('category','Culture')->take(3)->orderBy('title', 'desc')->get();

      //Politics Section

      $postPolitics=PostModel::where('category','Politics')->take(9)->get();


      //travel section
      $postTravel=PostModel::where('category','Politics')->take(1)->get();


      return view('posts.index',compact('posts','postOne','postTwo','postBiz','postBizTwo','randomPosts','postCulture','postCultureTwo','postPolitics','postTravel'));

        }

        public function single($id){

        }
    }

