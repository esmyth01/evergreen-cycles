<?php get_header(); ?>

<div class="flexslider">
  <ul class="slides">
    <li>
      <img src="<?php bloginfo('template_directory'); ?>/images/flexslider1.png" alt="flexslider" class="flexslider-pics"/>
    </li>
    <li>
      <img src="<?php bloginfo('template_directory'); ?>/images/flexslider2.png" alt="flexslider" class="flexslider-pics"/>
    </li>
    <li>
      <img src="<?php bloginfo('template_directory'); ?>/images/flexslider3.png" alt="flexslider" class="flexslider-pics"/>
    </li>
  <li>
      <img src="<?php bloginfo('template_directory'); ?>/images/flexslider4.png" alt="flexslider" class="flexslider-pics"/>
    </li>
  </ul>
</div>

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


<div id="widgets">
  <div class="widget-item">
    <?php query_posts('page_id=99'); ?>
    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <?php echo substr(get_the_content(), 0, 150); ?>




	<!-- <php query_post('page_id=14')<php echo substr(get_the_content(), 0, 150); ?>-->

  </div>
  <div class="widget-item">
    <h3>Blog Postings</h3>
    <ul>

    <?php rewind_posts(); ?>
    <?php query_posts('showposts=4'); ?>
    <?php while (have_posts()) : the_post(); ?>
      <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
      <?php endwhile; ?>
    </ul>
  </div>
  <div class="widget-item">
    <h3>Contact Info</h3>
    <ul>
      <li><strong>Phone:</strong> 123.456.789</li>
      <li><strong>Email:</strong> blah@blah.com</li>
      <li>555 Grand River</li>
      <li>East Lansing MI</li>
      <li>48823</li>
    </ul>
  </div>
</div>

<small>front-page.php</small>








<?php get_footer(); ?>
