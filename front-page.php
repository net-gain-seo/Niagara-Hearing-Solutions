<?php get_header(); ?>
<div id="fullWidth">
<?php
if ( has_post_thumbnail() ) {
    echo '<div id="postThumbnail">';
    the_post_thumbnail();
    echo '</div>';
}

while ( have_posts() ) : the_post();
    the_content();
endwhile;
?>
</div>
<?php get_footer(); ?>