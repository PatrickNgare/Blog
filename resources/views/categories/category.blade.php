
@extends('layouts.app')

@section('content')

<div class="section search-result-wrap">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="heading">Category: {{$name}}</div>
            </div>
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

            <div class="col-lg-4 sidebar">


                <!-- END sidebar-box -->
                <div class="sidebar-box"  style="padding: 30px">
                    <h3 class="heading">Popular Posts</h3>
                    <div class="post-entry-sidebar">
                        <ul>
                            @foreach ($pupPosts as $posts )
                          <li>
                                <a href="">
                                    <img src="{{ asset('assets/images/'.$post->image. '') }}" alt="Image placeholder" class="rounded me-4">
                                    <div class="text">
                                        <h4>{{ $post->title }}</h4>
                                        <div class="post-meta">
                                            <span class="mr-2">{{ $post->created_at->format('M d, Y')}} </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            @endforeach

                        </ul>
                    </div>
                </div>
                <!-- END sidebar-box -->

                <div style="padding: 30px" class="sidebar-box">
                    <h3 class="heading">Categories</h3>
                    <ul class="categories">

                        @foreach ( $categories as $category )
                        <li><a href="{{ route('category.single',$category->name)  }}">{{ $category->name  }} <span>({{ $category->total  }})</span></a></li>
                        @endforeach


                    </ul>
                </div>
                <!-- END sidebar-box -->




            </div>
        </div>
    </div>
</div>
@endsection
