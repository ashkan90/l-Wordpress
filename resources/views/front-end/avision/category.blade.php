<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

<title>Category - {{ ucwords($category->name) }}</title>
<link rel="stylesheet" type="text/css" href="{{ asset('avision/styles/category.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('avision/styles/category_responsive.css') }}">
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
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="{{ asset('avision/images/category.jpg') }}" data-speed="0.8"></div>
	</div>
	
	<!-- Page Content -->

	<div class="page_content">
		<div class="container">
			<div class="row row-lg-eq-height">

				<!-- Main Content -->

				<div class="col-lg-9">
					<div class="main_content">

						<!-- Category -->

						<div class="category">
							<div class="section_panel d-flex flex-row align-items-center justify-content-start">
								<div class="section_title">{{ ucwords($category->name) }}</div>
							</div>
							<!-- load more burayı çalıştıracak.  -->
							<div class="section_content">
								<div class="grid clearfix">
									@if($post->count() > 0)
									@foreach($posts as $post)
									@foreach($post->posts()->get() as $p)
										<!-- Small Card With Background -->
										<div class="card card_default card_small_with_background grid-item">
											<div class="card_background" style="background-image:url({{ asset($p->featured)  }})"></div>
											<div class="card-body">
												<div class="card-title card-title-small"><a href="{{ route('single', ['category' => $p->categories()->first()->slug, 'slug' => $p->slug ]) }}">
													{{ str_limit($p->title, 65) }}
												</a></div>
												<small class="post_meta">
													<a href="#">
														{{ ucwords($p->user->firstname) }}  
														{{ ucwords($p->user->surname) }}
													</a>
												<span>{{ $p->created_at->toFormattedDateString() }}</span></small>
											</div>
										</div>
									@endforeach
									@endforeach
									@else
										<h4 class="text-center">There is no published posts for {{ ucwords($category-name) }}</h4>
									@endif
								</div>
							</div>

						</div>

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

</div>

@include('front-end.avision.import.scripts')
<script src="{{ asset('avision/js/category.js') }}"></script>
</body>
</html>