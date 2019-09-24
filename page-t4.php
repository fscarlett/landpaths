<?php
/**
 * Template Name: T4 
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

				$lp_quote = get_field('quote_text');

		 ?>

		<section class="lp-bleed-section" style="background-image: url(<?php echo $lp_hero; ?>)"></section>

		<section class="lp_block7_content_quote lp-section ast-container">
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

						<p class="h4"><?php the_field('quote_author'); ?></p>
						<p class="quotetext">" <?php the_field('quote_text'); ?> "</p>

					<?php } else { ?>

					<img src="<?php echo site_url(); ?>/wp-content/uploads/2019/08/LP_illo_heron.jpg" class="illo-quote lp-phone-hide" alt="">

						<?php
					}
					 ?>
					 
				</div>
			</div>
		</section>

		<section class="activity-section lp-section ast-container">
			<h2><?php the_field('activity_heading'); ?></h2>

			<?php if( have_rows('activity') ): ?>
			<div class="thingy"></div>

			<div class="activity-wrapper ast-row">

				<?php while( have_rows('activity') ): the_row(); 

					$image = get_sub_field('image');
					$title = get_sub_field('title');
					$description = get_sub_field('description');
					$button_text = get_sub_field('button_text');
					$button_link = get_sub_field('button_link');
					$new_tab = get_sub_field('new_tab');

				?>

					<div class="ast-col-lg-6 ast-col-md-6 ast-col-sm-12 ast-col-xs-12">

							<img src="<?php echo $image; ?>" alt="<?php echo $image['alt'] ?>" />

					    <h3 class="h4"><?php echo $title; ?></h3>

					    <p><?php echo $description; ?></p>

					    <a href="<?php echo $button_link; ?>" <?php if( $new_tab ): ?> target="_blank"  rel="nofollow"<?php endif; ?>class="ast-custom-button-link"><button class="ast-custom-button lp-button"><?php echo $button_text; ?></button></a>

					</div>

				<?php endwhile; ?>

				</div>

			<?php endif; ?>
		</section>

		<?php if ( have_rows('downloads') ): ?>

			<section class="lp-downloads-section lp-section ast-container">
				<div class="ast-row">
					<div class="ast-col-lg-8 ast-col-md-8 ast-col-sm-10 ast-col-xs-12">

						<p class="h4">Links and Downloads</p>

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
				<div class=" lp-phone-hide lp-illustration lp-illo-small">
						<img src="<?php echo site_url(); ?>/wp-content/uploads/2019/08/LP_illo_poppy.jpg" alt="">
				</div>
			</section>

		<?php endif; ?>


		<!-- blog section -->
		<section class="lp_block6_cta_3up blog-section lp-section lp-bg-grey ">
			<div class="ast-container">
				<p class="h4"><?php the_field('blog_section_name'); ?></p>
				<h2 class="h1"><?php the_field('blog_section_heading'); ?></h2>
				<p class="copy-half-width"><?php the_field('blog_section_subheading'); ?></p>
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

		<?php 

				$lp_big2 = get_field('big_image_2');

				if (!$lp_big2):

					$lp_big2 = site_url() . '/wp-content/uploads/2019/07/CSP-Bohemia-03.jpg';

				endif;

		 ?>

		<section class="lp-bleed-section" style="background-image: url(<?php echo $lp_big2; ?>)"></section>


					
		<?php get_template_part( 'template-parts/newsletter-signup' ); ?>  



	</div><!-- #primary -->

<?php get_footer(); ?>