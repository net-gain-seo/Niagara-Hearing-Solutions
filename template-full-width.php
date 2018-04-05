<?php
/*
  * template name: Full Width
  */
?>
<?php get_header(); ?>

<div id="fullWidth">
<?php
while ( have_posts() ) : the_post();
	if(has_post_thumbnail()) {
		echo '<div id="featured-image"><div class="parallaxsub" style="background-image: url('.get_the_post_thumbnail_url().');"></div></div>';
	}
    the_content();
endwhile;
?>
</div>
<?php get_footer(); ?>
