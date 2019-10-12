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

						<h1><?php the_title(); ?></h1>



				
						<?php // astra_primary_content_top(); ?>

						<?php // astra_content_page_loop(); ?>

						<?php // astra_primary_content_bottom(); ?>

					</div>
					
				</div>
			</div>
		</section>

				<!-- ----------------------------------------------------  STAFF SECTION 1 --------------------------------------------------------- -->

		<section class="staff-section lp-section ast-container">

			<h2>Executive Team</h2>

			<div class="thingy"></div> 

			<?php if( have_rows( 'section_1_executive' ) ): ?>

				<?php  while( have_rows( 'section_1_executive' ) ): the_row(); ?>

				<?php if( have_rows('staff_member') ): ?>

					<div class="staff-member-wrapper ast-row">

						<?php while( have_rows('staff_member') ): the_row(); 

							$name = get_sub_field('name');
							$title = get_sub_field('title');
							$email = get_sub_field('email');
							$phone = get_sub_field('phone');
							$photo = get_sub_field('photo');

						?>

							<div class="ast-col-lg-3 ast-col-md-3 ast-col-sm-12 ast-col-xs-12 lp-staff-card">

								<div class="staff-photo-wrapper" style="background-image: url(<?php echo $photo; ?>)"></div>

								<!-- <img src="<?php echo $photo; ?>" /> -->

								<h4><?php echo $name; ?></h4>

						    <p class="staff-title"><?php echo $title; ?></p>

						    <p><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>

						    <p><?php echo $phone; ?></p>

							</div>

						<?php endwhile; ?>

						</div>

				<?php endif;

					 endwhile;

				  endif; 
			  ?>

		</section>


		<!-- ----------------------------------------------------  STAFF SECTION 2 --------------------------------------------------------- -->

		<section class="staff-section lp-section ast-container">

			<h2>Programs Support</h2>

			<div class="thingy"></div> 

			<?php if( have_rows( 'section_2_programs' ) ): ?>

				<?php  while( have_rows( 'section_2_programs' ) ): the_row(); ?>

				<?php if( have_rows('staff_member') ): ?>

					<div class="staff-member-wrapper ast-row">

						<?php while( have_rows('staff_member') ): the_row(); 

							$name = get_sub_field('name');
							$title = get_sub_field('title');
							$email = get_sub_field('email');
							$phone = get_sub_field('phone');
							$photo = get_sub_field('photo');

						?>

							<div class="ast-col-lg-3 ast-col-md-3 ast-col-sm-12 ast-col-xs-12 lp-staff-card">

								<div class="staff-photo-wrapper" style="background-image: url(<?php echo $photo; ?>)"></div>

								<!-- <img src="<?php echo $photo; ?>" /> -->

								<h4><?php echo $name; ?></h4>

						    <p class="staff-title"><?php echo $title; ?></p>

						    <!-- <p><?php echo $email; ?></p> -->
						    <p><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>

						    <p><?php echo $phone; ?></p>

							</div>

						<?php endwhile; ?>

						</div>

				<?php endif;

					 endwhile;

				  endif; 
			  ?>

		</section>


		<!-- ----------------------------------------------------  STAFF SECTION 3 --------------------------------------------------------- -->

		<section class="staff-section lp-section ast-container">

			<h2>Branching Out Conservation for Everyone</h2>

			<div class="thingy"></div> 

			<?php if( have_rows( 'section_3_conservation' ) ): ?>

				<?php  while( have_rows( 'section_3_conservation' ) ): the_row(); ?>

				<?php if( have_rows('staff_member') ): ?>

					<div class="staff-member-wrapper ast-row">

						<?php while( have_rows('staff_member') ): the_row(); 

							$name = get_sub_field('name');
							$title = get_sub_field('title');
							$email = get_sub_field('email');
							$phone = get_sub_field('phone');
							$photo = get_sub_field('photo');

						?>

							<div class="ast-col-lg-3 ast-col-md-3 ast-col-sm-12 ast-col-xs-12 lp-staff-card">

								<div class="staff-photo-wrapper" style="background-image: url(<?php echo $photo; ?>)"></div>

								<!-- <img src="<?php echo $photo; ?>" /> -->

								<h4><?php echo $name; ?></h4>

						    <p class="staff-title"><?php echo $title; ?></p>

						    <!-- <p><?php echo $email; ?></p> -->
						    <p><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>

						    <p><?php echo $phone; ?></p>

							</div>

						<?php endwhile; ?>

						</div>

				<?php endif;

					 endwhile;

				  endif; 
			  ?>

		</section>


		<!-- ----------------------------------------------------  STAFF SECTION 4 --------------------------------------------------------- -->

		<section class="staff-section lp-section ast-container">

			<h2>Growing Community with Nature</h2>

			<div class="thingy"></div> 

			<?php if( have_rows( 'section_4_community' ) ): ?>

				<?php  while( have_rows( 'section_4_community' ) ): the_row(); ?>

				<?php if( have_rows('staff_member') ): ?>

					<div class="staff-member-wrapper ast-row">

						<?php while( have_rows('staff_member') ): the_row(); 

							$name = get_sub_field('name');
							$title = get_sub_field('title');
							$email = get_sub_field('email');
							$phone = get_sub_field('phone');
							$photo = get_sub_field('photo');

						?>

							<div class="ast-col-lg-3 ast-col-md-3 ast-col-sm-12 ast-col-xs-12 lp-staff-card">

								<div class="staff-photo-wrapper" style="background-image: url(<?php echo $photo; ?>)"></div>

								<!-- <img src="<?php echo $photo; ?>" /> -->

								<h4><?php echo $name; ?></h4>

						    <p class="staff-title"><?php echo $title; ?></p>

						    <!-- <p><?php echo $email; ?></p> -->
						    <p><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>

						    <p><?php echo $phone; ?></p>

							</div>

						<?php endwhile; ?>

						</div>

				<?php endif;

					 endwhile;

				  endif; 
			  ?>

		</section>


		<!-- ----------------------------------------------------  STAFF SECTION 5 --------------------------------------------------------- -->

		<section class="staff-section lp-section ast-container">

			<h2>Rooting Youth in Nature</h2>

			<div class="thingy"></div> 

			<?php if( have_rows( 'section_5_youth' ) ): ?>

				<?php  while( have_rows( 'section_5_youth' ) ): the_row(); ?>

				<?php if( have_rows('staff_member') ): ?>

					<div class="staff-member-wrapper ast-row">

						<?php while( have_rows('staff_member') ): the_row(); 

							$name = get_sub_field('name');
							$title = get_sub_field('title');
							$email = get_sub_field('email');
							$phone = get_sub_field('phone');
							$photo = get_sub_field('photo');

						?>

							<div class="ast-col-lg-3 ast-col-md-3 ast-col-sm-12 ast-col-xs-12 lp-staff-card">

								<div class="staff-photo-wrapper" style="background-image: url(<?php echo $photo; ?>)"></div>

								<!-- <img src="<?php echo $photo; ?>" /> -->

								<h4><?php echo $name; ?></h4>

						    <p class="staff-title"><?php echo $title; ?></p>

						    <!-- <p><?php echo $email; ?></p> -->
						    <p><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>
						    
						    <p><?php echo $phone; ?></p>

							</div>

						<?php endwhile; ?>

						</div>

				<?php endif;

					 endwhile;

				  endif; 
			  ?>

		</section>


		<!-- ====================  DONATE ======================================================== -->

					
		<?php get_template_part( 'template-parts/donate-basic' ); ?>  



	</div><!-- #primary -->

<?php get_footer(); ?>