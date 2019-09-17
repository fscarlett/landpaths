<?php
/**
 * Template Name: T7
 *
 * @package Astra
 * @since 1.0.0
 */

get_header(); ?>

	<div id="primary" <?php astra_primary_class(); ?>>



		<section class="lp-section">
			<div class="ast-container">
				<div class="ast-row">
					<div class="ast-col-lg-12 ast-col-md-12 ast-col-sm-12 ast-col-xs-12">

						<h2>Featured person goes here</h2>

					</div>

				</div>
				

				<div class="ast-row">
					<div class="ast-col-lg-12 ast-col-md-12 ast-col-sm-12 ast-col-xs-12">



				
						<?php // astra_primary_content_top(); ?>

						<?php // astra_content_page_loop(); ?>

						<?php // astra_primary_content_bottom(); ?>

					</div>
					
				</div>
			</div>
		</section>

		<section class="staff-section lp-section ast-container">

			<h2><?php the_field('staff_heading'); ?></h2>

			<h2>HEADING</h2>

			<div class="thingy"></div>

			<p>People grid goes here</p>





		</section>





		




					
		<?php get_template_part( 'template-parts/donate' ); ?>  



	</div><!-- #primary -->

<?php get_footer(); ?>