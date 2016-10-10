	<?php get_header(); ?>

	<?php
		$context = array();
		$context['welcome'] = Timber::get_post(2);
	 	Timber::render('views/3-up.twig', $context); ?>

	<?php Timber::render('views/slide.twig'); ?>

	<div class="wrapper">

	<main role="main">
		<!-- section -->
		<section>

		<!-- <h1><?php the_title(); ?></h1> -->

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<?php the_content(); ?>

			<?php comments_template( '', true ); // Remove if you don't want comments ?>

			<br class="clear">

			<?php edit_post_link(); ?>

		</article>
		<!-- /article -->

		<!-- Featured Showcase -->

		<?php Timber::render('search.twig'); ?> <!-- the name of this partial needs changed -->

		<!--/Featured Showcase -->

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




	<div class="right_content"><?php get_sidebar(); ?></div>

<?php get_footer(); ?>
