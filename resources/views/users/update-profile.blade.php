
@extends('layouts.app')

@section('content')

<div class="container">

    <div class="pt-5 comment-form-wrap">
        <h3 class="mb-5">Update Profile Info </h3>
        <form action="{{ route('users.update',$user->id)  }}" method ="POST" class="p-5 bg-light" enctype="multipart/form-data">

          @csrf
          <div class="form-group">
            <label for="title">Email</label>
            <input type="text" placeholder="email" name="email" value="{{ $user->email }}" class="form-control" id="name">
          </div>
          <div class="form-group">
            <label for="message">Bio</label>
            <textarea  placeholder="bio" name="bio"  cols="30" rows="10" class="form-control">{{ $user->bio }}</textarea>
          </div><div class="form-group">
            <label for="message">Name</label>
            <textarea  placeholder="bio" name="name"  cols="30" rows="10" class="form-control">{{ $user->name }}</textarea>
          </div>
          <div class="form-group">
            <input type="submit" name="submit" value="Update Profile" class="btn btn-primary">
          </div>

        </form>
      </div>
</div>


  @endsection
