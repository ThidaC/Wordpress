<header class="banner">
  <div class="container">
	    <nav class="nav-primary">
	    <div class="logo">
	  		<p class="brand" href="<?php echo e(home_url('/')); ?>"><?php echo e(get_bloginfo('name', 'display')); ?></p>
	  	</div>
	      <?php if(has_nav_menu('primary_navigation')): ?>
	        <?php echo wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']); ?>

	      <?php endif; ?>
	    </nav>
  </div>
</header>
