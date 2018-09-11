<div class="home">
	
	<!-- Home Slider -->

	<div class="home_slider_container">
		<div class="owl-carousel owl-theme home_slider">
			
			<!-- Slider Item -->
			<div class="owl-item">
				<div class="home_slider_background" style="background-image:url({{ asset($assigned['first']->featured)  }})"></div>
				<div class="home_slider_content_container">
					<div class="container">
						<div class="row">
							<div class="col">
								<div class="home_slider_content">
									<div class="home_slider_item_category trans_200"><a href="{{ route('category', ['category' => $assigned['first']->categories()->first()->slug ]) }}" class="trans_200">{{ $assigned['first']->categories()->first()->name }}</a></div>
									<div class="home_slider_item_title">
										<a href="{{ route('single', ['category' => $assigned['first']->categories()->first()->slug, 'slug' => $assigned['first']->slug ]) }}">{{ $assigned['first']->title }}</a>
									</div>
									<div class="home_slider_item_link">
										<a href="{{ route('single', ['category' => $assigned['first']->categories()->first()->slug, 'slug' => $assigned['first']->slug ]) }}" class="trans_200">Continue Reading
											<svg version="1.1" id="link_arrow_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
												 width="19px" height="13px" viewBox="0 0 19 13" enable-background="new 0 0 19 13" xml:space="preserve">
												<polygon fill="#FFFFFF" points="12.475,0 11.061,0 17.081,6.021 0,6.021 0,7.021 17.038,7.021 11.06,13 12.474,13 18.974,6.5 "/>
											</svg>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Similar Posts -->
				<div class="similar_posts_container">
					<div class="container">
						<div class="row d-flex flex-row align-items-end">

							<!-- Similar Post -->
							<div class="col-lg-3 col-md-6 similar_post_col">
								<div class="similar_post trans_200">
									<a href="{{ route('single', ['category' => $assigned['second']->categories()->first()->slug, 'slug' => $assigned['second']->slug ]) }}">
										@if($assigned['second'])
										{{ $assigned['second']->title }}
										@endif
									</a>
								</div>
							</div>

							<!-- Similar Post -->
							<div class="col-lg-3 col-md-6 similar_post_col">
								<div class="similar_post trans_200">
									<a href="{{ route('single', ['category' => $assigned['third']->categories()->first()->slug, 'slug' => $assigned['third']->slug ]) }}">
										@if($assigned['third'])
										{{ $assigned['third']->title }}
										@endif
									</a>
								</div>
							</div>

							<!-- Similar Post -->
							<div class="col-lg-3 col-md-6 similar_post_col">
								<div class="similar_post trans_200">
									<a href="{{ route('single', ['category' => $assigned['fourth']->categories()->first()->slug, 'slug' => $assigned['fourth']->slug ]) }}">
										@if($assigned['fourth'])
										{{ $assigned['fourth']->title }}
										@endif
									</a>
								</div>
							</div>

						</div>
					</div>
					
					<div class="home_slider_next_container">
						<div class="home_slider_next" style="
						background-image:url( @if( isset($assigned['fifth']->featured )) {{ asset($assigned['fifth']->featured) }}  @endif )">
							<div class="home_slider_next_background trans_400"></div>
							<div class="home_slider_next_content trans_400">
								<div class="home_slider_next_title">read</div>
								<div class="home_slider_next_link">
									<a href="{{ route('single', ['category' => $assigned['fifth']->categories()->first()->slug, 'slug' => $assigned['fifth']->slug ]) }}" style="color: white">
										@if($assigned['fifth'])
										{{ str_limit($assigned['fifth']->title, 55) }}
										@endif
									</a>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>