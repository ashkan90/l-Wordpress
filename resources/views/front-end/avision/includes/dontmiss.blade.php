<div class="blog_section">
	<div class="section_panel d-flex flex-row align-items-center justify-content-start">
		<div class="section_title">Don't Miss</div>
		<div class="section_tags ml-auto">
			<ul>
				<li class="active"><a href="">All</a></li>
				@if($catalogs->count() > 0)
				@foreach($catalogs as $catalog)
				<li><a href="">
					@if($catalog)
					{{ $catalog->name }}
					@endif
				</a></li>
				@endforeach
				@endif
			</ul>
		</div>
		<div class="section_panel_more">
			<ul>
				<li>more
					<ul>
						<li class="active"><a href="">All</a></li>
						@if($sub_catalog->count() > 0)
						@foreach($sub_catalog as $scatalog)
						<li><a href="{{ route('category', ['category' => $scatalog->name]) }}">
							@if($scatalog)
							{{ $scatalog->name }}
							@endif
						</a></li>
						@endforeach
						@endif
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<div class="section_content">
		<div class="grid clearfix">

			<!-- Largest Card With Image -->
			<div class="card card_largest_with_image grid-item">
				<img class="card-img-top" src="@if(isset($first_catalog['large']->featured)) {{ asset($first_catalog['large']->featured) }} @endif" alt="{{ str_slug($first_catalog['large']->featured) }}">
				<div class="card-body">
					<div class="card-title">
						<a href="{{ route('single', ['category' => $first_catalog['large']->categories()->first()->slug, 'slug' => $first_catalog['large']->slug]) }}
						">{{ $first_catalog['large']->title }}
						</a>
					</div>
					<p class="card-text">{!! str_limit($first_catalog['large']->content, 160) !!}</p>
					<small class="post_meta"><a href="#">
						{{ $first_catalog['large']->user->firstname }}  
						{{ $first_catalog['large']->user->lastname }}
					</a><span>{{ $first_catalog['large']->created_at->toFormattedDateString() }}</span></small>
				</div>
			</div>

			<!-- Small Card Without Image -->
			@foreach($first_catalog['small'] as $small)
			@foreach($small as $s)
			<div class="card card_default card_small_no_image grid-item">
				<div class="card-body">
					<div class="card-title card-title-small">
						<a href="{{ route('single', ['category' => $s->categories()->first()->slug, 'slug' => $s->slug]) }}">
						{{ $s->title }}
						</a>
					</div>
					<small class="post_meta">
						<a href="#">
							{{ $s->user->firstname }}  
							{{ $s->user->lastname }}

						</a>
						<span>{{ $s->created_at->toFormattedDateString() }}</span>
					</small>
				</div>
			</div>
			@endforeach
			@endforeach

			<!-- Default Card No Image -->
			@foreach($first_catalog['default'] as $default)
			@foreach($default as $d)
			<div class="card card_default card_default_no_image grid-item">
				<div class="card-body">
					<div class="card-title card-title-small">
					<a href="{{ route('single', ['category' => $d->categories()->first()->slug, 'slug' => $d->slug]) }}">
						{{ str_limit($d->title, 55) }}
					</a>
					</div>
				</div>
			</div>
			@endforeach
			@endforeach
		</div>
	</div>
</div>