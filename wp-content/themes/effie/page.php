<?php get_header(); ?>
  <div class="hero hero__internal text-center">
    <div class="abs-fill bg-img" style="background-image: url('<?php echo get_bloginfo('template_directory'); ?>/img/tile.jpg')"></div>
    <div class="abs-fill bg-overlay"></div>
    <h1><?php echo the_title(); ?></h1>
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

  <?php if(get_field('call_to_action_header') || get_field('call_to_action_content')): ?>
  <div class="cta cta__consultation">
    <div class="container">
      <div class="row pb-3">
        <div class="col-12">
          <h2><?php the_field('call_to_action_header') ?></h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-7">
          <p><?php the_field('call_to_action_content') ?></p>
        </div>
        <div class="col-md-3 text-md-right mt-3 mt-md-0">
          <a href="<?php the_field('call_to_action_button_url') ?>" class="btn"><?php the_field('call_to_action_button_text') ?></a>
        </div>
      </div>
    </div>
  </div>
  <?php endif; ?>

<?php get_footer(); ?>
</html>