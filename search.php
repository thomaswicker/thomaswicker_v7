<?php get_header(); ?>

<?php get_template_part('partials/superheroes/superhero-culinary'); ?>

<?php get_template_part('partials/main-nav/main-nav-culinary'); ?>

<section id='body-search'>
  <div id='body-search-inner'>
		<a href="http://www.thomaswicker.com/culinary" class="btn btn-primary btn-mini back-btn-search hide-for-print">
			<i class="fa fa-arrow-left" aria-hidden="true"></i>
			Back to Recipes
		</a>

		<?php if (have_posts()) : ?>

			<h2><?php _e('Search Results', 'thomaswicker'); ?></h2>

			<?php while (have_posts()) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<section id="search-results" class="search-results">
						<h2><a href="<?php the_permalink(); ?>" target="_self"><?php the_title(); ?></a></h2>

						<div class="recipe-image-container">
							<img itemprop="image" class="recipe-feature-image" src="<?php the_field( 'recipe_feature_image' ); ?>" alt="Recipe Feature Image">
						</div>

						<section class="recipe-notes">
							<section class="note-content"><?php the_field( 'recipe_notes' ); ?></section>

							<section class="recipe-details">
								<div class="recipe-prep-time">
									<h3>Prep Time:</h3>
									<span class="the-value"><?php the_field( 'recipe_prep_time' ); ?></span>
								</div>

								<div class="recipe-cook-time">
									<h3>Cook Time:</h3>
									<span class="the-value"><?php the_field( 'recipe_cook_time' ); ?></span>
								</div>

								<div class="recipe-total-portions">
									<h3>Total Portions:</h3>
									<span class="the-value"><?php the_field( 'total_portions' ); ?></span>
								</div>
							</section>

							<section class="recipe-btn-container">
								<a href="<?php echo get_permalink(); ?>" class="btn btn-read-more btn-mini">
									VIEW THIS RECIPE
								</a>
							</section>
						</section>
					</section>
				</div>

			<?php endwhile; ?>

		<?php else : ?>

		<?php endif; ?>

	</div>
</section>

<?php get_footer(); ?>
