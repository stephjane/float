<?php
// WordPress Titles
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
function change_post_label() {
  global $menu;
  global $submenu;
  $menu[5][0] = 'Projects';
  $submenu['edit.php'][5][0] = 'Projects';
  $submenu['edit.php'][10][0] = 'Add Projects';
  $submenu['edit.php'][16][0] = 'Projects Tags';
}
function change_post_object() {
  global $wp_post_types;
  $labels = &$wp_post_types['post']->labels;
  $labels->name = 'Projects';
  $labels->singular_name = 'Project';
  $labels->add_new = 'Add Project';
  $labels->add_new_item = 'Add Project';
  $labels->edit_item = 'Edit Project';
  $labels->new_item = 'Project';
  $labels->view_item = 'View Project';
  $labels->search_items = 'Search Projects';
  $labels->not_found = 'No Project found';
  $labels->not_found_in_trash = 'No Projects found in Trash';
  $labels->all_items = 'All Projects';
  $labels->menu_name = 'Projects';
  $labels->name_admin_bar = 'Projects';
}
add_action( 'admin_menu', 'change_post_label' );
add_action( 'init', 'change_post_object' );

//portfolios
function custom_post_type() {
 
  // Set UI labels for Custom Post Type
      $labels = array(
          'name'                => _x( 'Portfolios', 'Post Type General Name', 'twentythirteen' ),
          'singular_name'       => _x( 'Portfolio', 'Post Type Singular Name', 'twentythirteen' ),
          'menu_name'           => __( 'Portfolios', 'twentythirteen' ),
          'parent_item_colon'   => __( 'Parent Portfolio', 'twentythirteen' ),
          'all_items'           => __( 'All Portfolios', 'twentythirteen' ),
          'view_item'           => __( 'View Portfolio', 'twentythirteen' ),
          'add_new_item'        => __( 'Add New Portfolio', 'twentythirteen' ),
          'add_new'             => __( 'Add New', 'twentythirteen' ),
          'edit_item'           => __( 'Edit Portfolio', 'twentythirteen' ),
          'update_item'         => __( 'Update Portfolio', 'twentythirteen' ),
          'search_items'        => __( 'Search Portfolio', 'twentythirteen' ),
          'not_found'           => __( 'Not Found', 'twentythirteen' ),
          'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen' ),
      );
       
  // Set other options for Custom Post Type
       
      $args = array(
          'label'               => __( 'portfolios', 'twentythirteen' ),
          'description'         => __( 'Portfolio news and reviews', 'twentythirteen' ),
          'labels'              => $labels,
          // Features this CPT supports in Post Editor
          'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
          // You can associate this CPT with a taxonomy or custom taxonomy. 
          'taxonomies'          => array('category'),
          /* A hierarchical CPT is like Pages and can have
          * Parent and child items. A non-hierarchical CPT
          * is like Posts.
          */ 
          'hierarchical'        => true,
          'public'              => true,
          'show_ui'             => true,
          'show_in_menu'        => true,
          'show_in_nav_menus'   => true,
          'show_in_admin_bar'   => true,
          'menu_position'       => 5,
          'can_export'          => true,
          'has_archive'         => true,
          'exclude_from_search' => false,
          'publicly_queryable'  => true,
          'capability_type'     => 'page',
      );
       
      // Registering your Custom Post Type
      register_post_type( 'portfolio', $args );
   
  }
   
  /* Hook into the 'init' action so that the function
  * Containing our post type registration is not 
  * unnecessarily executed. 
  */
   
  add_action( 'init', 'custom_post_type', 0 );
wp_dequeue_style('edd-styles');
$cats = get_categories();
add_action('wp_ajax_filter', 'filter_function');
add_action('wp_ajax_nopriv_filter', 'filter_function');

function filter_function(){
  $catArray = $_POST['categoryIDs'];

	$args = array(
		'orderby' => 'date',
    'order'	=> 'DESC', // ASC or DESC
    'post_type' => 'portfolio',
    'posts_per_page' => -1,
    'category__and' => $catArray,
	);
 
  $queryStaff = new WP_Query( $args );

  if ( $queryStaff->have_posts() ) : while ( $queryStaff->have_posts() ) : $queryStaff->the_post();?>
    <div class="person" data-name='<?php the_title();?>' data-bio='<?php the_content();?>' data-cat='<?php wp_get_post_categories($post->ID); ?>' data-img="<?php the_post_thumbnail_url() ;?>">
      <div class="person__image">
        <div class="abs-fill bg-img" style="background-image:url('<?php the_post_thumbnail_url() ;?>')"></div>
      </div>
      <div class="person__name">
        <h6><?php the_title() ;?></h6>
      </div>
    </div>
  <?php endwhile; endif; ?>
  <?php wp_reset_query();
	die();
}

