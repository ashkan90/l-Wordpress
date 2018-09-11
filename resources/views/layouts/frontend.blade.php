<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	@if($theme->name == 'avision')
		@include('front-end.avision.import.head')
		@stack('links')
	@elseif($theme->name == 'bona')
		@include('front-end.bona.import.head')
		@stack('links')
	@endif
	<meta name="description" content="{{ $app->description }}">
	<meta name="keywords" content="{{ $app->keywords }}">	
</head>
<body>
	@if($theme->name == 'avision')
<div class="super_container">

	<!-- Header -->
	@include('front-end.avision.includes.header')

	<!-- Menu -->
	@include('front-end.avision.includes.menu')
	
	<!-- Home -->
	@include('front-end.avision.includes.owl')
	
	<!-- Page Content -->

	<div class="page_content">
		<div class="container">
			<div class="row row-lg-eq-height">

				<!-- Main Content -->
				@if(strpos(url()->current(), '/') !== false)
					@yield('content')
				
				<!-- Sidebar -->
					@include('front-end.avision.includes.sidebar')
				@endif
			</div>
				
		</div>
	</div>
	<!-- Footer -->
	@include('front-end.avision.includes.footer')
</div>
	<!-- Scripts -->
	@include('front-end.avision.import.scripts')
	@endif

	@if($theme->name == 'bona')
		@include('front-end.bona.import.header')
		@yield('content')
		@include('front-end.bona.import.footer')
		@stack('scripts')
	@endif
</body>
</html>