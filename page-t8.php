<?php
/**
 * Template Name: T8 Partners
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

						<p class="h4"><?php the_field('sub_heading'); ?></p>

						<h1><?php the_field('page_heading'); ?></h1>

						<p><?php the_field('page_copy'); ?></p>



						<?php // astra_primary_content_top(); ?>

						<?php // astra_content_page_loop(); ?>

						<?php // astra_primary_content_bottom(); ?>

					</div>

				</div>
				
			</div>
		</section>

		<section class="lp-section ast-container">
			<h2>Corporate Sponsors</h2>

			<?php if( have_rows('corporate_sponsors') ): ?>

					<div class="ast-row partners-wrapper">

						<?php while( have_rows('corporate_sponsors') ): the_row(); 

							$logo = get_sub_field('logo');

							if ($logo):

						?>

							<div class="ast-col-lg-2 ast-col-md-2 ast-col-sm-3 ast-col-xs-4 logo-wrapper">

							    <img src="<?php the_sub_field('logo'); ?>" alt="">

							</div>

						<?php 

						endif;

					endwhile; ?>

					</div>

			<?php endif; ?>

			
		</section>

		<section class="lp-section ast-container">
			<h2>Partner Agencies and Organizations</h2>

			<h3>Need logos to go here.... </h3>

			<?php if( have_rows('partner_orgs') ): ?>

					<div class="ast-row partners-wrapper">

						<?php while( have_rows('partner_orgs') ): the_row(); 

							$logo = get_sub_field('logo');

							if ($logo):

						?>

							<div class="ast-col-lg-2 ast-col-md-2 ast-col-sm-3 ast-col-xs-4 logo-wrapper">

							    <img src="<?php the_sub_field('logo'); ?>" alt="">

							</div>

						<?php 

						endif;

					endwhile; ?>

					</div>

			<?php endif; ?>

		</section>

		<section class="ast-container lp-section">
			<p><?php the_field('partners_bottom_copy'); ?></p>

			<?php echo do_shortcode('[ninja_form id=1]'); ?>
		</section>


					
		<?php get_template_part( 'template-parts/donate' ); ?>  



	</div><!-- #primary -->

<?php get_footer(); ?>