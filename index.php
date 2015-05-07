
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, minimumscale=
1.0, maximum-scale=1.0" />
<title><?php bloginfo('description'); ?> | <?php bloginfo('name'); ?> </title>
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

<!--Start wp head-->

<?php wp_head()?>


<!--End wp head-->

</head>



<body <?php body_class();?>>

<div id="wrapper">




<header>
<a href="../wordpress/"><img src="<?php bloginfo('template_directory'); ?>/images/evergreen-header.png" alt="header" class="header"/></a>
</header>


<nav class="main">
<ul class="main">
<li class="main"><a href="index.php">About</a></li>
<li class="main"><a href="products.php">Products</a></li>
<li class="main" ><a href="services.php">Services</a></li>
<li class="main"><a href="training.php">Training</a></li>
<li class="main" ><a href="blog.php">Blog</a></li>
<li class="main" ><a href="contact.php">Contact</a></li>
</ul>
</nav>


<div id="main-content">

<section>


<?php if (have_posts()) : while(have_posts()) : the_post(); //start loop ?>

<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<?php the_content(); ?>


<?php endwhile; endif;  //end loop?>

</section>

<aside>
<h3 id="news">News</h3>

<ul>
<li><h4><strong>5/17</strong></h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</li>
<li><h4><strong>6/1</strong></h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</li>
<li><h4><strong>6/7</strong></h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</li>
<li><h4><strong>6/12</strong></h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</li>

</ul>

</aside>

<div class="images">
<div id="evergreen"><h4>EG Advantage</h4><a href="evergreen-advantage.php"><img src="<?php bloginfo('template_directory'); ?>/images/evergreen-advantage.png" alt="Evergreen Advantage" class="align-right" /></a></div>
<div id="trails"><h4>Trails</h4><a href="http://mmba.org/trail-guide/"><img src="<?php bloginfo('template_directory'); ?>/images/trails.png" alt="Trails" class="align-right" /></div></a>
<div id="map"><h4>Map</h4><img src="<?php bloginfo('template_directory'); ?>/images/embeded-map.png" alt="Embeded Map" class="align-right" /></div>
</div>








</div><!--end main-content-->

<footer>
<ul>
<li>Copyright 2014 &copy;</li>
<li>All Rights Reserved</li>
<li><a href="index.html">Evergreen Cycles and Repair</a></li>
<li><a href="http://validator.w3.org/check?uri=http%3A%2F%2Fedison.seattlecentral.edu%2F~esmyth01%2Fweb120%2Ffinal%2Findex.html&charset=%28detect+automatically%29&doctype=Inline&group=0">Valid HTML</a></li>
<li><a href="http://jigsaw.w3.org/css-validator/check/referer">Valid CSS</a></li>

</ul>
</footer>

</div><!--end wrapper-->

<?php wp_footer()?>

</body>



</html>
