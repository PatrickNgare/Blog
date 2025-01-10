
@extends('layouts.app')

@section('content')

<div class="section search-result-wrap">
    <div class="container">
        <div class="row">
            
        </div>
        <div class="row posts-entry">
            <div class="col-lg-8">

                @foreach ( $posts as $post )
                <div class="blog-entry d-flex blog-entry-search-item">
                    <a href="{{route('posts.single',$post->id)}}" class="img-link me-8">
                        <img src="{{ asset('assets/images/'.$post->image. '') }}" alt="Image" class="img-fluid">
                    </a>
                    <div>
                        <span class="date">{{ $post->created_at->format('M d, Y')}}&bullet; <a href="#">{{$post->category}}</a></span>
                        <h2><a href="{{route('posts.single',$post->id)}}">{{ $post->title }}</a></h2>
                        <p>{{ substr($post->description,0,300)  }}</p>
                        <p><a href="{{ $post->created_at->format('M d, Y')}}" class="btn btn-sm btn-outline-primary">Read More</a></p>
                    </div>
                </div>
                @endforeach


            </div>

            
        </div>
    </div>
</div>
@endsection
