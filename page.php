<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		
		<section id="hero">
			<div class="hero-wrap"></div>
		</section>
		
		<section>

			<!--<h1><?php the_title(); ?></h1>-->
			
			
		<?php
			$pages = get_pages('include=2,22&sort_column=menu_order');

			foreach ($pages as $page_data) {
				 $content = apply_filters(‘the_content’, $page_data->post_content); 
				 $title = $page_data->post_title; 
				 echo $content; 
			}
		?>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<?php comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php /* get_sidebar(); */ ?>

<?php get_footer(); ?>
