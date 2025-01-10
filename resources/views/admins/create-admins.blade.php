@extends('layouts.admin')

@section('content')


<div class="row">
    <div class="col">
      <div class="card">

        <div class="card-body">
                  @auth('admin')

                  <h5 class="mb-5 card-title d-inline">Create Admins</h5>
      <form method="POST" action="{{ route('admins.store') }}" enctype="multipart/form-data" >
            @csrf
            <div class="mt-4 mb-4 form-outline">
              <input type="email" name="email" id="form2Example1" class="form-control" placeholder="email" />

            </div>
            @error('email')
            <span class="text-danger" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

            <div class="mb-4 form-outline">
              <input type="text" name="name" id="form2Example1" class="form-control" placeholder="name" />
            </div>
            @error('name')
            <span class="text-danger" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
            <div class="mb-4 form-outline">
              <input type="password" name="password" id="form2Example1" class="form-control" placeholder="password" />
            </div>
            @error('password')
            <span class="text-danger" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
            <!-- Submit button -->
            <button type="submit" name="submit" class="mb-4 text-center btn btn-primary">create</button>


          </form>


                  @endauth

        </div>
      </div>
    </div>
  </div>

@endsection
