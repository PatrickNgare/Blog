@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col">
      <div class="card">
        <div class="card-body">
          <h5 class="mt-5 card-title">Login</h5>
          <form method="POST" class="p-auto" action="{{ route('admin.check.login') }}">
            @csrf
              <!-- Email input -->
              <div class="mb-4 form-outline">
                <input type="email" name="email" id="form2Example1" class="form-control" placeholder="Email" />

              </div>


              <!-- Password input -->
              <div class="mb-4 form-outline">
                <input type="password" name="password" id="form2Example2" placeholder="Password" class="form-control" />

              </div>

              <!-- Submit button -->
              <button type="submit" name="submit" class="mb-4 text-center btn btn-primary">Login</button>


            </form>

        </div>
   </div>
 </div>


 @endsection
