<div class="blog_section">
	<div class="section_panel d-flex flex-row align-items-center justify-content-start">
		<div class="section_title">Latest Articles</div>
	</div>
	<div class="section_content">
		<div class="grid clearfix">
			
			@for($i = 0; $i <= count($latest_posts); $i++)
			@foreach($latest_posts as $lpost)
			<?php $posts[] = $lpost ?>
			@endforeach
			@if($i == 0)
			<!-- Small Card With Image -->
			<div class="card card_small_with_image grid-item">
				<img class="card-img-top" src="{{ asset($posts[$i]->featured) }}" alt="{{ $posts[$i]->featured }}">
				<div class="card-body">
					<div class="card-title card-title-small"><a href="{{ route('single', ['category' => $posts[$i]->categories()->first()->slug, 'slug' => $posts[$i]->slug]) }}">
						{{ $posts[$i]->title }}
					</a></div>
					<small class="post_meta"><a href="#">{{ $posts[$i]->user->firstname }}</a><span>{{ $posts[$i]->created_at->toFormattedDateString() }}</span></small>
				</div>
			</div>
			@endif

			@if($i == 1)
			<!-- Small Card Without Image -->
			<div class="card card_default card_small_no_image grid-item">
				<div class="card-body">
					<div class="card-title card-title-small"><a href="{{ route('single', ['category' => $posts[$i]->categories()->first()->slug, 'slug' => $posts[$i]->slug]) }}">
						{{ str_limit($posts[$i]->title, 25) }}
					</a></div>
					<small class="post_meta"><a href="#">
						{{ $posts[$i]->user->firstname }}
					</a><span>{{ $posts[$i]->created_at->toFormattedDateString() }}</span></small>
				</div>
			</div>
			@endif

			@if($i == 2)
			<!-- Small Card With Image -->
			<div class="card card_small_with_image grid-item">
				<img class="card-img-top" src="{{ asset($posts[$i]->featured) }}" alt="">
				<div class="card-body">
					<div class="card-title card-title-small"><a href="{{ route('single', ['category' => $posts[$i]->categories()->first()->slug, 'slug' => $posts[$i]->slug]) }}">
						{{ str_limit($posts[$i]->title, 25) }}
					</a></div>
					<small class="post_meta"><a href="#">
						{{ $posts[$i]->user->firstname }}
					</a><span>{{ $posts[$i]->created_at->toFormattedDateString() }}</span></small>
				</div>
			</div>
			@endif

			@if($i == 3)
			<!-- Small Card With Image -->
			<div class="card card_small_with_image grid-item">
				<img class="card-img-top" src="{{ asset($posts[$i]->featured) }}" alt="{{$posts[$i]->featured}}">
				<div class="card-body">
					<div class="card-title card-title-small"><a href="{{ route('single', ['category' => $posts[$i]->categories()->first()->slug, 'slug' => $posts[$i]->slug]) }}">
						{{ str_limit($posts[$i]->title, 25) }}
					</a></div>
					<small class="post_meta"><a href="#">
						{{ $posts[$i]->user->firstname }}
					</a><span>{{ $posts[$i]->created_at->toFormattedDateString() }}</span></small>
				</div>
			</div>
			@endif

			@if($i == 4)
			<!-- Small Card With Background -->
			<div class="card card_default card_small_with_background grid-item">
				<div class="card_background" style="background-image:url(@if(isset($posts[$i]->featured)) {{ asset($posts[$i]->featured) }} @endif)"></div>
				<div class="card-body">
					<div class="card-title card-title-small"><a href="{{ route('single', ['category' => $posts[$i]->categories()->first()->slug, 'slug' => $posts[$i]->slug]) }}">
					{{ str_limit($posts[$i]->title, 25) }}
					</a></div>
					<small class="post_meta"><a href="#">{{ $posts[$i]->user->firstname }}</a><span>{{ $posts[$i]->created_at->toFormattedDateString() }}</span></small>
				</div>
			</div>
			@endif

			@if($i == 5)
			<!-- Small Card With Background -->
			<div class="card card_default card_small_with_background grid-item">
				<div class="card_background" style="background-image:url(@if(isset($posts[$i]->featured)) {{ asset($posts[$i]->featured) }} @endif)"></div>
				<div class="card-body">
					<div class="card-title card-title-small">
						<a href="{{ route('single', ['category' => $posts[$i]->categories()->first()->slug, 'slug' => $posts[$i]->slug]) }}">
							{{ str_limit($posts[$i]->title, 25) }}
						</a></div>
					<small class="post_meta"><a href="#">{{ $posts[$i]->user->firstname }}</a><span>{{ $posts[$i]->created_at->toFormattedDateString() }}</span></small>
				</div>
			</div>
			@endif

			@if($i == 6)
			<!-- Small Card With Image -->
			<div class="card card_small_with_image grid-item">
				<img class="card-img-top" src="{{ asset($posts[$i]->featured) }}" alt="{{ $posts[$i]->featured }}">
				<div class="card-body">
					<div class="card-title card-title-small">
						<a href="{{ route('single', ['category' => $posts[$i]->categories()->first()->slug, 'slug' => $posts[$i]->slug]) }}">
							{{ str_limit($posts[$i]->title, 25) }}
						</a></div>
					<small class="post_meta"><a href="#">{{ $posts[$i]->user->firstname }}</a><span>{{ $posts[$i]->created_at->toFormattedDateString() }}</span></small>
				</div>
			</div>
			@endif

			@if($i == 7)
			<!-- Small Card Without Image -->
			<div class="card card_default card_small_no_image grid-item">
				<div class="card-body">
					<div class="card-title card-title-small"><a href="{{ route('single', ['category' => $posts[$i]->categories()->first()->slug, 'slug' => $posts[$i]->slug]) }}">
						{{ str_limit($posts[$i]->title, 25) }}
					</a></div>
					<small class="post_meta"><a href="#">{{ $posts[$i]->user->firstname }}</a><span>{{ $posts[$i]->created_at->toFormattedDateString() }}</span></small>
				</div>
			</div>
			@endif

			@if($i == 8)
			<!-- Small Card Without Image -->
			<div class="card card_default card_small_no_image grid-item">
				<div class="card-body">
					<div class="card-title card-title-small"><a href="{{ route('single', ['category' => $posts[$i]->categories()->first()->slug, 'slug' => $posts[$i]->slug]) }}">
						{{ str_limit($posts[$i]->title, 25) }}
					</a></div>
					<small class="post_meta"><a href="#">{{ $posts[$i]->user->firstname }}</a><span>{{ $posts[$i]->created_at->toFormattedDateString() }}</span></small>
				</div>
			</div>
			@endif

			@if($i == 9)
			<!-- Default Card With Background -->
			<div class="card card_default card_default_with_background grid-item">
				<div class="card_background" style="background-image:url(@if(isset($posts[$i]->featured)) {{ asset($posts[$i]->featured) }} @endif)">
					
				</div>
				<div class="card-body">
					<div class="card-title card-title-small"><a href="{{ route('single', ['category' => $posts[$i]->categories()->first()->slug, 'slug' => $posts[$i]->slug]) }}">
						{{ str_limit($posts[$i]->title, 25) }}
					</a></div>
				</div>
			</div>
			@endif

			@if($i == 10)
			<!-- Default Card With Background -->
			<div class="card card_default card_default_with_background grid-item">
				<div class="card_background" style="background-image:url(@if(isset($posts[$i]->featured)) {{ asset($posts[$i]->featured) }} @endif)"></div>
				<div class="card-body">
					<div class="card-title card-title-small"><a href="">
						{{ str_limit($posts[$i]->title, 25) }}
					</a></div>
				</div>
			</div>
			@endif
			@endfor			
		</div>
	</div>
</div>