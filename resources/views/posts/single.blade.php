@extends('layouts.app')

@section('content')

<div class="site-cover site-cover-sm same-height overlay single-page" style= "margin-top: -25px; background-image: url({{asset('assets/images/'.$single->image .'')   }});">
    <div class="container">
      <div class="row same-height justify-content-center">
        <div class="col-md-6">
          <div class="text-center post-entry">
            <h1 class="mb-4">{{ $single->title}}</h1>
            <div class="text-center post-meta align-items-center">
              {{-- <figure class="mb-0 author-figure me-3 d-inline-block"><img src="images/person_1.jpg" alt="Image" class="img-fluid"></figure> --}}
              <span class="mt-1 d-inline-block">By &nbsp;{{ $single->user_name}}</span>
              <span>&nbsp;-&nbsp; {{ $single->created_at}}</span>
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
            <p>{{$single->description}}</p>

          </div>


          <div class="pt-5">
            <p>Categories:  <a href="#">{{$single->category}}</a></a></p>
          </div>



          <div class="pt-5 comment-wrap">
            <h3 class="mb-5 heading">6 Comments</h3>
            <ul class="comment-list">
                     @foreach ($comments as $comment )

                     <li class="comment">
                        {{-- <div class="vcard">
                          <img src="images/person_1.jpg" alt="Image placeholder">
                        </div> --}}
                        <div class="comment-body">
                          <h3>{{$comment->user_name}}</h3>
                          <div class="meta">{{ $comment->created_at }}</div>
                          <p>{{ $comment->comment  }}</p>
                          {{-- <p><a href="#" class="rounded reply">Reply</a></p> --}}
                        </div>
                      </li>

                     @endforeach


            </ul>
            <!-- END comment-list -->

            <div class="pt-5 comment-form-wrap">
              <h3 class="mb-5">Leave a comment</h3>
              <form action="#" class="p-5 bg-light">
                <div class="form-group">
                  <label for="name">Name *</label>
                  <input type="text" class="form-control" id="name">
                </div>
                <div class="form-group">
                  <label for="email">Email *</label>
                  <input type="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                  <label for="website">Website</label>
                  <input type="url" class="form-control" id="website">
                </div>

                <div class="form-group">
                  <label for="message">Message</label>
                  <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-group">
                  <input type="submit" value="Post Comment" class="btn btn-primary">
                </div>

              </form>
            </div>
          </div>

        </div>

        <!-- END main-content -->

        <div class="col-md-12 col-lg-4 sidebar">

          <!-- END sidebar-box -->
          <div  class="sidebar-box">
            <div class="text-center bio">
              <img src="{{asset('assets/user_images/'.$user->image.'') }}" alt="Image Placeholder" class="mb-3 img-fluid">
              <div class="bio-body">
                <h2>{{ $user->name }}</h2>
                <p class="mb-4">{{ $user->bio }}</p>
                <p><a href="#" class="px-2 py-2 rounded btn btn-primary btn-sm">Read my bio</a></p>
                <p class="social">
                  <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
                  <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
                  <a href="#" class="p-2"><span class="fa fa-instagram"></span></a>
                  <a href="#" class="p-2"><span class="fa fa-youtube-play"></span></a>
                </p>
              </div>
            </div>
          </div>
          <!-- END sidebar-box -->
          <div syle="padding :10px" class="sidebar-box">
            <h3 class="heading">Popular Posts</h3>
            <div class="post-entry-sidebar">
              <ul>
                @foreach ($postPopular as $post )
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
          <!-- END sidebar-box -->

          <div syle="padding :20px" class="sidebar-box">
            <h3 class="heading">Categories</h3>
            <ul class="categories">
                @foreach ($categories as $category)
                <li><a href="#">{{  $category->name }} <span>({{ $category->total }})</span></a></li>
                @endforeach

            </ul>
          </div>
          <!-- END sidebar-box -->


        </div>
        <!-- END sidebar -->

      </div>
    </div>
  </section>


  <!-- Start posts-entry -->
  <section class="section posts-entry posts-entry-sm bg-light">
    <div class="container">
      <div class="mb-4 row">
        <div class="text-black col-12 text-uppercase">More Blog Posts</div>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="blog-entry">
            <a href="single.html" class="img-link">
              <img src="images/img_1_horizontal.jpg" alt="Image" class="img-fluid">
            </a>
            <span class="date">Apr. 14th, 2022</span>
            <h2><a href="single.html">Thought you loved Python? Wait until you meet Rust</a></h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <p><a href="#" class="read-more">Continue Reading</a></p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="blog-entry">
            <a href="single.html" class="img-link">
              <img src="images/img_2_horizontal.jpg" alt="Image" class="img-fluid">
            </a>
            <span class="date">Apr. 14th, 2022</span>
            <h2><a href="single.html">Startup vs corporate: What job suits you best?</a></h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <p><a href="#" class="read-more">Continue Reading</a></p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="blog-entry">
            <a href="single.html" class="img-link">
              <img src="images/img_3_horizontal.jpg" alt="Image" class="img-fluid">
            </a>
            <span class="date">Apr. 14th, 2022</span>
            <h2><a href="single.html">UK sees highest inflation in 30 years</a></h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <p><a href="#" class="read-more">Continue Reading</a></p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="blog-entry">
            <a href="single.html" class="img-link">
              <img src="images/img_4_horizontal.jpg" alt="Image" class="img-fluid">
            </a>
            <span class="date">Apr. 14th, 2022</span>
            <h2><a href="single.html">Don’t assume your user data in the cloud is safe</a></h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <p><a href="#" class="read-more">Continue Reading</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>


  @endsection
