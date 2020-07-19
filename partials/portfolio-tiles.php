  <div class='body-portfolio-inner'>
    <div class='masonry-container transitions-enabled infinite-scroll clearfix' id='masonry-container'>

      <?php

          $args = array(
              'post_type' => 'portfolio_item',
              'public' => true,
              '_builtin' => false,
              'posts_per_page' => -1
          );

          $the_query = new WP_Query( $args );

      ?>

      <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

        <article class='portfolio-item'>
          <?php if( get_field('itemcompany') ): ?>
            <h2>
                <span class="name"><?php the_title(); ?></span>
            </h2>
          <?php endif; ?>

          <h5>
            <?php the_field( 'itemcategories' ); ?>
          </h5>

          <img class='image' src='<?php the_field( 'itemimage' ); ?>'>

          <footer class='button-footer'>
            <?php if( get_field('view_details_button') ): ?>
              <a class='btn btn-mini btn-portfolio btn-link--site' href='<?php the_field( 'itemlinkurl' ); ?>' target='blank'>View Details</a>
            <?php endif; ?>
          </footer>
        </article>


        <?php endwhile; else: ?>
          <article class='portfolio-item'>
            <p style="padding: 20px 40px; color: black; font-size: 22px; font-family: Arial, san-serif; font-weight: 600;">There are no portfolio items available to view or something went wrong. Please try again later.</p>
          </article>
        <?php endif; ?>
    </div>
  </div>