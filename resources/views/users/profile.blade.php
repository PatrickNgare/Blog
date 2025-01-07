@extends('layouts.app')

@section('content')

<div class="site-cover site-cover-sm same-height overlay single-page" style="background-image: url('{{ asset('assets/images/hero_3.jpg') }}');">

    <div class="container">

      <div class="row same-height justify-content-center">


        <div class="col-md-6">
          <div class="text-center post-entry">
            <img src="{{asset('assets/user_images/'.$profile->image.'')}}" alt="Image placeholder" class="rounded me-4">
            <h1 class="mb-4">{{ $profile->name}}</h1>
            <div class="text-center post-meta align-items-center">

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="section">
    <div class="container">

      <div class="row blog-entries element-animate">

        <div class="col-md-12 col-lg-8 main-content">

          <div class="post-content-body">
            <p>{{$profile->bio}}</p>

          </div>




        </div>

        <!-- END main-content -->

         <div class="col-md-12 col-lg-4 sidebar">
          <div syle="padding :10px" class="sidebar-box">
            <h3 class="heading">latest Posts By This Author</h3>
            <div class="post-entry-sidebar">
              <ul>
                @foreach ($latestPost as $post )
                <li>


                    <a href="{{route('posts.single',$post->id)}}">
                        <img src="{{asset('assets/images/'.$post->image.'')}}" alt="Image placeholder" class="rounded me-4">
                        <div class="text">
                          <h4>{{$post->title}}</h4>
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

        </div> 
        <!-- END sidebar -->

      </div>
    </div>
  </section>





  @endsection
