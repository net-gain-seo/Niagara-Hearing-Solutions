<?php
/*
  * template name: Featured Image Banner
  */
get_header(); ?>

<?php
$pageTitle = get_post_meta(get_the_ID(),'show_page_title',true);
$show_page_sidebar = get_post_meta(get_the_ID(),'show_page_sidebar',true);
$sidebar_location = get_post_meta(get_the_ID(),'sidebar_location',true);
$page_sidebar = get_post_meta(get_the_ID(),'page_sidebar',true);

if ( has_post_thumbnail() ) {
    echo '<div id="postThumbnail" class="featuredImageBanner">';
    the_post_thumbnail();
    echo '</div>';
}

?>


<div id="fullWidth">
        <?php
        while ( have_posts() ) : the_post();
            the_content();
        endwhile;
        ?>
</div>

<?php get_footer(); ?>
