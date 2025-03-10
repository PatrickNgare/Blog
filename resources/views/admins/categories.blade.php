@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col">
      <div class="card">
        <div class="card-body">
            @if (\Session::has('success'))
            <div class="alert alert-success">
                {{ \Session::get('success') }}
            </div>
           @endif

        @if (\Session::has('delete'))
        <div class="alert alert-success">
            {{ \Session::get('delete') }}
        </div>
       @endif

       @if (\Session::has('update'))
            <div class="alert alert-success">
                {{ \Session::get('update') }}
            </div>
           @endif
          <h5 class="mb-4 card-title d-inline">Categories</h5>
         <a  href="{{ route('categories.create') }}" class="float-right mb-4 text-center btn btn-primary">Create Categories</a>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">name</th>
                <th scope="col">update</th>
                <th scope="col">delete</th>
              </tr>
            </thead>
            <tbody>
             @foreach ($categories as $category)
             <tr>
                <th scope="row">{{ $category->id }}</th>
                <td>{{ $category->name }}</td>
                <td><a  href="{{ route('categories.edit',$category->id) }}" class="btn btn-warning text-white text-center ">Edit </a></td>
                <td><a href="{{ route('categories.delete',$category->id) }}" onclick="return confirm('Do you really want to delete this category permanently! ?')"class="btn btn-danger  text-center ">Delete </a></td>
              </tr>
             @endforeach
                
              </tbody>
          </table>
        </div>
      </div>
    </div>


@endsection

