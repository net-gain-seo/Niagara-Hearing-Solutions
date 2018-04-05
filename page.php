<?php get_header(); ?>

<?php
$pageTitle = get_post_meta(get_the_ID(),'show_page_title',true);
$show_page_sidebar = get_post_meta(get_the_ID(),'show_page_sidebar',true);
$sidebar_location = get_post_meta(get_the_ID(),'sidebar_location',true);
$page_sidebar = get_post_meta(get_the_ID(),'page_sidebar',true);

if($pageTitle == 1){
    echo '<div class="post_title"><div><h1>'.get_the_title().'</h1></div></div>';
}

?>

<section id="pageContent" class="innerWrapper clearfix <?php if($show_page_sidebar == 1){ echo 'hasSidebar'; } if($show_page_sidebar == 1){ echo ' sidebarOn'.$sidebar_location; } ?>">
    <?php
        if($show_page_sidebar == 1){
            echo '<aside id="page_sidebar">';
                dynamic_sidebar($page_sidebar);
            echo '</aside>';
        }
    ?>
    <main class="clearfix">
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
    </main>
</section>

<?php get_footer(); ?>
