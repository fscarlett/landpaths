<?php
/**
 * Template Name: T4 
 *
 * @package Astra
 * @since 1.0.0
 */

get_header(); ?>

	<div id="primary" <?php astra_primary_class(); ?>>

		<section class="lp-bleed-section" style="background-image: url(<?php the_field('hero_image'); ?>)"></section>

		<section class="lp_block7_content_quote lp-section ast-container">
			<p class="h4"><?php the_field('subtitle'); ?></p>

			<div class="ast-row">
				<div class="ast-col-lg-9 ast-col-md-8 ast-col-sm-12 ast-col-xs-12 lp-border-right">
			
					<?php // astra_primary_content_top(); ?>

					<?php astra_content_page_loop(); ?>

					<?php // astra_primary_content_bottom(); ?>

				</div>
				<div class="ast-col-lg-3 ast-col-md-4 ast-col-sm-12 ast-col-xs-12">
					<p class="h4"><?php the_field('quote_author'); ?></p>
					<p>" <?php the_field('quote_text'); ?> "</p>
				</div>
			</div>
		</section>

		<section class="activity-section lp-section ast-container">
			<h2><?php the_field('activity_heading'); ?></h2>
			<div class="thingy"></div>

			<?php if( have_rows('activity') ): ?>

			<div class="activity-wrapper">

				<?php while( have_rows('activity') ): the_row(); 

					$image = get_sub_field('image');
					$title = get_sub_field('title');
					$description = get_sub_field('description');
					$button_text = get_sub_field('button_text');
					$button_link = get_sub_field('button_link');

				?>

					<div class="ast-col-lg-6 ast-col-md-6 ast-col-sm-12 ast-col-xs-12">

							<img src="<?php echo $image; ?>" alt="<?php echo $image['alt'] ?>" />

					    <h3 class="h4"><?php echo $title; ?></h3>

					    <p><?php echo $description; ?></p>

					    <a href="<?php echo $button_link; ?>" class="ast-custom-button-link"><button class="ast-custom-button lp-button"><?php echo $button_text; ?></button></a>

					</div>

				<?php endwhile; ?>

				</div>

			<?php endif; ?>




		</section>



		<section class="lp_block1_cta_1img_r lp-section ast-container"> 
			<div class="ast-row">
				<div class="ast-col-lg-6 ast-col-md-6 ast-col-sm-12 ast-col-xs-12">
					<p class="h4"><?php the_field('block_name') ?></p>
					<h1><?php the_field('main_heading') ?></h1> 

					<p><?php the_field('paragraph_1') ?></p>
					<p><?php the_field('paragraph_2') ?></p>
					<a href="<?php site_url(); ?>/get-kids-outside/" class="ast-custom-button-link"><button class="ast-custom-button lp-button"><?php the_field('block_1_button_text'); ?></button></a>

				</div>
				<div class="ast-col-lg-6 ast-col-md-6 ast-col-sm-12 ast-col-xs-12">
					<div class="lp-img-wrapper">
						<img src="<?php the_field('block_1_image'); ?>" alt="">
					</div>
				</div>
			</div>
		</section>


		<section class="lp_block2_cta_2up-illustration lp-section ast-container">
			<h2><?php the_field('block_2_heading'); ?></h2>
			<div class="thingy"></div>

			<?php 
				$b2_col_1 = get_field('block_2_column_1');
				$b2_col_2 = get_field('block_2_column_2');
			 ?>

			<div class="ast-row">
				<div class="ast-col-lg-5 ast-col-md-5 ast-col-sm-12 ast-col-xs-12">
					<div class="lp-img-wrapper">
						<img src="<?php echo $b2_col_1['image']; ?>" alt="<?php echo $b2_col_1['image']['alt']; ?>">
					</div>
					<h3 class="h4"><?php echo $b2_col_1['column_heading']; ?></h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci quos nihil expedita, aliquam harum dolor repudiandae nobis reprehenderit molestiae deleniti cum id dolorem aliquid esse magni pariatur hic asperiores, saepe. Aliquid minus magnam maiores in consequatur, veritatis qui incidunt tempore harum officia excepturi odio impedit provident commodi, aspernatur sint sunt. </p>
					<a href="<?php site_url(); ?>/get-kids-outside/" class="ast-custom-button-link"><button class="ast-custom-button lp-button">Learn More</button></a>

				</div>
				<div class="ast-col-lg-5 ast-col-md-5 ast-col-sm-12 ast-col-xs-12">
					<div class="lp-img-wrapper">
						<img src="<?php echo $b2_col_2['image']; ?>" alt="">
					</div>
					<h3 class="h4">Spring Break Nature Camp</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione odio atque in et velit maxime voluptates numquam iusto itaque, reiciendis perspiciatis, commodi asperiores dolor debitis ut facilis tempora quisquam. Vero at quas eligendi, consectetur hic ex! Dicta, reiciendis, laboriosam. Rerum, a omnis quis voluptatum maxime sit reprehenderit sequi, repellat! Corporis, amet numquam quis voluptas alias, debitis unde similique minima beatae?</p>
					<a href="<?php site_url(); ?>/get-kids-outside/" class="ast-custom-button-link"><button class="ast-custom-button lp-button">Learn More</button></a>

				</div>
				
			</div>

			<div class=" lp-phone-hide lp-illustration">
					<img src="<?php echo site_url(); ?>/wp-content/uploads/2019/08/LP_illo_ceanothus.jpg" alt="">
			</div>
		</section>

		<section class="lp-bleed-section" style="background-image: url(<?php the_field('big_image_2'); ?>)"></section>

		<section class="lp_block3_cta_4img_r lp-section ast-container">
			<div class="ast-row">
				<div class="ast-col-lg-6 ast-col-md-6 ast-col-sm-12 ast-col-xs-12">
					<p class="h4">Volunteer</p>
					<h2 class="h1">Our People-Powered Movement!</h2>

					<p>Our impact is made possible by volunteers like you, with a passion for growing community with nature. From clearing invasive species at one of our preserves to singing songs with youth at our summer nature camp, volunteers lie at the heart of LandPaths.</p>
					<a href="<?php site_url(); ?>/volunteer/" class="ast-custom-button-link"><button class="ast-custom-button lp-button">Volunteer</button></a>

				</div>

				<div class="ast-col-lg-6 ast-col-md-6 ast-col-sm-12 ast-col-xs-12">
					<div class="ast-row">
						<div class="lp-quad-1">
							<img src="<?php echo site_url(); ?>/wp-content/uploads/2019/08/Landpaths_Homepage_Photo_Get_Kids_Outside_button.jpg" alt="">
						</div>
						<div class="lp-quad-2">
							<img src="<?php echo site_url(); ?>/wp-content/uploads/2019/08/Landpaths_Homepage_Photo_Get_Kids_Outside_button.jpg" alt="">
						</div>
					<!-- </div>
					<div class="ast-row"> -->
						<div class="lp-quad-3">
							<img src="<?php echo site_url(); ?>/wp-content/uploads/2019/08/Landpaths_Homepage_Photo_Get_Kids_Outside_button.jpg" alt="">
						</div>
						<div class="lp-quad-4">
							<img src="<?php echo site_url(); ?>/wp-content/uploads/2019/08/Landpaths_Homepage_Photo_Get_Kids_Outside_button.jpg" alt="">
						</div>
					</div>
				</div>

			</div>
		</section>

		<section class="lp_block4_cta_1up_illustration lp-section ast-container">
			<div class="ast-row">
				<div class="ast-col-lg-6 ast-col-md-6 ast-col-sm-12 ast-col-xs-12">
					<div class="lp-img-wrapper">
						<img src="<?php echo site_url(); ?>/wp-content/uploads/2019/08/Landpaths_Homepage_Photo_Get_Kids_Outside_button.jpg" alt="">
					</div>
				</div>
				<div class="ast-col-lg-4 ast-col-md-4 ast-col-sm-12 ast-col-xs-12">
					<p class="h4">Go Outside</p>
					<h2 class="h1">Explore Local Nature</h2>

					<p>Our impact is made possible by volunteers like you, with a passion for growing community with nature. From clearing invasive species at one of our preserves to singing songs with youth at our summer nature camp, volunteers lie at the heart of LandPaths.</p>
					<a href="<?php site_url(); ?>/explore/" class="ast-custom-button-link"><button class="ast-custom-button lp-button">Explore</button></a>
				</div>	
			</div>

			<div class=" lp-phone-hide lp-illustration lp-illo-small">
					<img src="<?php echo site_url(); ?>/wp-content/uploads/2019/08/LP_illo_heron.jpg" alt="">
			</div>

		</section>

		<section class="lp_block5_cta_4up lp-section ast-container">
			<h2>Featured Outings</h2>
			<div class="thingy"></div>

			<div class="ast-row">

				<div class="ast-col-lg-3 ast-col-md-3 ast-col-sm-12 ast-col-xs-12">
					<div class="lp-4up-img-wrapper" style="background-image: url(<?php echo site_url(); ?>/wp-content/uploads/2019/08/Landpaths_Homepage_Photo_Get_Kids_Outside_button.jpg)">
						<!-- <img src="<?php echo site_url(); ?>/wp-content/uploads/2019/08/Landpaths_Homepage_Photo_Get_Kids_Outside_button.jpg" alt=""> -->
					</div>
					<h3 class="h4">Bohemia Ecological Preserve</h3>
					<p>Bohemia Ecological Preserve — 1,000 magnificent acres in the western hills of Sonoma County near Occidental — boasts stunningly diverse habitats, three creeks, and an iconic 25-foot waterfall.</p>
					<a href="<?php site_url(); ?>/get-kids-outside/" class="lp-link ast-custom-button-link">Learn More</a>
				</div>

				<div class="ast-col-lg-3 ast-col-md-3 ast-col-sm-12 ast-col-xs-12">
					<div class="lp-4up-img-wrapper" style="background-image: url(<?php echo site_url(); ?>/wp-content/uploads/2019/08/Landpaths_Homepage_Photo_Get_Kids_Outside_button.jpg)">
						<!-- <img src="<?php echo site_url(); ?>/wp-content/uploads/2019/08/Landpaths_Homepage_Photo_Get_Kids_Outside_button.jpg" alt=""> -->
					</div>
					<h3 class="h4">Bohemia Ecological Preserve</h3>
					<p>Bohemia Ecological Preserve — 1,000 magnificent acres in the western hills of Sonoma County near Occidental — boasts stunningly diverse habitats, three creeks, and an iconic 25-foot waterfall.</p>
					<a href="<?php site_url(); ?>/get-kids-outside/" class="lp-link ast-custom-button-link">Learn More</a>
				</div>

				<div class="ast-col-lg-3 ast-col-md-3 ast-col-sm-12 ast-col-xs-12">
					<div class="lp-4up-img-wrapper" style="background-image: url(<?php echo site_url(); ?>/wp-content/uploads/2019/08/Landpaths_Homepage_Photo_Get_Kids_Outside_button.jpg)">
						<!-- <img src="<?php echo site_url(); ?>/wp-content/uploads/2019/08/Landpaths_Homepage_Photo_Get_Kids_Outside_button.jpg" alt=""> -->
					</div>
					<h3 class="h4">Bohemia Ecological Preserve</h3>
					<p>Bohemia Ecological Preserve — 1,000 magnificent acres in the western hills of Sonoma County near Occidental — boasts stunningly diverse habitats, three creeks, and an iconic 25-foot waterfall.</p>
					<a href="<?php site_url(); ?>/get-kids-outside/" class="lp-link ast-custom-button-link">Learn More</a>
				</div>

				<div class="ast-col-lg-3 ast-col-md-3 ast-col-sm-12 ast-col-xs-12">
					<div class="lp-4up-img-wrapper" style="background-image: url(<?php echo site_url(); ?>/wp-content/uploads/2019/08/Landpaths_Homepage_Photo_Get_Kids_Outside_button.jpg)">
						<!-- <img src="<?php echo site_url(); ?>/wp-content/uploads/2019/08/Landpaths_Homepage_Photo_Get_Kids_Outside_button.jpg" alt=""> -->
					</div>
					<h3 class="h4">Bohemia Ecological Preserve</h3>
					<p>Bohemia Ecological Preserve — 1,000 magnificent acres in the western hills of Sonoma County near Occidental — boasts stunningly diverse habitats, three creeks, and an iconic 25-foot waterfall.</p>
					<a href="<?php site_url(); ?>/get-kids-outside/" class="lp-link ast-custom-button-link">Learn More</a>
				</div>
				
			</div>
		</section>

		<section class="lp-bleed-section" style="background-image: url(<?php echo site_url(); ?>/wp-content/uploads/2019/07/CSP-Bohemia-03.jpg)"></section>

		<section class="lp_block6_cta_3up lp-section lp-bg-grey ">
			<div class="ast-container">
				<p class="h4">Stories + News</p>
				<h2 class="h1">Nature Journal</h2>
				<p class="copy-half-width">Our impact is made possible by volunteers like you, with a passion for growing community with nature.</p>
				<div class="ast-row">
					<div class="ast-col-lg-4 ast-col-md-4 ast-col-sm-12 ast-col-xs-12">
						<div class="lp-3up-img-wrapper" style="background-image: url(<?php echo site_url(); ?>/wp-content/uploads/2019/08/Landpaths_Homepage_Photo_Get_Kids_Outside_button.jpg)">
							<!-- <img src="<?php echo site_url(); ?>/wp-content/uploads/2019/08/Landpaths_Homepage_Photo_Get_Kids_Outside_button.jpg" alt=""> -->
						</div>
						<div class="lp-white-copy-card">
							<h3 class="h4">Spring Break Nature Camp</h3> 
							<a href="<?php site_url(); ?>/get-kids-outside/" class="lp-link ast-custom-button-link">Learn More</a>
						</div>
					</div>
					<div class="ast-col-lg-4 ast-col-md-4 ast-col-sm-12 ast-col-xs-12">
						<div class="lp-3up-img-wrapper" style="background-image: url(<?php echo site_url(); ?>/wp-content/uploads/2019/08/Landpaths_Homepage_Photo_Get_Kids_Outside_button.jpg)">
							<!-- <img src="<?php echo site_url(); ?>/wp-content/uploads/2019/08/Landpaths_Homepage_Photo_Get_Kids_Outside_button.jpg" alt=""> -->
						</div>
						<div class="lp-white-copy-card">
							<h3 class="h4">Spring Break Nature Camp</h3>
							<a href="<?php site_url(); ?>/get-kids-outside/" class="lp-link ast-custom-button-link">Learn More</a>
						</div>
					</div>
					<div class="ast-col-lg-4 ast-col-md-4 ast-col-sm-12 ast-col-xs-12">
						<div class="lp-3up-img-wrapper" style="background-image: url(<?php echo site_url(); ?>/wp-content/uploads/2019/08/Landpaths_Homepage_Photo_Get_Kids_Outside_button.jpg)">
							<!-- <img src="<?php echo site_url(); ?>/wp-content/uploads/2019/08/Landpaths_Homepage_Photo_Get_Kids_Outside_button.jpg" alt=""> -->
						</div>
						<div class="lp-white-copy-card">
							<h3 class="h4">Spring Break Nature Camp</h3>
							<a href="<?php site_url(); ?>/get-kids-outside/" class="lp-link ast-custom-button-link">Learn More</a>
						</div>
					</div>


				</div> 
			</div>
		</section>
					
					<?php get_template_part( 'template-parts/newsletter-signup' ); ?>  





	</div><!-- #primary -->

<?php if ( astra_page_layout() == 'right-sidebar' ) : ?>

	<?php // get_sidebar(); ?>

<?php endif ?>

<?php get_footer(); ?>