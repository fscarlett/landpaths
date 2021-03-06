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
					<a href="<?php the_field('block_1_button_link'); ?>" class="ast-custom-button-link"><button class="ast-custom-button lp-button"><?php the_field('block_1_button_text'); ?></button></a>

				</div>
				<div class="ast-col-lg-6 ast-col-md-6 ast-col-sm-12 ast-col-xs-12">
					<div class="lp-img-wrapper">
						<img src="<?php the_field('block_1_image'); ?>" alt="">
					</div>
				</div>
			</div>
		</section>

		<section class="lp-bleed-section" style="background-image: url(<?php the_field('big_image_1'); ?>)"></section>


<!-- NEW JOIN US SECTION w 3 INITIATIVES =============================== -->

		<section class="lp-section ast-container join-us-section join-us-1">

			<h2><?php the_field('initiatives_section_title'); ?></h2>
			<div class="thingy"></div>

			<div class="ast-row">
				<div class="ast-col-lg-6 ast-col-md-6 ast-col-sm-12 ast-col-xs-12">
					<div class="lp-img-wrapper">
						<img src="<?php the_field('initiatives_section_1_photo'); ?>" alt="">
					</div>
				</div>
				<div class="ast-col-lg-4 ast-col-md-6 ast-col-sm-12 ast-col-xs-12">
					<p class="h4"><?php the_field('initiatives_section_1_subtitle'); ?></p>
					<h2 class="h1"><?php the_field('initiatives_section_1_title'); ?></h2>

					<div><?php the_field('initiatives_section_1_paragraph'); ?></div>
					<a href="<?php the_field('initiatives_section_1_link') ?>" class="ast-custom-button-link"><button class="ast-custom-button lp-button"><?php the_field('initiatives_section_1_button_text'); ?></button></a>
				</div>	
			</div>
			<div class=" lp-phone-hide lp-1000-hide lp-illustration">
					<img src="<?php echo site_url(); ?>/wp-content/uploads/2019/08/LP_illo_ceanothus.jpg" alt="">
			</div>
		</section>


		<section class="lp-section ast-container join-us-section join-us-2">
			<div class="ast-row">
				<div class="ast-col-lg-6 ast-col-md-6 ast-col-sm-12 ast-col-xs-12">
					<p class="h4"><?php the_field('initiatives_section_2_subtitle'); ?></p>
					<h2 class="h1"><?php the_field('initiatives_section_2_title'); ?></h2>
					<p><?php the_field('initiatives_section_2_paragraph'); ?></p>
					<a href="<?php the_field('initiatives_section_2_link'); ?>" class="ast-custom-button-link"><button class="ast-custom-button lp-button"><?php the_field('initiatives_section_2_button_text') ?></button></a>
				</div>

				<div class="ast-col-lg-6 ast-col-md-6 ast-col-sm-12 ast-col-xs-12">
					<div class="ast-row lp-quad-wrapper">
						<div class="lp-quad lp-quad-1" style="background-image: url(<?php the_field('initiatives_section_2_photo_1'); ?>);">
						</div>
						<div class="lp-quad lp-quad-2" style="background-image: url(<?php the_field('initiatives_section_2_photo_2'); ?>);">
						</div>
						<div class="lp-quad lp-quad-3" style="background-image: url(<?php the_field('initiatives_section_2_photo_3'); ?>);">
						</div>
						<div class="lp-quad lp-quad-4" style="background-image: url(<?php the_field('initiatives_section_2_photo_4'); ?>);">
						</div>
					</div>
				</div>
			</div>
		</section>


		<section class="lp-section ast-container join-us-section join-us-3">
			<div class="ast-row">
				<div class="ast-col-lg-6 ast-col-md-6 ast-col-sm-12 ast-col-xs-12">
					<div class="lp-img-wrapper">
						<img src="<?php the_field('initiatives_section_3_photo'); ?>" alt="">
					</div>
				</div>
				<div class="ast-col-lg-4 ast-col-md-6 ast-col-sm-12 ast-col-xs-12">
					<p class="h4"><?php the_field('initiatives_section_3_subtitle'); ?></p>
					<h2 class="h1"><?php the_field('initiatives_section_3_title'); ?></h2>

					<div><?php the_field('initiatives_section_3_paragraph'); ?></div>
					<a href="<?php the_field('initiatives_section_3_link') ?>" class="ast-custom-button-link"><button class="ast-custom-button lp-button"><?php the_field('initiatives_section_3_button_text'); ?></button></a>
				</div>	
			</div>
			<div class=" lp-phone-hide lp-1000-hide lp-illustration lp-illo-small">
					<img src="<?php echo site_url(); ?>/wp-content/uploads/2019/08/LP_illo_owl.jpg" alt="">
			</div>
		</section>





 <!-- end join us ====================================================== -->






		<section class="lp-bleed-section" style="background-image: url(<?php the_field('big_image_2'); ?>)"></section>


		<section class="lp_block5_cta_4up lp-section ast-container">
			<h2>Featured Outings</h2>
			<div class="thingy"></div>

			<div class="ast-row">

				<div class="ast-col-lg-3 ast-col-md-3 ast-col-sm-12 ast-col-xs-12">
					<div class="lp-4up-img-wrapper" style="background-image: url(<?php the_field('outing_1_image'); ?>)">
					</div>
					<h3 class="h4"><?php the_field('outing_1_title'); ?></h3>
					<div class="card-datetime">
						<?php the_field('column_1_datetime'); ?>
					</div>
					<p><?php the_field('outing_1_copy'); ?></p>

					<a href="<?php the_field('outing_1_link'); ?>" class="lp-link ast-custom-button-link" target="_blank" rel="nofollow"><?php the_field('outing_1_link_text'); ?></a>
					

				</div>

				<div class="ast-col-lg-3 ast-col-md-3 ast-col-sm-12 ast-col-xs-12">
					<div class="lp-4up-img-wrapper" style="background-image: url(<?php the_field('outing_2_image'); ?>)">
					</div>
					<h3 class="h4"><?php the_field('outing_2_title'); ?></h3>
					<div class="card-datetime">
						<?php the_field('column_2_datetime'); ?>
					</div>
					<p><?php the_field('outing_2_copy'); ?></p>
					<a href="<?php the_field('outing_2_link'); ?>" class="lp-link ast-custom-button-link" target="_blank" rel="nofollow"><?php the_field('outing_2_link_text'); ?></a>
				</div>

				<div class="ast-col-lg-3 ast-col-md-3 ast-col-sm-12 ast-col-xs-12">
					<div class="lp-4up-img-wrapper" style="background-image: url(<?php the_field('outing_3_image'); ?>)">
					</div>
					<h3 class="h4"><?php the_field('outing_3_title'); ?></h3>
					<div class="card-datetime">
						<?php the_field('column_3_datetime'); ?>
					</div>
					<p><?php the_field('outing_3_copy'); ?></p>
					<a href="<?php the_field('outing_3_link'); ?>" class="lp-link ast-custom-button-link" target="_blank" rel="nofollow"><?php the_field('outing_3_link_text'); ?></a>
				</div>

				<div class="ast-col-lg-3 ast-col-md-3 ast-col-sm-12 ast-col-xs-12">
					<div class="lp-4up-img-wrapper" style="background-image: url(<?php the_field('outing_4_image'); ?>)">
					</div>
					<h3 class="h4"><?php the_field('outing_4_title'); ?></h3>
					<div class="card-datetime">
						<?php the_field('column_4_datetime'); ?>
					</div>
					<p><?php the_field('outing_4_copy'); ?></p>
					<a href="<?php the_field('outing_4_link'); ?>" class="lp-link ast-custom-button-link" target="_blank" rel="nofollow"><?php the_field('outing_4_link_text'); ?></a>
				</div>
				
			</div>
		</section>

		<section class="lp-bleed-section" style="background-image: url(<?php the_field('big_image_3'); ?>"></section>

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
									<div class="lp-blog-img-wrapper img-wrapper-230">
										<?php the_post_thumbnail('medium'); ?>
										<!-- <img src="<?php echo site_url(); ?>/wp-content/uploads/2019/08/Landpaths_Homepage_Photo_Get_Kids_Outside_button.jpg" alt=""> -->
									</div>
									<div class="lp-blog-copy-card">
										<h3 class="h4"><?php the_title(); ?></h3> 
											<p class="lp-post-date"><?php  $post_date = get_the_date( 'F j, Y' ); echo $post_date; ?></p>
											<p><?php the_tags(); ?></p>

											<?php the_excerpt(''); ?>

										<!-- <a href="<?php the_permalink(); ?>" class="lp-link ast-custom-button-link">Learn More</a> -->
										<!-- <a href="<?php the_permalink(); ?>" class="ast-custom-button-link"><button class="ast-custom-button lp-button lp-blog-btn">Read Article</button></a> -->
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

		
					
		<?php get_template_part( 'template-parts/newsletter-signup' ); ?>  



		<?php // astra_primary_content_top(); ?>

		<?php // astra_content_page_loop(); ?>

		<?php //  astra_primary_content_bottom(); ?>

	</div><!-- #primary -->

<?php if ( astra_page_layout() == 'right-sidebar' ) : ?>

	<?php // get_sidebar(); ?>

<?php endif ?>

<?php get_footer(); ?>