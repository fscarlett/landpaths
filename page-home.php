<?php
/**
 * Template Name: Home
 *
 * @package Astra
 * @since 1.0.0
 */

get_header(); ?>

<?php if ( astra_page_layout() == 'left-sidebar' ) : ?>

	<?php get_sidebar(); ?>

<?php endif ?>

	<div id="primary" <?php astra_primary_class(); ?>>

		<section class="lp_block1_cta_1img_r lp-section ast-container">
			<div class="ast-row">
				<div class="ast-col-lg-6 ast-col-md-6 ast-col-sm-12 ast-col-xs-12">
					<p class="h4">Mission</p>
					<h1>Fostering a love of the land in Sonoma County</h1>

					<p>Our mission is to foster a love of the land in Sonoma County. We do this through three initiatives: Rooting Youth in Nature, Branching Out Conservation for Everyone, and Growing Community with Nature.</p>
					<p>LandPaths is a 501 © (3) nonprofit organization founded in 1996.</p>
					<a href="<?php site_url(); ?>/get-kids-outside/" class="ast-custom-button-link"><button class="ast-custom-button lp-button">See Kid Treks</button></a>

				</div>
				<div class="ast-col-lg-6 ast-col-md-6 ast-col-sm-12 ast-col-xs-12">
					<img src="<?php echo site_url(); ?>/wp-content/uploads/2019/08/Landpaths_Homepage_Photo_Get_Kids_Outside_button.jpg" alt="">
				</div>
			</div>
		</section>

		<section class="lp-bleed-section" style="background-image: url(<?php echo site_url(); ?>/wp-content/uploads/2019/07/CSP-Bohemia-03.jpg)"></section>

		<section class="lp_block2_cta_2up-illustration lp-section ast-container">
			<h2>Get Kids Outside</h2>

			<div class="ast-row">
				<div class="ast-col-lg-5 ast-col-md-5 ast-col-sm-12 ast-col-xs-12">
					<div class="lp-img-wrapper">
						<img src="<?php echo site_url(); ?>/wp-content/uploads/2019/08/Landpaths_Homepage_Photo_Get_Kids_Outside_button.jpg" alt="">
					</div>
					<h3 class="h4">Spring Break Nature Camp</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci quos nihil expedita, aliquam harum dolor repudiandae nobis reprehenderit molestiae deleniti cum id dolorem aliquid esse magni pariatur hic asperiores, saepe. Aliquid minus magnam maiores in consequatur, veritatis qui incidunt tempore harum officia excepturi odio impedit provident commodi, aspernatur sint sunt. </p>
					<a href="<?php site_url(); ?>/get-kids-outside/" class="ast-custom-button-link"><button class="ast-custom-button lp-button">Learn More</button></a>

				</div>
				<div class="ast-col-lg-5 ast-col-md-5 ast-col-sm-12 ast-col-xs-12">
					<div class="lp-img-wrapper">
						<img src="<?php echo site_url(); ?>/wp-content/uploads/2019/08/Landpaths_Homepage_Photo_Get_Kids_Outside_button.jpg" alt="">
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






		<?php astra_primary_content_top(); ?>

		<?php // astra_content_page_loop(); ?>

		<?php astra_primary_content_bottom(); ?>

	</div><!-- #primary -->

<?php if ( astra_page_layout() == 'right-sidebar' ) : ?>

	<?php get_sidebar(); ?>

<?php endif ?>

<?php get_footer(); ?>