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

      return view('posts.index',compact('posts','postOne','postTwo','postBiz','postBizTwo'));

        }

        public function single($id){

        }
    }

