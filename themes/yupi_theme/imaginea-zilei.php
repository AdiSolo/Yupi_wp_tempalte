<div class="imaginea-zilei">
<?php $recent = new WP_Query("cat=26&showposts=1"); ?>

<?php while($recent->have_posts()) : $recent->the_post();?>
<h1 class="title"><a href="<?php the_permalink(); ?>"  rel="bookmark">Imaginea zilei</a> </h1>
<span class="image-gallery"><a href="http://yupi.md/category/image-of-day/">Vezi galeria</a></span>
<?php the_content(); ?>
<div class="imaginea-zilei-info">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ro_RO/all.js#xfbml=1&appId=334238173276462";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ro_RO/all.js#xfbml=1&appId=334238173276462";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-like" data-href="<?php the_permalink(); ?>" data-send="false" data-layout="button_count" data-width="50" data-show-faces="false"></div>
<a href="<?php the_permalink(); ?>" class="meta_comment">Comentează</a>
</div>
<?php endwhile; ?>
</div>