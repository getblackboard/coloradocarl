<?php get_header(); ?>
<div class="wrapper clear">
	<main role="main">
		<!-- section -->
		<section>

			<h1><?php _e( 'Categories for ', 'html5blank' ); single_cat_title(); ?></h1>

		 	<?php get_template_part('loop'); ?> 

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<div class="right_content"><?php get_sidebar(); ?></div>
</div>
<?php get_footer(); ?>
