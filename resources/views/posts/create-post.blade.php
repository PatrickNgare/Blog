
@extends('layouts.app')

@section('content')

<div class="container">

    <div class="pt-5 comment-form-wrap">

        @if(\Session::has("success"))

          <div class="alert alert-sucess">
            <p>  {!! \Session::get('success')!!}   </p>
          </div>
            @endif
        <h3 class="mb-5">Create a New Post</h3>
        <form action="{{ route('posts.store') }}" method ="POST" class="p-5 bg-light" enctype="multipart/form-data">

          @csrf
          <div class="form-group">
            <label for="title">Title</label>
            <input type="text" placeholder="title" name="title" value="" class="form-control" id="name">
          </div>

           <div class="form-group">

            <select name="category" class="form-select" aria-label="Default select example">
                <option selected>Categories</option>
                <option value="Culture">Culture</option>
                <option value="Travel">Travel</option>
                <option value="Politics">Politics</option>
              </select>
           </div>

          <div class="form-group">
            <label for="title">Image</label>
            <input type="file"  name="image" value="" class="form-control" id="name">
          </div>


          <div class="form-group">
            <label for="message">Description</label>
            <textarea placeholder="Description" name="description"  cols="30" rows="10" class="form-control"></textarea>
          </div>
          <div class="form-group">
            <input type="submit" name="submit" value="Post Comment" class="btn btn-primary">
          </div>

        </form>
      </div>
</div>


  @endsection
