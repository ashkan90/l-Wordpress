<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>{{ ucwords($settings->site_title) }} - {{ $post->title }}</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('avision/styles/post.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('avision/styles/post_responsive.css') }}">




	
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
		<div class="post_category trans_200">
			@foreach($post->categories()->get() as $pcat)
			<a href="" class="trans_200">	
			{{ $pcat->name }}
			</a></div>
			@endforeach
		<div class="post_title">{{ $post->title }}</div>
	</div>
</div>

<!-- Page Content -->

<div class="page_content">
	<div class="container">
		<div class="row row-lg-eq-height">

			<!-- Post Content -->

			<div class="col-lg-9">
				<div class="post_content">

					<!-- Top Panel -->
					<div class="post_panel post_panel_top d-flex flex-row align-items-center justify-content-start">
						<div class="author_image"><div><img src="images/author.jpg" alt=""></div></div>
						<div class="post_meta">
							<a href="#">{{ ucwords($post->user->firstname) }}  {{ ucwords($post->user->surname) }}</a>
							<span>{{ $post->created_at->toFormattedDateString() }}</span></div>
						<div class="post_share ml-sm-auto">
							<span>share</span>
							<ul class="post_share_list">
								<li class="post_share_item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li class="post_share_item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li class="post_share_item"><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>

					<!-- Post Body -->

					<div class="post_body">
						<h5 >
							{!! $post->subtitle !!}
						</h5>
						{!! $post->content !!}

						<!-- Post Tags -->
						<div class="post_tags">
							<ul>
								@foreach($post->tags()->get() as $ptag)
								<li class="post_tag"><a href="#">{{ ucwords($ptag->name) }}</a></li>
								@endforeach
							</ul>
						</div>
					</div>
					
					<!-- Bottom Panel -->
					<div class="post_panel bottom_panel d-flex flex-row align-items-center justify-content-start">
						<div class="author_image"><div><img src="images/author.jpg" alt=""></div></div>
						<div class="post_meta"><a href="#">Katy Liu</a><span>Sep 29, 2017 at 9:48 am</span></div>
						<div class="post_share ml-sm-auto">
							<span>share</span>
							<ul class="post_share_list">
								<li class="post_share_item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li class="post_share_item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li class="post_share_item"><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>

					@include('front-end.avision.includes.comment')

					
				</div>
				<div class="load_more">
					<div id="load_more" class="load_more_button text-center trans_200">Load More</div>
				</div>
			</div>

			<!-- Sidebar -->
			@include('front-end.avision.includes.sidebar')
			

		</div>
	</div>
</div>
@include('front-end.avision.includes.footer')
</div>
@include('front-end.avision.import.scripts')
<script src="{{ asset('avision/js/post.js') }}"></script>


</body>
</html>