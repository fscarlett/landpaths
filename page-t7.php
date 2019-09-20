<?php
/**
 * Template Name: T7 Staff
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



				
						<?php // astra_primary_content_top(); ?>

						<?php // astra_content_page_loop(); ?>

						<?php // astra_primary_content_bottom(); ?>

					</div>
					
				</div>
			</div>
		</section>

		<!-- Executive staff section -->

		<section class="staff-section executive-staff-section lp-section ast-container">


			<!-- <h2>STAFF</h2> -->

			<!-- <div class="thingy"></div>  -->


			<?php if( have_rows('executive_staff') ): ?>


					<div class="ast-row">

						<?php while( have_rows('executive_staff') ): the_row(); 

							$name = get_sub_field('name');
							$title = get_sub_field('title');
							$email = get_sub_field('email');
							$phone = get_sub_field('phone');
							$bio = get_sub_field('bio');
							$photo = get_sub_field('photo');

						?>

								<?php if ($bio): ?>

								<div class="ast-row exec-staff-row">
									<div class="ast-col-lg-6 ast-col-md-6 ast-col-sm-12 ast-col-xs-12">
											<img src="<?php echo $photo; ?>" />

									</div>

									<div class="ast-col-lg-6 ast-col-md-6 ast-col-sm-12 ast-col-xs-12">

											<h3><?php echo $name; ?></h3>

									    <h4><?php echo $title; ?></h4>

											<p><?php echo $bio; ?></p>
									    <p><?php echo $email; ?></p>
									    <p><?php echo $phone; ?></p>

									</div>
								</div>

							<?php endif; ?>

							<?php if (!$bio): ?>
								<div class="ast-col-lg-4 ast-col-md-4 ast-col-sm-12 ast-col-xs-12 lp-staff-card">

									<img src="<?php echo $photo; ?>" />

									<h4><?php echo $name; ?></h4>

							    <p class="staff-title"><?php echo $title; ?></p>

							    <p><?php echo $email; ?></p>
							    <p><?php echo $phone; ?></p>

								</div>
							<?php endif; ?>

						<?php endwhile; ?>

					</div>

			<?php endif; ?>

		</section> <!-- end Executive staff section -->

		<section class="staff-section lp-section ast-container">

			<h2><?php // the_field('staff_heading'); ?></h2>

			<h2>STAFF</h2>

			<div class="thingy"></div> 


			<?php if( have_rows('staff_member') ): ?>


					<div class="staff-member-wrapper ast-row">

						<?php while( have_rows('staff_member') ): the_row(); 

							$name = get_sub_field('name');
							$title = get_sub_field('title');
							$email = get_sub_field('email');
							$phone = get_sub_field('phone');
							// $bio = get_sub_field('bio');
							$photo = get_sub_field('photo');

						?>

							<div class="ast-col-lg-3 ast-col-md-3 ast-col-sm-12 ast-col-xs-12 lp-staff-card">

									<img src="<?php echo $photo; ?>" />

									<h4><?php echo $name; ?></h4>

							    <p class="staff-title"><?php echo $title; ?></p>

							    <p><?php echo $email; ?></p>
							    <p><?php echo $phone; ?></p>

							</div>

						<?php endwhile; ?>

						</div>

			<?php endif; ?>

		</section>

					
		<?php get_template_part( 'template-parts/donate' ); ?>  



	</div><!-- #primary -->

<?php get_footer(); ?>