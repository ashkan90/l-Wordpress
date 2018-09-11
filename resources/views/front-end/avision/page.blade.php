<!DOCTYPE html>
<html>
<head>
	<title>{{ ucwords($settings->site_title) }} - {{ $post->title }}</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('avision/styles/post_nosidebar.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('avision/styles/post_nosidebar_responsive.css') }}">
</head>
@include('front-end.avision.import.head')
<body>
<div class="super_container">
	<!-- Header -->
	@include('front-end.avision.includes.header')

	<!-- Menu -->
	@include('front-end.avision.includes.menu')

	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="{{ asset($post->featured) }}" data-speed="0.8"></div>
		<div class="home_content">
			<div class="post_title">
				{{ $post->title }}
			</div>
			<div class="post_author d-flex flex-row align-items-center justify-content-center">
				<div class="author_image"><div><img src="{{ asset($post->user->avatar) }}" alt=""></div></div>
				<div class="post_meta"><a href="#">
					{{ ucwords($post->user->firstname) }}
					{{ ucwords($post->user->surname) }}  
				</a></div>
			</div>
		</div>
	</div>

	<!-- Page Content -->

	<div class="page_content">
		<div class="container">
			<div class="row">

				<!-- Post Content -->

				<div class="col-lg-10 offset-lg-1">
					<div class="post_content">

						<!-- Post Body -->

						<div class="post_body">
							<p class="post_p">
								{!! $post->subtitle !!}
							</p>
							<!--figure>
								<img src="{{ asset($post->featured) }}" alt="">
								<figcaption>Lorem Ipsum Dolor Sit Amet</figcaption>
							</figure-->
							<p class="post_p">
								{!! $post->content !!}
							</p>
							<!-- Post Tags and Share-->
							<div class="tags_share d-flex flex-row align-items-center justify-content-start">
								<div class="post_share ml-sm-auto">
									<span>share</span>
									<ul class="post_share_list">
										<li class="post_share_item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li class="post_share_item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										<li class="post_share_item"><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>
								
						</div>
					</div>
				</div>

			</div>

			<div class="row">
				<div class="col">
					<!-- Similar Posts -->
					
					
				</div>
			</div>

			<div class="row">
				<div class="col-lg-6 offset-lg-3">

					<!-- Post Comment -->
					

					<!-- Comments -->
					
					<div class="load_more">
						<div id="load_more" class="load_more_button text-center trans_200">Load More</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@include('front-end.avision.import.scripts')
<script src="{{ asset('avision/js/post_nosidebar.js') }}"></script>
</body>
</html>