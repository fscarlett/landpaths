<?php
/**
 * Template Name: T8
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

						<p class="h4">Community Works</p>

						<h1>Partners inthe Big Outside</h1>

						<p>We believe strongly in the “ecosystem” model of successful community work and engagement. Support from our partners and corporate donors helps LandPaths creative opportunities for transformative relationships with nature.</p>



						<?php // astra_primary_content_top(); ?>

						<?php // astra_content_page_loop(); ?>

						<?php // astra_primary_content_bottom(); ?>

					</div>

				</div>
				
			</div>
		</section>

		<section class="lp-section ast-container">
			<h2>Corporate Sponsors</h2>

			<h3>Sponsors loop goes here</h3>

			
		</section>

		<section class="lp-section ast-container">
			<h2>Partner Agencies and Organizations</h2>

			<h3>Partners loop goes here</h3>


		</section>


					
		<?php get_template_part( 'template-parts/donate' ); ?>  



	</div><!-- #primary -->

<?php get_footer(); ?>