<header class="header">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="header_content d-flex flex-row align-items-center justify-content-start">
					<div class="logo"><a href="{{ route('homepage') }}">{{ $settings->site_title }}</a></div>
					<nav class="main_nav">
						<ul>
							@foreach($menu as $menus)
							<li><a href="{{ route('category', ['category' => $menus->slug]) }}">{{ $menus->name }}</a></li>
							@endforeach
						</ul>
					</nav>
					<div class="search_container ml-auto">
						<div class="weather">
							<div class="temperature">+10°</div>
							<img class="weather_icon" src="{{ asset('avision/images/cloud.png') }}" alt="">
						</div>
						<form action="#">
							<input type="search" class="header_search_input" required="required" placeholder="Type to Search...">
							<img class="header_search_icon" src="{{ asset('avision/images/search.png') }}" alt="">
						</form>
						
					</div>
					<div class="hamburger ml-auto menu_mm">
						<i class="fa fa-bars trans_200 menu_mm" aria-hidden="true"></i>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>	