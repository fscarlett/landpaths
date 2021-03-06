<?php
/**
 * Template Name: T2 
 *
 * @package Astra
 * @since 1.0.0
 */

get_header(); ?>

	<div id="primary" <?php astra_primary_class(); ?>>

		<?php 

				$lp_hero = get_field('hero_image');

				if (!$lp_hero):

					$lp_hero = site_url() . '/wp-content/uploads/2019/07/CSP-Bohemia-03.jpg';

				endif;

					$lp_quote = get_field('single_quote_text');


		 ?>

		<section class="lp-bleed-section" style="background-image: url(<?php echo $lp_hero; ?>)"></section>

		<section class="lp-section ast-container">
			<p class="h4"><?php the_field('subtitle'); ?></p>

			<div class="ast-row">
				<div class="ast-col-lg-9 ast-col-md-8 ast-col-sm-12 ast-col-xs-12 <?php if($lp_quote): ?> lp-border-right <?php endif; ?>">
			
					<?php // astra_primary_content_top(); ?>

					<?php astra_content_page_loop(); ?>

					<?php // astra_primary_content_bottom(); ?>

				</div>
				<div class="ast-col-lg-3 ast-col-md-4 ast-col-sm-12 ast-col-xs-12">
					

					<?php 


					if($lp_quote) {  ?>

						<p class="h4"><?php the_field('single_quote_author'); ?></p>
						<p class="quotetext">" <?php the_field('single_quote_text'); ?> "</p>

					<?php } else { ?>

					<img src="<?php echo site_url(); ?>/wp-content/uploads/2019/08/LP_illo_poppy.jpg" class="illo-quote lp-phone-hide" alt="">

						<?php
					}


					 ?>
				</div>
			</div>
		</section>



		<!-- ======================  QUOTES SECTION ========================= -->
		<?php if (have_rows('quote')) : ?>

			<section class="lp-quote-section lp-section lp-bg-grey">
				<div class="ast-container">
					<p class="h4"><?php the_field('quote_section_subheading'); ?></p>
						
					<h2 class="h1"><?php the_field('quote_section_heading'); ?></h2>

					<h5><?php the_field('quote_section_blurb') ?></h5>

					<div class="quote-wrapper ast-row">

						<?php while( have_rows('quote') ): the_row(); ?>

							<div class="ast-col-lg-4 ast-col-md-6 ast-col-sm-12 ast-col-xs-12 lp-quote-card">


							    <p class="quotetext">" <?php the_sub_field('quote_text'); ?> "</p>

									<p><i class="fa fa-user"></i></p>

							    <p class="quote-author"><?php the_sub_field('quote_author'); ?></p>

							</div>

						<?php endwhile; ?>

					</div>

				</div>

			</section>

		<?php endif; ?>
		<!-- ============= End quotes section ============== -->


		<!-- ============= ACTIVITY section ============== -->

		
			<?php if( have_rows('activity') ): ?>

				<section class="activity-section lp-section ast-container">
					<h2><?php the_field('activity_heading'); ?></h2>

					<div class="thingy"></div>

					<div class="activity-wrapper ast-row" id="activities"> 

						<?php while( have_rows('activity') ): the_row(); 

							$image = get_sub_field('image');
							$title = get_sub_field('title');
							$datetime = get_sub_field('date_time');
							$description = get_sub_field('description');
							$button_text = get_sub_field('button_text');
							$button_link = get_sub_field('button_link');
							$new_tab = get_sub_field('t2_new_tab');

						?>

							<div class="ast-col-lg-6 ast-col-md-6 ast-col-sm-12 ast-col-xs-12 lp-activity-card">

									<div class="lp-activity-img-wrapper" style="background-image: url(<?php echo $image; ?>)"></div>


									<!-- <img src="<?php echo $image; ?>" alt="<?php echo $image['alt'] ?>" /> -->

							    <h3 class="h4"><?php echo $title; ?></h3>

							    <div class="card-datetime"><?php echo $datetime; ?></div>
							    <p><?php echo $description; ?></p>

							    <a href="<?php echo $button_link; ?>" <?php if( $new_tab ): ?> target="_blank"  rel="nofollow"<?php endif; ?>class="ast-custom-button-link"><button class="ast-custom-button lp-button"><?php echo $button_text; ?></button></a>


							</div>

						<?php endwhile; ?>

						</div>
				</section>

			<?php endif; ?>
		
		<!-- ============= End activity section ============== -->


		<!-- ============= DOWNLOADS section ================== -->

				<?php if ( have_rows('downloads') ): ?>

					<section class="lp-downloads-section lp-section ast-container">
						<div class="ast-row">
							<div class="ast-col-lg-8 ast-col-md-8 ast-col-sm-10 ast-col-xs-12">

								<p class="h4"><?php the_field('downloads_subtitle'); ?></p>

								<h2 class="h1"><?php the_field('downloads_heading'); ?></h2>
								<p><?php the_field('downloads_subheading'); ?></p>

								<div class="downloads-wrapper">
									<?php while( have_rows('downloads') ): the_row();

										$file = get_sub_field('file');							
										$label = get_sub_field('label');							
																
									?>
										<p><?php the_sub_field('description'); ?></p>

										<p class="lp-download"><a href="<?php echo $file; ?>" target="_blank" rel="nofollow"><?php echo $label; ?></a></p>
										<p></p>

									<?php endwhile; ?>

								</div>
							</div>
						</div>
						<div class=" lp-phone-hide lp-illustration lp-illo-downloads">
								<img src="<?php echo site_url(); ?>/wp-content/uploads/2019/08/LP_illo_poppy.jpg" alt="">
						</div>
					</section>

				<?php endif; ?>



		<!-- ============= End downloads section ============== -->







		<?php 

				$lp_big2 = get_field('big_image_2');

				if (!$lp_big2):

					$lp_big2 = site_url() . '/wp-content/uploads/2019/07/CSP-Bohemia-03.jpg';

				endif;

		 ?>

		<section class="lp-bleed-section" style="background-image: url(<?php echo $lp_big2; ?>)"></section>




		<?php 

		$partial_choice = get_field('pick_bottom_cta');

		if ( $partial_choice == 'donate') { 

				 get_template_part( 'template-parts/donate' );  

		 } elseif ($partial_choice == 'basic') {

				get_template_part( 'template-parts/donate-basic' );

		 } else { ?>

				<?php get_template_part( 'template-parts/newsletter-signup' ); ?>  

		<?php } ?>

		

	</div><!-- #primary -->

<?php get_footer(); ?>