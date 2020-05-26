<?php get_header(); ?>
<?php get_template_part('partials/superheroes/superhero-culinary'); ?>
<?php get_template_part('partials/main-nav/main-nav-inner-page-2'); ?>

<section id="body-recipe-archives" class="medium-12 body-recipe-archives" role="main">
	<section class="bra--inner">
		<article class="bra--left large-8 medium-12 columns">

			<?php if (have_posts()) : ?>
		 		<?php if (is_category()) { ?>
					<h2><?php _e('Archive for the', 'thomaswicker-theme'); ?> <span>&#8216;<?php single_cat_title(); ?>&#8217;</span> <?php _e('Category', 'thomaswicker-theme'); ?></h2>

						<?php } elseif(is_tag()) { ?>

						<h2><?php _e('Posts Tagged', 'thomaswicker-theme'); ?> &#8216;<?php single_tag_title(); ?>&#8217;</h2>

						<?php } elseif (is_day()) { ?>

						<h2><?php _e('Archive for', 'thomaswicker-theme'); ?> <?php the_time('F jS, Y'); ?></h2>

						<?php } elseif (is_month()) { ?>

						<h2><?php _e('Archive for', 'thomaswicker-theme'); ?> <?php the_time('F, Y'); ?></h2>

						<?php } elseif (is_year()) { ?>

						<h2><?php _e('Archive for', 'thomaswicker-theme'); ?> <?php the_time('Y'); ?></h2>

						<?php } elseif (is_author()) { ?>

						<h2><?php _e('Author Archive for', 'thomaswicker-theme'); ?> <?php the_post(); echo get_the_author(); rewind_posts(); ?></h2>

						<?php } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>

						<?php } ?>


						<?php while (have_posts()) : the_post(); ?>

							<section class="post-item">
								<div id="post-<?php the_ID(); ?>" <?php post_class() ?>>

									<article class="recipe-item recipe-item-archives">
										<section class="recipe-images">
											<img itemprop="image" class="recipe-feature-image" src="<?php the_field( 'recipe_feature_image' ); ?>" alt="Recipe Feature Image">
										</section>

										<section class="recipe-rating-and-title">
											<h3>
												<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
											</h3>

											<section class="recipe-rating <?php the_field( 'recipe_star_rating' ); ?>">
												<span><i class="fa fa-star star-1"></i></span>
												<span><i class="fa fa-star star-2"></i></span>
												<span><i class="fa fa-star star-3"></i></span>
												<span><i class="fa fa-star star-4"></i></span>
												<span><i class="fa fa-star star-5"></i></span>
											</section>

											<section class="recipe-notes">
												<span itemprop="description">
													<?php the_field( 'recipe_notes' ); ?>
												</span>
											</section>

											<a href="<?php echo get_permalink(); ?>" class="btn btn-primary btn-read-more"> View the Recipe</a>

										</section>

									</article>

								</div>
							</section>

						<?php endwhile; ?>

				<?php else : ?>

				<?php get_template_part('inc/gone'); ?>

			<?php endif; ?>
		</article>

		<aside class='bra--right large-4 medium-12 columns'>
			<section class="alt-sidebar">
				<h3>Search All Recipes</h3>

				<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('recipes-sidebar')) : else : ?>
					<div class="pre-widget">
							<h3>Recipes Sidebar</h3>
							<p>Something went wrong... the Recipes Sidebar is not loading right now.</p>
					</div>
				<?php endif; ?>
			</section>
		</aside>
	</section>

</section>
