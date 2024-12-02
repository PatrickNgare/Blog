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


        //Second Section

        

      return view('posts.index',compact('posts','postOne','postTwo'));

        }

        public function single($id){

        }
    }

