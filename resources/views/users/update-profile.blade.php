
@extends('layouts.app')

@section('content')

<div class="container">

    <div class="pt-5 comment-form-wrap">
        <h3 class="mb-5">Update Profile Info </h3>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <form action="{{ route('update.user',$user->id)  }}" method ="POST" class="p-5 bg-light" enctype="multipart/form-data">

          @csrf
          @method('PUT')
          <div class="form-group">
            <label for="title">Email</label>
            <input type="text" placeholder="email" name="email" value="{{ $user->email }}" class="form-control" id="email">
          </div>
          <div class="form-group">
            <label for="message">Bio</label>
            <textarea  placeholder="Bio" name="bio"  cols="30" rows="10" class="form-control">{{ $user->bio }}</textarea>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" placeholder="Name" name="name" value="{{ $user->name }}" class="form-control" id="name">
            </div>
          <div class="form-group">
            <input type="submit" name="submit" value="Update Profile" class="btn btn-primary">
          </div>

        </form>
      </div>
</div>


  @endsection
