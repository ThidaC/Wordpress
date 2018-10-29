<header class="banner">
  <div class="container">
	    <nav class="nav-primary">
	    <div class="logo">
	  		<p class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</p>
	  	</div>
	      @if (has_nav_menu('primary_navigation'))
	        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
	      @endif
	    </nav>
  </div>
</header>
