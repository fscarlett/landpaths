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
					<div class="ast-col-lg-8 ast-col-md-12 ast-col-sm-12 ast-col-xs-12">

						<p class="h4">Any Questions?</p>

						<h1>We are probably outside...</h1>

						<p>Contact us using this form or call / email</p>

						<?php the_content(); ?>



						<?php // astra_primary_content_top(); ?>

						<?php // astra_content_page_loop(); ?>

						<?php // astra_primary_content_bottom(); ?>

					</div>

				</div>
				
			</div>
		</section>

		


					
		<?php get_template_part( 'template-parts/newsletter-signup' ); ?>  



	</div><!-- #primary -->

<?php get_footer(); ?>