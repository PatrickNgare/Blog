<?php

namespace App\Http\Controllers\posts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(){

        $posts=Post::all();

      return view('posts.index',compact('posts'));

        }
    }

