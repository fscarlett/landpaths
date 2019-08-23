<?php
/**
 * Template Name: Home
 *
 * @package Astra
 * @since 1.0.0
 */

get_header(); ?>

<?php if ( astra_page_layout() == 'left-sidebar' ) : ?>

	<?php // get_sidebar(); ?>

<?php endif ?>

	<div id="primary" <?php astra_primary_class(); ?>>

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

		<section class="lp-bleed-section" style="background-image: url(<?php the_field('big_image_1'); ?>)"></section>

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
					<p class="h4"><?php the_field('block_3_subheading'); ?></p>
					<h2 class="h1"><?php the_field('block_3_heading'); ?></h2>
					<p><?php the_field('block_3_copy'); ?></p>
					<a href="<?php the_field('block_3_button_link'); ?>" class="ast-custom-button-link"><button class="ast-custom-button lp-button"><?php the_field('block_3_button_text') ?></button></a>
				</div>

				<div class="ast-col-lg-6 ast-col-md-6 ast-col-sm-12 ast-col-xs-12">
					<div class="ast-row lp-quad-wrapper">
						<div class="lp-quad lp-quad-1" style="background-image: url(<?php the_field('block_3_image_1'); ?>);">
						</div>
						<div class="lp-quad lp-quad-2" style="background-image: url(<?php the_field('block_3_image_2'); ?>);">
						</div>
					<!-- </div>
					<div class="ast-row"> -->
						<div class="lp-quad lp-quad-3" style="background-image: url(<?php the_field('block_3_image_3'); ?>);">
						</div>
						<div class="lp-quad lp-quad-4" style="background-image: url(<?php the_field('block_3_image_4'); ?>);">
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="lp_block4_cta_1up_illustration lp-section ast-container">
			<div class="ast-row">
				<div class="ast-col-lg-6 ast-col-md-6 ast-col-sm-12 ast-col-xs-12">
					<div class="lp-img-wrapper">
						<img src="<?php the_field('block_4_photo'); ?>" alt="">
					</div>
				</div>
				<div class="ast-col-lg-4 ast-col-md-4 ast-col-sm-12 ast-col-xs-12">
					<p class="h4"><?php the_field('block_4_subheading'); ?></p>
					<h2 class="h1"><?php the_field('block_4_heading'); ?></h2>

					<p><?php the_field('block_4_copy'); ?></p>
					<a href="<?php the_field('block_4_button_link') ?>" class="ast-custom-button-link"><button class="ast-custom-button lp-button"><?php the_field('block_4_button_text'); ?></button></a>
				</div>	
			</div>

			<div class=" lp-phone-hide lp-illustration lp-illo-small">
					<img src="<?php the_field('block_4_illustration'); ?>" alt="">
			</div>

		</section>

		<section class="lp_block5_cta_4up lp-section ast-container">
			<h2>Featured Outings</h2>
			<div class="thingy"></div>

			<div class="ast-row">

				<div class="ast-col-lg-3 ast-col-md-3 ast-col-sm-12 ast-col-xs-12">
					<div class="lp-4up-img-wrapper" style="background-image: url(<?php the_field('outing_1_image') ?>)">
					</div>
					<h3 class="h4"><?php the_field('outing_1_title') ?></h3>
					<p><?php the_field('outing_1_copy') ?></p>
					<a href="<?php the_field('outing_1_link') ?>" class="lp-link ast-custom-button-link">Learn More</a>
				</div>

				<div class="ast-col-lg-3 ast-col-md-3 ast-col-sm-12 ast-col-xs-12">
					<div class="lp-4up-img-wrapper" style="background-image: url(<?php the_field('outing_2_image') ?>)">
					</div>
					<h3 class="h4"><?php the_field('outing_2_title') ?></h3>
					<p><?php the_field('outing_2_copy') ?></p>
					<a href="<?php the_field('outing_2_link') ?>" class="lp-link ast-custom-button-link">Learn More</a>
				</div>

				<div class="ast-col-lg-3 ast-col-md-3 ast-col-sm-12 ast-col-xs-12">
					<div class="lp-4up-img-wrapper" style="background-image: url(<?php the_field('outing_3_image') ?>)">
					</div>
					<h3 class="h4"><?php the_field('outing_3_title') ?></h3>
					<p><?php the_field('outing_3_copy') ?></p>
					<a href="<?php the_field('outing_3_link') ?>" class="lp-link ast-custom-button-link">Learn More</a>
				</div>

				<div class="ast-col-lg-3 ast-col-md-3 ast-col-sm-12 ast-col-xs-12">
					<div class="lp-4up-img-wrapper" style="background-image: url(<?php the_field('outing_4_image') ?>)">
					</div>
					<h3 class="h4"><?php the_field('outing_4_title') ?></h3>
					<p><?php the_field('outing_4_copy') ?></p>
					<a href="<?php the_field('outing_4_link') ?>" class="lp-link ast-custom-button-link">Learn More</a>
				</div>
				
			</div>
		</section>

		<section class="lp-bleed-section" style="background-image: url(<?php echo site_url(); ?>/wp-content/uploads/2019/07/CSP-Bohemia-03.jpg)"></section>

				<!-- blog section -->
		<section class="lp_block6_cta_3up blog-section lp-section lp-bg-grey ">
			<div class="ast-container">
				<p class="h4">Stories + News</p>
				<h2 class="h1"><?php the_field('blog_section_heading'); ?></h2>
				<p class="copy-half-width"><?php the_field('blog_section_subheading') ?></p>
				<div class="ast-row">

					<?php 

					$lp_tag = get_field('blog_tag');
					$lp_tag_slug = $lp_tag->slug;

						$lp_blog_args = array(
							'tag' 						=> $lp_tag_slug,
			        'order'           => 'DESC',
			        'posts_per_page'  => '3',
			        );

			      $lp_blog = new WP_Query( $lp_blog_args );


			      if ( $lp_blog->have_posts() ) {

			        while ( $lp_blog->have_posts() ) {

			          $lp_blog->the_post();

			          ?>

			          <div class="ast-col-lg-4 ast-col-md-4 ast-col-sm-12 ast-col-xs-12">
									<div class="lp-blog-img-wrapper">
										<?php the_post_thumbnail('medium'); ?>
										<!-- <img src="<?php echo site_url(); ?>/wp-content/uploads/2019/08/Landpaths_Homepage_Photo_Get_Kids_Outside_button.jpg" alt=""> -->
									</div>
									<div class="lp-blog-copy-card">
										<h3 class="h4"><?php the_title(); ?></h3> 
										<a href="<?php the_permalink(); ?>" class="lp-link ast-custom-button-link">Learn More</a>
									</div>
								</div>

			        <?php
			        } // endwhile 

			      } else {
			        echo '<p>No posts have been found.</p>';
			      }; 

			      wp_reset_postdata();

			    ?> 

				</div> 
			</div>
		</section>  <!-- blog -->

		<!-- <section class="lp_block6_cta_3up lp-section lp-bg-grey ">
			<div class="ast-container">
				<p class="h4">Stories + News</p>
				<h2 class="h1">Nature Journal</h2>
				<p class="copy-half-width">Our impact is made possible by volunteers like you, with a passion for growing community with nature.</p>
				<div class="ast-row">
					<div class="ast-col-lg-4 ast-col-md-4 ast-col-sm-12 ast-col-xs-12">
						<div class="lp-3up-img-wrapper" style="background-image: url(<?php echo site_url(); ?>/wp-content/uploads/2019/08/Landpaths_Homepage_Photo_Get_Kids_Outside_button.jpg)">
						</div>
						<div class="lp-white-copy-card">
							<h3 class="h4">Spring Break Nature Camp</h3> 
							<a href="<?php site_url(); ?>/get-kids-outside/" class="lp-link ast-custom-button-link">Learn More</a>
						</div>
					</div>
					<div class="ast-col-lg-4 ast-col-md-4 ast-col-sm-12 ast-col-xs-12">
						<div class="lp-3up-img-wrapper" style="background-image: url(<?php echo site_url(); ?>/wp-content/uploads/2019/08/Landpaths_Homepage_Photo_Get_Kids_Outside_button.jpg)">
						</div>
						<div class="lp-white-copy-card">
							<h3 class="h4">Spring Break Nature Camp</h3>
							<a href="<?php site_url(); ?>/get-kids-outside/" class="lp-link ast-custom-button-link">Learn More</a>
						</div>
					</div>
					<div class="ast-col-lg-4 ast-col-md-4 ast-col-sm-12 ast-col-xs-12">
						<div class="lp-3up-img-wrapper" style="background-image: url(<?php echo site_url(); ?>/wp-content/uploads/2019/08/Landpaths_Homepage_Photo_Get_Kids_Outside_button.jpg)">
						</div>
						<div class="lp-white-copy-card">
							<h3 class="h4">Spring Break Nature Camp</h3>
							<a href="<?php site_url(); ?>/get-kids-outside/" class="lp-link ast-custom-button-link">Learn More</a>
						</div>
					</div>
				</div> 
			</div>
		</section> -->
					
					<?php get_template_part( 'template-parts/newsletter-signup' ); ?>  



		<?php // astra_primary_content_top(); ?>

		<?php // astra_content_page_loop(); ?>

		<?php //  astra_primary_content_bottom(); ?>

	</div><!-- #primary -->

<?php if ( astra_page_layout() == 'right-sidebar' ) : ?>

	<?php // get_sidebar(); ?>

<?php endif ?>

<?php get_footer(); ?>