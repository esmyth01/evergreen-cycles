<?php get_header(); ?>

<section>


<?php if (have_posts()) : while(have_posts()) : the_post(); //start loop ?>

<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<?php the_content(); ?>


<?php endwhile; endif;  //end loop?>

</section>

<aside>
<?php get_sidebar();?>
</aside>


<!--<ul>
<li><h4><strong><a href="">5/17</a></strong></h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</li>
<li><h4><strong><a href="">6/1</a></strong></h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</li>
<li><h4><strong><a href="">5/7</a></strong></h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</li>

</ul>
-->


<div class="images">
<div id="evergreen"><h4>EG Advantage</h4><a href="evergreen-advantage.php"><img src="<?php bloginfo('template_directory'); ?>/images/evergreen-advantage.png" alt="Evergreen Advantage" class="align-right" /></a></div>
<div id="trails"><h4>Trails</h4><a href="http://mmba.org/trail-guide/"><img src="<?php bloginfo('template_directory'); ?>/images/trails.png" alt="Trails" class="align-right" /></div></a>
<div id="map"><h4>Map</h4><img src="<?php bloginfo('template_directory'); ?>/images/embeded-map.png" alt="Embeded Map" class="align-right" /></div>
</div>

<small>single.php</small>








<?php get_footer(); ?>
