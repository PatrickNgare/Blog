
@extends('layouts.app')

@section('content')

<div class="pt-5 comment-form-wrap">
    <h3 class="mb-5">Leave a comment</h3>
    <form action="{{ route('comment.store') }}" method ="POST" class="p-5 bg-light">

      @csrf
      <div class="form-group">

        <input type="hidden" name="post_id" value="{{ $single->id }}" class="form-control" id="name">
      </div>


      <div class="form-group">
        <label for="message">Comment</label>
        <textarea placeholder="comment" name="comment" id="message" cols="30" rows="10" class="form-control"></textarea>
      </div>
      <div class="form-group">
        <input type="submit" name="submit" value="Post Comment" class="btn btn-primary">
      </div>

    </form>
  </div>
  @endsection
