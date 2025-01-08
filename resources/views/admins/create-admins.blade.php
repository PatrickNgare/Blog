@extends('layouts.admin')

@section('content')


<div class="row">
    <div class="col">
      <div class="card">
        <div class="card-body">
          <h5 class="mb-5 card-title d-inline">Create Admins</h5>
      <form method="POST" action="{{ route('admins.store') }}" >
            @csrf
            <div class="mt-4 mb-4 form-outline">
              <input type="email" name="email" id="form2Example1" class="form-control" placeholder="email" />
             
            </div>

            <div class="mb-4 form-outline">
              <input type="text" name="username" id="form2Example1" class="form-control" placeholder="username" />
            </div>
            <div class="mb-4 form-outline">
              <input type="password" name="password" id="form2Example1" class="form-control" placeholder="password" />
            </div>

           
        
            
          


            <!-- Submit button -->
            <button type="submit" name="submit" class="mb-4 text-center btn btn-primary">create</button>

      
          </form>

        </div>
      </div>
    </div>
  </div>

@endsection