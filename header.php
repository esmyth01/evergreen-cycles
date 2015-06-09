<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, minimumscale=
1.0, maximum-scale=1.0" />
<meta name="description" content="<?php echo get_the_excerpt(); ?>" />
<title><?php echo get_my_title_tag(); ?> </title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" >
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/flexslider.css" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/jquery.flexslider.js"></script>
<!-- Place in the <head>, after the three links -->
<script type="text/javascript" charset="utf-8">
  $(window).load(function() {
    $('.flexslider').flexslider();
  });
</script>

<script>
$(function(){
  $('a').each(function() {
    if ($(this).prop('href') == window.location.href) {
      $(this).addClass('current');
    }
  });
});
</script>

<!--Start wp head-->

<?php wp_head()?>


<!--End wp head-->

</head>



<body <?php body_class();?>>

<div id="wrapper">




<header>
  <div id="logo">
<a href="http://www.evansmyth.com/wordpress/"><img src="<?php bloginfo('template_directory'); ?>/images/evergreen-new-logo(wordpress).png" alt="header" class="header"/></a>
  </div>

</header>


<!--<nav class="main">
<ul class="main">
<li class="main"><a href="index.php">About</a></li>
<li class="main"><a href="products.php">Products</a></li>
<li class="main" ><a href="services.php">Services</a></li>
<li class="main"><a href="training.php">Training</a></li>
<li class="main" ><a href="blog.php">Blog</a></li>
<li class="main" ><a href="contact.php">Contact</a></li>
</ul>
</nav>
-->

<?php wp_nav_menu(); ?>

<div id="main-content">
