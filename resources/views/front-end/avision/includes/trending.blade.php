<div class="blog_section">
	<div class="section_panel d-flex flex-row align-items-center justify-content-start">
		<div class="section_title">What's Trending</div>
		<div class="section_tags ml-auto">
			<ul>
				<li class="active"><a href="">All</a></li>
				@foreach($catalogs as $catalog)
				<li ><a href="#">{{ $catalog->name }}</a></li>
				@endforeach
			</ul>
		</div>
		<div class="section_panel_more">
			<ul>
				<li>more
					<ul>
						@foreach($sub_catalog as $scatalog)
						<li ><a href="{{ route('category', ['category' => $scatalog->name]) }}">{{ $scatalog->name }}</a></li>
						@endforeach
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<div class="section_content">
		<div class="grid clearfix">
			@for($i = 0; $i <= count($popular_categories); $i++)
			@foreach($popular_categories as $pcat)
				@foreach($pcat->posts()->get() as $k => $val)
					<?php $posts[] = $val ?>
				@endforeach
			@endforeach
			@if($i == 0)
			<!-- Large Card With Background -->
			<div class="card card_large_with_background grid-item">
				<div class="card_background" style="background-image:url(@if(isset($posts[$i]->featured)) {{ asset($posts[$i]->featured)  }} @endif)"></div>
				<div class="card-body">
					<div class="card-title">
						<a href="{{ route('single', ['category' => $posts[$i]->categories()->first()->slug, 'slug' => $posts[$i]->slug]) }}">{{ $posts[$i]->title }}
						</a></div>
					<small class="post_meta"><a href="#">{{ $posts[$i]->user->firstname }}</a><span>{{ $posts[$i]->created_at->toFormattedDateString() }}</span></small>
				</div>
			</div>
			@endif

			@if($i == 1)
			<!-- Large Card With Image -->
			<div class="card grid-item card_large_with_image">
				<img class="card-img-top" src="@if(isset($posts[$i]->featured)) {{ asset($posts[$i]->featured)  }} @endif" alt="">
				<div class="card-body">
					<div class="card-title"><a href="{{ route('single', ['category' => $posts[$i]->categories()->first()->slug, 'slug' => $posts[$i]->slug]) }}">
						{{ str_limit($posts[$i]->title, 25) }}
					</a></div>
					<p class="card-text">{!! str_limit($posts[$i]->content, 100) !!}</p>
					<small class="post_meta"><a href="">{{ $posts[$i]->user->firstname }}</a><span>{{ $posts[$i]->created_at->toFormattedDateString() }}</span></small>
				</div>
			</div>
			@endif

			@if($i == 2)
			<!-- Default Card With Image -->
			<div class="card card_small_with_image grid-item">
				<img class="card-img-top" src="@if(isset($posts[$i]->featured)) {{ asset($posts[$i]->featured)  }} @endif" alt="">
				<div class="card-body">
					<div class="card-title card-title-small"><a href="{{ route('single', ['category' => $posts[$i]->categories()->first()->slug, 'slug' => $posts[$i]->slug]) }}">
						{{ str_limit($posts[$i]->title, 25) }}
					</a></div>
					<small class="post_meta"><a href="">
						{{ $posts[$i]->user->firstname }}
					</a><span>
						{{ $posts[$i]->created_at->toFormattedDateString() }}
					</span></small>
				</div>
			</div>
			@endif

			@if($i == 3)
			<!-- Default Card With Background -->

			<div class="card card_default card_default_with_background grid-item">
				<div class="card_background" style="background-image:url(@if(isset($posts[$i]->featured)) {{ asset($posts[$i]->featured)  }} @endif)"></div>
				<div class="card-body">
					<div class="card-title card-title-small"><a href="{{ route('single', ['category' => $posts[$i]->categories()->first()->slug, 'slug' => $posts[$i]->slug]) }}">
						{{ str_limit($posts[$i]->title, 25) }}
					</a></div>
				</div>
			</div>
			@endif

			@if($i == 4)
			<!-- Default Card No Image -->
			<div class="card card_default card_default_no_image grid-item">
				<div class="card-body">
					<div class="card-title card-title-small"><a href="{{ route('single', ['category' => $posts[$i]->categories()->first()->slug, 'slug' => $posts[$i]->slug]) }}">
						{{ str_limit($posts[$i]->title, 25) }}
					</a></div>
				</div>
			</div>
			@endif

			@if($i == 5)
			<!-- Default Card No Image -->
			<div class="card card_default card_default_no_image grid-item">
				<div class="card-body">
					<div class="card-title card-title-small"><a href="{{ route('single', ['category' => $posts[$i]->categories()->first()->slug, 'slug' => $posts[$i]->slug]) }}">
						{{ str_limit($posts[$i]->title, 25) }}
					</a></div>
				</div>
			</div>
			@endif

			@if($i == 6)
			<!-- Default Card With Background -->

			<div class="card card_default card_default_with_background grid-item">
				<div class="card_background" style="
				background-image:url(@if(isset($posts[$i]->featured)) {{ asset($posts[$i]->featured)  }} @endif)"></div>
				<div class="card-body">
					<div class="card-title card-title-small"><a href="{{ route('single', ['category' => $posts[$i]->categories()->first()->slug, 'slug' => $posts[$i]->slug]) }}">
						{{ str_limit($posts[$i]->title, 25) }}
					</a></div>
				</div>
			</div>
			@endif
			@endfor
			
			
			

			
			
			

			

			

			
		</div>
	</div>
</div>
