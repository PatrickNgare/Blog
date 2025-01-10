@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col">
      <div class="card">
        <div class="card-body">
            @if (\Session::has('delete'))
            <div class="alert alert-success">
                {{ \Session::get('delete') }}
            </div>
           @endif
          <h5 class="card-title mb-4 d-inline">Posts</h5>
        
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">title</th>
                <th scope="col">category</th>
                <th scope="col">user</th>
                <th scope="col">delete</th>
              </tr>
            </thead>
            <tbody>

                @foreach ($posts as $post )
                <tr>
                    <th scope="row">{{ $post->id }}</th>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->category }}</td>
                    <td>{{ $post->user_name }}</td>
                    <td>
                        <a 
                            href="{{ route('posts.delete', $post->id) }}" 
                            class="btn btn-danger text-center"
                            onclick="return confirm('Do you really want to delete this post permanently! ?')"
                        >
                            Delete
                        </a>
                    </td>
                    
                  </tr>
                  
                @endforeach
              
            </tbody>
          </table> 
        </div>
      </div>
    </div>
  </div>

@endsection