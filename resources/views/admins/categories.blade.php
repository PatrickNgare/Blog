@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col">
      <div class="card">
        <div class="card-body">
          <h5 class="mb-4 card-title d-inline">Categories</h5>
         <a  href="create-category.html" class="float-right mb-4 text-center btn btn-primary">Create Categories</a>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">update</th>
                <th scope="col">delete</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                <tr>
                    <th scope="row">{{  $category->id }}</th>
                    <td>{{ $category->name  }}</td>
                    <td><a  href="{{ route('categories.create')  }}" class="text-center text-white btn btn-warning ">Update Categories</a></td>
                    <td><a href="delete-category.html" class="text-center btn btn-danger ">Delete Categories</a></td>
                  </tr>


                @endforeach


            </tbody>
          </table>
        </div>
      </div>
    </div>


@endsection

