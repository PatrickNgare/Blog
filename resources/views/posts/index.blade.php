
@extends('layouts.app')

@section('content')

    <!-- Start retroy layout blog posts -->
	<section class="section bg-light">
		<div class="container">
			<div class="row align-items-stretch retro-layout">
                @if(\Session::has("delete"))
                <div class="alert alert-success">
                  <p>  {!! \Session::get('delete')!!}   </p>
                </div>
                  @endif

                  @if(\Session::has("update.user"))
                <div class="alert alert-success">
                  <p>  {!! \Session::get('update.user')!!}   </p>
                </div>
                  @endif
				<div class="col-md-4">

                    @foreach ( $posts as $post )
                    <a href="{{route('posts.single',$post->id)}}" class="h-entry mb-30 v-height gradient">

						<div class="featured-img" style="background-image: url('{{asset('assets/images/'.$post->image.'')   }}');"></div>

						<div class="text">
							<span class="date">{{\Carbon\Carbon::parse($post->created_at)->format('M d,Y')  }}</span>
							<h2>{{ $post->title }}</h2>
						</div>
					</a>
                    @endforeach

				</div>
				<div class="col-md-4">
                    @foreach ( $postOne as $post )
                    <a href="{{route('posts.single', $post->id)}}" class="h-entry img-5 h-100 gradient">

						<div class="featured-img" style="background-image: url('{{ asset('assets/images/' . $post->image) }}');"></div>

						<div class="text">
							<span class="date">{{ \Carbon\Carbon::parse($post->created_at)->format('M d,Y')  }}</span>
							<h2>{{ $post->title }}</h2>
						</div>
					</a>
                    @endforeach

				</div>
				<div class="col-md-4">

                    @foreach ( $postTwo as $post)

                    <a href="{{route('posts.single', $post->id)}}" class="h-entry mb-30 v-height gradient">

						<div class="featured-img" style="background-image: url('{{ asset('assets/images/'.$post->image.'') }}');"></div>

						<div class="text">
							<span class="date">{{ \Carbon\Carbon::parse($post->created_at)->format('M d,Y')  }}</span>
							<h2>{{ $post->title }}</h2>
						</div>
					</a>

                    @endforeach


				</div>
			</div>
		</div>
	</section>
	<!-- End retroy layout blog posts -->

	<!-- Start posts-entry -->
	<section class="section posts-entry">
		<div class="container">
			<div class="mb-4 row">
				<div class="col-sm-6">
					<h52 class="posts-entry-title">Business</h52>
				</div>
				<div class="col-sm-6 text-sm-end"><a href="category.html" class="read-more">View All</a></div>
			</div>
			<div class="row g-3">
				<div class="col-md-9">
					<div class="row g-3">


                        @foreach ($postBiz as $post)
                        <div class="col-md-6">
                            <div class="blog-entry">
                                <a href="{{ route('posts.single', $post->id) }}" class="img-link">
                                    <img src="{{ asset('assets/images/' . $post->image) }}" alt="Image" class="img-fluid">
                                </a>
                                <span class="date">{{ \Carbon\Carbon::parse($post->created_at)->format('M d,Y') }}</span>
                                <h2>
                                    <a href="{{ route('posts.single', $post->id) }}">{{ $post->title }}</a>
                                </h2>
                                <p>{{ $post->description }}</p>
                                <p>
                                    <a href="{{ route('posts.single', $post->id) }}" class="btn btn-sm btn-outline-primary">Read More</a>
                                </p>
                            </div>
                        </div>
                        @endforeach


					</div>
				</div>
				<div class="col-md-3">
					<ul class="list-unstyled blog-entry-sm">

                        @foreach ($postBizTwo as $post )

                        <li>
							<span class="date">{{ \Carbon\Carbon::parse($post->created_at)->format('M d,Y') }}</span>
							<h3><a href="{{ route('posts.single', $post->title) }}">Don’t assume your user data in the cloud is safe</a></h3>
							<p><p>{{ $post->description }}</p></p>
							<p><a href="{{ route('posts.single', $post->id) }}" class="read-more">Continue Reading</a></p>
						</li>

                        @endforeach


					</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- End posts-entry -->

	<!-- Start posts-entry -->
	<section class="section posts-entry posts-entry-sm bg-light">
		<div class="container">
			<div class="row">

                @foreach ($randomPosts as $post )
                <div class="col-md-6 col-lg-3">
					<div class="blog-entry">
						<a href="{{ route('posts.single', $post->id) }}" class="img-link">
							<img src="{{ asset('assets/images/'.$post->image.'') }}" alt="Image" class="img-fluid">
						</a>
						<span class="date">{{\Carbon\Carbon::parse($post->created_at)->format('M d,Y')}}</span>
						<h2><a href="single.html">{{ $post->title}}</a></h2>
						<p>{{ substr($post->description,0,100) }}.</p>
						<p><a href="{{ route('posts.single', $post->id) }}" class="read-more">Continue Reading</a></p>
					</div>
				</div>
                @endforeach


			</div>
		</div>
	</section>
	<!-- End posts-entry -->

	<!-- Start posts-entry -->
	<section class="section posts-entry">
		<div class="container">
			<div class="mb-4 row">
				<div class="col-sm-6">
					<h2 class="posts-entry-title">Culture</h2>
				</div>
				<div class="col-sm-6 text-sm-end"><a href="category.html" class="read-more">View All</a></div>
			</div>
			<div class="row g-3">
				<div class="col-md-9 order-md-2">
					<div class="row g-3">

                        @foreach ($postCulture as $post )
                        <div class="col-md-6">
							<div class="blog-entry">
								<a href="{{ route('posts.single', $post->id) }}" class="img-link">
									<img src="{{ asset('assets/images/'.$post->image.' ') }}" alt="Image" class="img-fluid">
								</a>
								<span class="date">{{ \Carbon\Carbon::parse($post->created_at)->format('M d,Y') }}</span>
								<h2><a href="single.html">{{substr($post->title,0 ,100) }}</a></h2>
								<p>{{substr($post->description,0 ,100)}}</p>
								<p><a href="{{ route('posts.single', $post->id) }}" class="btn btn-sm btn-outline-primary">Read More</a></p>
							</div>
						</div>
                        @endforeach

					</div>
				</div>
				<div class="col-md-3">
					<ul class="list-unstyled blog-entry-sm">

                        @foreach ($postCultureTwo as $post )
                        <li>
							<span class="date">{{ \Carbon\Carbon::parse($post->created_at)->format('M d,Y') }}</span>
							<h3><a href="{{ route('posts.single', $post->id) }}git">{{ substr($post->title,0 ,100) }}</a></h3>
							<p>{{substr($post->description,0 ,100)}}</p>
							<p><a href="{{ route('posts.single', $post->id) }}" class="read-more">Continue Reading</a></p>
						</li>
                        @endforeach
					</ul>
				</div>
			</div>
		</div>
	</section>

	<section class="section">
		<div class="container">

			<div class="mb-4 row">
				<div class="col-sm-6">
					<h2 class="posts-entry-title">Politics</h2>
				</div>
				<div class="col-sm-6 text-sm-end"><a href="category.html" class="read-more">View All</a></div>
			</div>

			<div class="row">

                @foreach ($postPolitics as $post )

                <div class="mb-4 col-lg-4">
					<div class="post-entry-alt">
						<a href="{{ route('posts.single', $post->id) }}" class="img-link"><img src="{{asset('assets/images/'.$post->image.'')}}" alt="Image" class="img-fluid"></a>
						<div class="excerpt">


							<h2><a href="{{ route('posts.single', $post->id) }}">{{$post->title}}</a></h2>
							<div class="clearfix text-left post-meta align-items-center">
								<figure class="mb-0 author-figure me-3 float-start"><img src="{{asset('assets/images/'.$post->image.'')}}" alt="Image" class="img-fluid"></figure>
								<span class="mt-1 d-inline-block">By <a href="#">{{ $post->user_name}}</a></span>
								<span>&nbsp;-&nbsp;{{\Carbon\Carbon::parse($post->created_at)->format('M d,Y')}} </span>
							</div>

							<p>{{substr($post->description,0 ,100)}}</p>
							<p><a href="{{ route('posts.single', $post->id) }}" class="read-more">Continue Reading</a></p>
						</div>
					</div>
				</div>

                @endforeach


			</div>

		</div>
	</section>

	<div class="section bg-light">
		<div class="container">

			<div class="mb-4 row">
				<div class="col-sm-6">
					<h2 class="posts-entry-title">Travel</h2>
				</div>
				<div class="col-sm-6 text-sm-end"><a href="category.html" class="read-more">View All</a></div>
			</div>

			<div class="row align-items-stretch retro-layout-alt">
                @foreach ($postTravel as $post )

                <div class="col-md-5 order-md-2">
					<a href="{{ route('posts.single', $post->id) }}" class="hentry img-1 h-100 gradient">
						<div class="featured-img" style="background-image: url('{{asset('assets/images/'.$post->image.'')}}');"></div>
						<div class="text">
							<span>{{ \Carbon\Carbon::parse($post->created_at)->format('M d,Y')}}</span>
							<h2>{{$post->title}}</h2>
						</div>
					</a>
				</div>

                @endforeach



				<div class="col-md-7">

                    @foreach ( $postTravelOne as $post )

                    <a href="single.html" class="hentry img-2 v-height mb30 gradient">
						<div class="featured-img" style="background-image: url('{{asset('assets/images/'.$post->image.'')}}');"></div>
						<div class="text-sm text">
							<span>{{\Carbon\Carbon::parse($post->created_at)->format('M d,Y') }}</span>
							<h2>{{$post->title}}</h2>
						</div>
					</a>

                    @endforeach



					<div class="two-col d-block d-md-flex justify-content-between">

                        @foreach ($postTraveltwo as $post )

                        <a href="single.html" class="hentry v-height img-2 gradient">
							<div class="featured-img" style="background-image: url('{{asset('assets/images/'.$post->image.'')}}');"></div>
							<div class="text-sm text">
								<span>{{\Carbon\Carbon::parse($post->created_at)->format('M d,Y')}}</span>
								<h2>{{$post->title}}</h2>
							</div>
						</a>

                        @endforeach


					</div>

				</div>
			</div>

		</div>
	</div>

@endsection
