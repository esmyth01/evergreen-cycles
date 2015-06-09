  <?php
  /*
  Theme Name: evergreen-cycles
  Theme URI: http://evansmyth.com/wordpress/themes/evergreen-cycles
  Author: Evan Smyth
  Author URI: http://evansmyth.com
  Description: This is the theme for my web170 wordpress course at Seattle Central College
  Version: 1.0
  */
  
  //Register my menus
  
  register_nav_menus(array('main-menu' => __('Main'),
  ));
  
  
  //Enable excerpt on pages
  add_post_type_support('page', 'excerpt');
  
  //End menu function
  
  // get title tag
  function get_my_title_tag() {
	  
	  global $post;
	  
	  if (is_front_page()) {
		  bloginfo('description');
	  }
	  
	  elseif (is_page() || is_single()) {
		  
		  the_title(); //title of page or posting
		  
	  }
	  
	  else{
		  
		   bloginfo('description');
	  
	  }
	  
	  if($post->post_parent) {
		  
		  echo ' | ';
		  echo get_the_title($post->post_parent);
		  
		  
		  
	  }
	  
	  echo ' | ';
	  bloginfo('name');
	  echo ' | ';
  	  echo 'Seattle, WA';	
  }
  
  //
  
  //Start sidebar
  
  register_sidebar(array(
  'before_widget' => '<div>',
  'after_widget' => '/div>',
  'before_title' => '<h2>', 
  'after_title' => '</h2>'));
  
  
  //End sidebar
  ?>
