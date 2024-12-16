
@extends('layouts.app')

@section('content')

<div class="container">

    <div class="pt-5 comment-form-wrap">
        <h3 class="mb-5">Create a New Post</h3>
        <form action="{{ route('comment.store') }}" method ="POST" class="p-5 bg-light">

          @csrf
          <div class="form-group">
            <label for="title">Title</label>
            <input type="text" placeholder="title" name="title" value="" class="form-control" id="name">
          </div>

           <div class="form-group">

            <select name="category" class="form-select" aria-label="Default select example">
                <option selected>Categories</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
           </div>
           <div class="form-group">
            <input type="text" placeholder="user_id" name="user_id" value="" class="form-control" id="name">
          </div>
          <div class="form-group">
            <input type="text" placeholder="user_name" name="user_name" value="" class="form-control" id="name">
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
