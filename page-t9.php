<?php
/**
 * Template Name: T9 Board
 *
 * @package Astra
 * @since 1.0.0
 */

get_header(); ?>

	<div id="primary" <?php astra_primary_class(); ?>>


		<section class="">
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


		<section class="lp-section ast-container">

		<h1>Board of Directors</h1>


			<?php if( have_rows('board_member') ): ?>

					<div class="ast-row board-wrapper">

						<?php while( have_rows('board_member') ): the_row(); 

							$name = get_sub_field('name');
							$title = get_sub_field('title');
							// $email = get_sub_field('email');
							// $phone = get_sub_field('phone');
							$bio = get_sub_field('bio');
							// $photo = get_sub_field('photo');

						?>

							<div class="ast-col-lg-12 ast-col-md-12 ast-col-sm-12 ast-col-xs-12">

									<h3><?php echo $name; ?></h3>

							    <h4><?php echo $title; ?></h4>

									<p class="board-bio"><?php echo $bio; ?></p>

							</div>

						<?php endwhile; ?>

					</div>

			<?php endif; ?>

		</section> 

					
		<?php get_template_part( 'template-parts/donate' ); ?>  



	</div><!-- #primary -->

<?php get_footer(); ?>