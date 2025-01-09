@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col">
      <div class="card">
        <div class="card-body">

            @if (session('delete'))
            <div class="alert alert-success">
                {{ session('delete') }}
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
                @forelse ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>
                        <a href="#" class="btn btn-warning">Update Categories</a>
                    </td>
                    <td>
                        @if (isset($category->id))
                            <a href="{{ route('categories.delete', $category->id) }}" class="btn btn-danger">Delete</a>
                        @else
                            <span class="text-danger">Invalid ID</span>
                        @endif
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">No categories found.</td>
                </tr>
            @endforelse

            </tbody>
          </table>
        </div>
      </div>
    </div>


@endsection

