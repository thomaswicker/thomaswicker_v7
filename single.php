<?php get_header(); ?>
<?php get_template_part('partials/superheroes/superhero-culinary'); ?>
<?php get_template_part('partials/main-nav/main-nav-inner-page'); ?>

<section id="body-single-recipe" itemscope itemtype="http://schema.org/Recipe" class=" medium-12 body-single-recipe" role="main">
	<section class="bsr--inner">
		<div class="bsr--left large-8 medium-6 small-12 columns">
			<a href="http://www.thomaswicker.com/culinary" class="btn btn-secondary btn-mini back-btn hide-for-print">
				<i class="fa fa-arrow-left" aria-hidden="true"></i>
				Back to Recipes
			</a>
			<?php if (have_posts()) : ?>

				<?php while (have_posts()) : the_post(); ?>

				<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<article class='recipe-item-single'>
	          <section class="recipe-rating-and-title">
	            <h2 itemprop="name">
								<?php the_title(); ?>
	            </h2>

							<section class="recipe-rating <?php the_field( 'recipe_star_rating' ); ?>">
								<span><i class="fa fa-star star-1"></i></span>
								<span><i class="fa fa-star star-2"></i></span>
								<span><i class="fa fa-star star-3"></i></span>
								<span><i class="fa fa-star star-4"></i></span>
								<span><i class="fa fa-star star-5"></i></span>
							</section>

							<div class="aggregate-rating" itemprop="aggregateRating">
								<?php the_field( 'recipe_rating_number' ); ?>
							</div>
	          </section>

						<section class="recipe-categories">
	            <?php the_category(' '); ?>
	          </section>

						<img itemprop="image" class="recipe-feature-image" src="<?php the_field( 'recipe_feature_image' ); ?>" alt="Recipe Feature Image">

	          <section class="recipe-images">
	            <?php the_field( 'recipe_images' ); ?>
	          </section>

						<section class="recipe-comments hide-for-print">
							<h3>Leave a Comment:</h3>
							<?php comment_form(); ?>
						</section>

	        </article>

				</section>

				<?php endwhile; ?>

				<?php get_template_part('inc/nav'); ?>

			<?php else : ?>

			<?php endif; ?>
		</div>

		<div class="bsr--right large-4 medium-6 small-12 columns">
			<article class="recipe-item-single recipe-item-first">

				<section class="recipe-details">
					<div class="recipe-prep-time">
						<h3>Prep:</h3>
						<span class="item-value">
							<?php the_field( 'recipe_prep_time' ); ?>
						</span>
					</div>

					<div class="recipe-cook-time">
						<h3>Cook:</h3>
						<span class="item-value">
							<?php the_field( 'recipe_cook_time' ); ?>
						</span>
					</div>

					<div class="recipe-total-portions">
						<h3>Portions:</h3>
						<span class="item-value" itemprop="recipeYield">
							<?php the_field( 'total_portions' ); ?>
						</span>
					</div>
				</section>
			</article>

			<article class='recipe-item-single'>
				<section class="recipe-ingredients">
					<h3>Recipe Ingredients:</h3>
					<ul>
						<?php the_field( 'recipe_ingredients' ); ?>
					</ul>
				</section>

				<section class="recipe-steps">
					<h3>Recipe Steps:</h3>
					<ol>
						<?php the_field( 'recipe_steps' ); ?>
					</ol>
				</section>

				<section class="recipe-notes">
					<h3>Notes About This Recipe:</h3>
					<span itemprop="description">
						<?php the_field( 'recipe_notes' ); ?>
					</span>
				</section>

			</article>
		</div>
	</section>

</section>

<?php get_footer(); ?>
