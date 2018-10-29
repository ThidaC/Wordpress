<?php $__env->startSection('content'); ?>
  <!--<?php echo $__env->make('partials.page-header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>-->

  <?php if(!have_posts()): ?>
    <div class="alert alert-warning">
      <?php echo e(__('Sorry, no results were found.', 'sage')); ?>

    </div>
    <?php echo get_search_form(false); ?>

  <?php endif; ?>

  <div class="slideshow">
  <div class="slides">

  <?php $i=0; ?>
  <?php while(have_posts()): ?> <?php (the_post()); ?>
    <?php
/*
    function get_image_id($image_url) {
      global $wpdb;
      $attachment = $wpdb->get_col($wpdb->prepare("SELECT ID FROM $wpdb->posts WHERE guid='%s';", $image_url )); 
        return $attachment[0]; 
    }

    //$url='http://thida.stage.local/wp-content/uploads/2018/01/rkcreation-site-cabinet-dentaire-beaubourg.png';
    //echo get_image_id($url);

    function get_images_from_media_library() {
        $args = array(
            'post_type' => 'attachment',
            'post_mime_type' =>'image',
            'post_status' => 'inherit',
            'posts_per_page' => 5,
            'orderby' => 'rand'
        );
        $query_images = new WP_Query( $args );
        $images = array();
        foreach ( $query_images->posts as $image) {
            $images[]= $image->guid;
        }
        return $images;
    }


    function display_images_from_media_library() {
        $imgs = get_images_from_media_library();
        foreach($imgs as $img) {
          $id=get_image_id($img);
          $attachment_title = get_the_title($id);
            //$html .= '<img src="' . $img . '" alt="" />';
            $html .= '<div class="slide" >
            <div class="slide__img" style="background-image: url(' . $img . ')"></div>
            <h2 class="slide__title">' . $attachment_title . '</h2>
            <p class="slide__desc">' . $id . '</p>
            <a class="slide__link" href="#">Discover more</a>
            </div>';
        }
        return $html;
    }

    function nb_images_from_media_library() {
        $imgs = get_images_from_media_library();
        $i=0;
        foreach($imgs as $img) {
          $i++;
        }
        return $i;
    }

    echo display_images_from_media_library();
    
    the_post_thumbnail();
    $img=get_post(get_post_thumbnail_id())-> post_content;
    echo $img;

    $html = $img;
    preg_match( '@src="([^"]+)"@' , $html, $match );
    $src = array_pop($match);
    */

    $id = get_post_thumbnail_id();
    $src = wp_get_attachment_image_src($id, 'full');

    $title=get_the_title();
    //echo $title;

    $titleImg=get_the_title($id);

    $caption=get_the_post_thumbnail_caption();

    $url=get_permalink();

    ?>
    <!--<pre><?php echo e(var_dump($src)); ?></pre>-->
    
    <div class="slide <?php if ($i==0) {print "slide--current";}?>" >
      <div class="slide__img" style="background-image: url(<?php echo $src[0]; ?>)"></div>
      <h2 class="slide__title"><?php echo $titleImg; ?></h2>
      <p class="slide__desc"><?php echo $caption; ?></p>
      <a class="slide__link" href="<?php echo $url; ?>"><?php echo $title; ?></a>
    </div>
    <?php $i++; ?>

    <!--<?php echo $__env->make('partials.content-'.get_post_type(), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>-->

  <?php endwhile; ?>

  </div>
  <nav class="slidenav">
    <button class="slidenav__item slidenav__item--prev">Previous</button>
    <span>/</span>
    <button class="slidenav__item slidenav__item--next">Next</button>
  </nav>
  </div>

  <article>
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo</p>
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo</p>
  </article>

  <?php echo get_the_posts_navigation(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>