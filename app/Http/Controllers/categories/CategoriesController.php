<?php

namespace App\Http\Controllers\categories;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\post\PostModel;


class CategoriesController extends Controller
{


   public function category($name){

  $post=PostModel::where('category',$name)->take(5)->orderBy('created_at', 'desc')->get();

  return view('categories.category',compact('post'));
   }

}
