<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('partials.page-header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="content2">
		<?php echo do_shortcode("[widgets_on_pages id='Widgets']");  ?>
		<div class="divArticle">
		  <?php while(have_posts()): ?> <?php (the_post()); ?>
		    <?php echo $__env->make('partials.content', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		  <?php endwhile; ?>
		</div>
	</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>