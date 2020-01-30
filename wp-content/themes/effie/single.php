<?php get_header(); ?>
<?php 
  if(get_the_post_thumbnail_url()) {
    $feature_img = get_the_post_thumbnail_url();
  } else {
    $feature_img = get_bloginfo('template_directory') . '/img/tile.jpg';
  }
 ?>
<div class="hero hero__internal text-center">
  <div class="abs-fill bg-img" style="background-image: url(<?php echo $feature_img ?>)"></div>
  <div class="abs-fill bg-overlay"></div>
  <h1><?php echo the_title() ?></h1>
</div>
<div class="container">
  <div class="row blog-post">
      <?php 
				if ( have_posts() ) : while ( have_posts() ) : the_post();
          get_template_part( 'content-single', get_post_format() );

				endwhile; endif; 
			?>
	</div>
</div>
<div class="focused-image">
  <div class="close-image">CLOSE</div>
  <img src="<?php echo get_bloginfo('template_directory') . '/img/tile.jpg' ?>" alt="">
</div>
	

<?php get_footer(); ?>