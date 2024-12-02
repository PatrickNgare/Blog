<?php

namespace App\Http\Controllers\posts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\post\PostModel;

class PostsController extends Controller
{
    public function index(){

        $posts=PostModel::all();

      return view('posts.index',compact('posts'));

        }
    }

