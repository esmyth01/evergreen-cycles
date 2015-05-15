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


<div id="widgets">
  <div class="widget-item">
    <h3><a href="">Evergreen Advantgage</a></h3>
    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium perspiciatis unde omnis iste natus error perspiciatis unde omnis iste
    </p>
  </div>
  <div class="widget-item">
    <h3>Blog Postings</h3>
    <ul>
      <li><a href="#">one</a></li>
      <li><a href="#">two</a></li>
      <li><a href="#">three</a></li>
      <li><a href="#">four</a></li>
      <li><a href="#">five</a></li>
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
