@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col">
      <div class="card">
        <div class="card-body">
            
          <h5 class="mb-5 card-title d-inline">Create Categories</h5>
      <form method="POST" action="{{ route('categories.store')  }}" enctype="multipart/form-data">
           @csrf
            <!-- Email input -->
            <div class="mt-4 mb-4 form-outline">
              <input type="text" name="name" id="form2Example1" class="form-control" placeholder="name" />

            </div>
            @error('name')
            <span class="text-danger" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror


            <!-- Submit button -->
            <button type="submit" name="submit" class="mb-4 text-center btn btn-primary">create</button>


          </form>

        </div>
      </div>
    </div>
  </div>



@endsection
