@extends('layouts.frontend')

@section('content')
<!-- Main Content -->

<div class="col-lg-9">
	<div class="main_content">

		<!-- Blog Section - Don't Miss -->
		@include('front-end.avision.includes.dontmiss')

		<!-- Blog Section - What's Trending -->

		@include('front-end.avision.includes.trending')
		<!-- Blog Section - Videos -->

		@include('front-end.avision.includes.videos')

		<!-- Blog Section - Latest -->

		@include('front-end.avision.includes.latest')

	</div>
	
	<div class="load_more">
		{{ $posts->links() }}
	</div>
</div>
@endsection