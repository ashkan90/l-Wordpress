<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
	<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
	<div class="logo menu_mm"><a href="#">{{ $settings->site_title }}</a></div>
	<div class="search">
		<form action="#">
			<input type="search" class="header_search_input menu_mm" required="required" placeholder="Type to Search...">
			<img class="header_search_icon menu_mm" src="images/search_2.png" alt="">
		</form>
	</div>
	<nav class="menu_nav">
		<ul class="menu_mm">
			@foreach($menu as $menus)
			<li class="menu_mm"><a href="#">{{ $menus->name }}</a></li>
			@endforeach
		</ul>
	</nav>
</div>