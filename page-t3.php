<?php
/**
 * Template Name: T3
 *
 * @package Astra
 * @since 1.0.0
 */

get_header(); ?>

	<div id="primary" <?php astra_primary_class(); ?>>



		<section class="lp-section">
			<div class="ast-container">
				<div class="ast-row">
					<div class="ast-col-lg-6 ast-col-md-12 ast-col-sm-12 ast-col-xs-12">

						<p class="h4"><?php the_field('page_subheading'); ?></p>

						<h1><?php the_field('page_heading'); ?></h1>

						<p></p>


						<?php the_content(); ?>



						<?php // astra_primary_content_top(); ?>

						<?php // astra_content_page_loop(); ?>

						<?php // astra_primary_content_bottom(); ?>

					</div>

					<div class="ast-col-lg-6 ast-col-md-12 ast-col-sm-12 ast-col-xs-12">

						<?php echo do_shortcode('[ninja_form id=1]'); ?>

					</div>

				</div>
				
			</div>
		</section>

		


					
		<?php get_template_part( 'template-parts/newsletter-signup' ); ?>  



	</div><!-- #primary -->

<?php get_footer(); ?>