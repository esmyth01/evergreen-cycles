<div id="sub-navigation" class="widget">
<h3 class="sub-navigation-title"><?php echo get_the_title($post->post_parent); ?></h3>

<ul class="sub-navigation-items"><?php

if ($post->post_parent) {
  wp_list_pages(array('child_of' => $post->post_parent, 'title_li' => __('')));

} else {

  wp_list_pages(array('child_of' => $post->ID, 'title_li' => __('')));

}
?></ul>
</div>

<!--<ul>
<li><h4><strong><a href="">5/17</a></strong></h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</li>
<li><h4><strong><a href="">6/1</a></strong></h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</li>
<li><h4><strong><a href="">5/7</a></strong></h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</li>

</ul>
-->
