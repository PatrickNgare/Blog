@extends('layouts.admin')
@section('content')

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h5 class="mb-5 card-title d-inline">Update Categories</h5>
                <form method="POST" action="{{ route('categories.update',$category->id) }}" enctype="multipart/form-data">
                    @csrf
                   
                    <div class="form-outline mb-4 mt-4">
                        <input type="text" value="{{ $category->name }}"  name="name" id="form2Example1" class="form-control" placeholder="name" />
                       
                      </div>
                      @error('name')
                      <span class="text-danger" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                    
                    <button type="submit" name="submit" class="mb-4 text-center btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
