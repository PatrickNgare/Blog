<?php

namespace App\Http\Controllers\categories;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\post\PostModel;
use Illuminate\Support\Facades\DB;


class CategoriesController extends Controller
{


   public function category($name){

  $posts=PostModel::where('category',$name)->take(5)->orderBy('created_at', 'desc')->get();
  $pupPosts=PostModel::take(3)->orderBy('id','desc')->get();
  $categories = DB::table('categories')
               ->join('posts', 'posts.user_id', '=', 'categories.id')
               ->select('categories.name AS name', 'categories.id AS id', 'posts.user_id AS user_id', DB::raw('COUNT(posts.user_id) AS total'))
               ->groupBy('categories.name', 'categories.id', 'posts.user_id')
               ->get();

  return view('categories.category',compact('posts','pupPosts','categories','name'));
   }

}
