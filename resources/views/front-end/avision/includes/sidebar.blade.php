<div class="col-lg-3">
	<div class="sidebar">
		<div class="sidebar_background"></div>

		<div class="sidebar_section">
			<div class="sidebar_title_container">
				<div class="sidebar_title">Top Stories</div>
				<div class="sidebar_slider_nav">
					<div class="custom_nav_container sidebar_slider_nav_container">
						<div class="custom_prev custom_prev_top">
							<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
								 width="7px" height="12px" viewBox="0 0 7 12" enable-background="new 0 0 7 12" xml:space="preserve">
								<polyline fill="#bebebe" points="0,5.61 5.609,0 7,0 7,1.438 2.438,6 7,10.563 7,12 5.609,12 -0.002,6.39 "/>
							</svg>
						</div>
				        <ul id="custom_dots" class="custom_dots custom_dots_top">
							<li class="custom_dot custom_dot_top active"><span></span></li>
							<li class="custom_dot custom_dot_top"><span></span></li>
							<li class="custom_dot custom_dot_top"><span></span></li>
						</ul>
						<div class="custom_next custom_next_top">
							<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
								 width="7px" height="12px" viewBox="0 0 7 12" enable-background="new 0 0 7 12" xml:space="preserve">
								<polyline fill="#bebebe" points="6.998,6.39 1.389,12 -0.002,12 -0.002,10.562 4.561,6 -0.002,1.438 -0.002,0 1.389,0 7,5.61 "/>
							</svg>
						</div>
					</div>
				</div>
			</div>
			<div class="sidebar_section_content">

				<!-- Top Stories Slider -->
				<div class="sidebar_slider_container">
					<div class="owl-carousel owl-theme sidebar_slider_top">

						<!-- Top Stories Slider Item -->
						<!--  First 6 post -->
						<div class="owl-item">
							@foreach($top_stories->take(6)->get() as $story)
							<!-- Sidebar Post -->
							<div class="side_post">
								<a href="{{ route('single', ['category' => $story->categories()->first()->slug, 'slug' => $story->slug ]) }}">
									<div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
										<div class="side_post_image"><div><img src="@if(isset($story->featured)){{ asset($story->featured) }} @endif" alt="{{ $story->featured }}"></div></div>
										<div class="side_post_content">
											<div class="side_post_title">
												{{ str_limit($story->title, 55) }}
											</div>
											<small class="post_meta">{{ $story->user->firstname }}  {{ $story->user->surname }}<span>{{ $story->created_at->toFormattedDateString() }}</span></small>
										</div>
									</div>
								</a>
							</div>
							@endforeach
						</div>
						
						<!--  Second 6 post -->

						<div class="owl-item">
							<!-- Sidebar Post -->
							@foreach($top_stories->skip(6)->take(6)->get() as $story)
							<div class="side_post">
								<a href="{{ route('single', ['category' => $story->categories()->first()->slug, 'slug' => $story->slug ]) }}">
									<div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
										<div class="side_post_image"><div><img src="@if(isset($story->featured)){{ asset($story->featured) }} @endif" alt="{{ $story->featured }}"></div></div>
										<div class="side_post_content">
											<div class="side_post_title">
												{{ str_limit($story->title, 55) }}
											</div>
											<small class="post_meta">{{ $story->user->firstname }}  {{ $story->user->surname }}<span>{{ $story->created_at->toFormattedDateString() }}</span></small>
										</div>
									</div>
								</a>
							</div>
							@endforeach
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>