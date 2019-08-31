<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Astra
 * @since 1.0.0
 */

get_header(); ?>

<?php if ( astra_page_layout() == 'left-sidebar' ) : ?>

	<?php // get_sidebar(); ?>

<?php endif ?>

	<div id="primary" <?php astra_primary_class(); ?>>

		<?php 

				$lp_hero = get_field('hero_image');

				if (!$lp_hero):

					$lp_hero = site_url() . '/wp-content/uploads/2019/07/CSP-Bohemia-03.jpg';

				endif;

		 ?>

		<section class="lp-bleed-section" style="background-image: url(<?php the_post_thumbnail_url( 'full' ); ?>)"></section>

		<section class="lp-section ast-container">
			<p class="h4"><?php the_field('subtitle'); ?></p>

			<div class="ast-row">
				<div class="ast-col-lg-9 ast-col-md-8 ast-col-sm-12 ast-col-xs-12">

					<img src="<?php // the_post_thumbnail_url( 'full' ); ?>" alt="">

					 
			
					<?php // astra_primary_content_top(); ?>

					<?php  // astra_content_page_loop(); ?>



					<h1><?php the_title(); ?></h1>

					<p>Category: <?php the_category(', ') ?></p>

					<p>By <?php the_author(); ?></p>
					<p><?php the_date(); ?></p>

					<hr>

					<?php  the_content(); ?>



				<?php if( have_rows('partner_logos') ): ?>

					<section class="lp-blog-partners">
						<h2 class="h4 sans-heading">Partners</h2>
							<h3 class="h1 sans-heading"><?php the_field('partners_section_heading'); ?></h3>
							<p><?php the_field('partners_section_copy'); ?></p>

							<div class="lp-partners-wrapper">

								<?php 

									    while ( have_rows('partner_logos') ) : the_row();
					    	?>

									<img src="<?php the_sub_field('logo'); ?>" alt="">

				        <?php

									    endwhile;

						    ?>
						  </div>

					</section>

					<?php

								else :


								endif;


							 ?>

						


				</div>
				<div class="ast-col-lg-3 ast-col-md-4 ast-col-sm-12 ast-col-xs-12">
					<?php 

					$lp_quote = get_field('quote_text');

					if($lp_quote) {  ?>

						<p class="h4"><?php the_field('quote_author'); ?></p>
						<p>" <?php the_field('quote_text'); ?> "</p>

					<?php } else { ?>

					<img src="<?php echo site_url(); ?>/wp-content/uploads/2019/08/LP_illo_heron.jpg" class="illo-quote lp-phone-hide" alt="">

						<?php
					}
					 ?>
				</div>
			</div> <!-- ast-row -->

					<?php the_post_navigation(); ?>

					<?php  // astra_primary_content_bottom(); ?>
		</section>




		<?php get_template_part( 'template-parts/donate' ); ?>  


	</div><!-- #primary -->

<?php if ( astra_page_layout() == 'right-sidebar' ) : ?>

	<?php // get_sidebar(); ?>

<?php endif ?>

<?php get_footer(); ?>
