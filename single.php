<?php get_header(); ?>

<?php
$postId = get_option('page_for_posts');
$pageTitle = get_post_meta($postId,'show_page_title',true);
$show_page_sidebar = get_post_meta($postId,'show_page_sidebar',true);
$page_sidebar = get_post_meta($postId,'page_sidebar',true);
$sidebar_location = get_post_meta($postId,'sidebar_location',true);
$page_sidebar = 'default-sidebar';


?>

<section id="pageContent" class="innerWrapper clearfix <?php if($show_page_sidebar == 1){ echo 'hasSidebar'; } if($show_page_sidebar == 1){ echo ' sidebarOn'.$sidebar_location; } ?>">

	<div class="container">
		<div class="row">
			<?php
			while ( have_posts() ) : the_post();

			?>
			<main class="clearfix col col-12 col-md-8">
				<?php
				echo '<article>';
				if ( has_post_thumbnail() ) {
					echo '<div id="postThumbnail">';
					the_post_thumbnail();
					echo '</div>';
				}
				echo '<h2>'.get_the_title().'</h2>';
				the_content();
				echo '</article>';
				?>
			</main>

			<?php
			if($show_page_sidebar == 1){
				echo '<aside id="page_sidebar" class="col col-12 col-md-4">';
				dynamic_sidebar($page_sidebar);
				echo '</aside>';
			}
			?>
		</div>
	</div>

</section>

<?php endwhile; ?>

<?php get_footer(); ?>
