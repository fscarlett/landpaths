<?php
/**
 * Template Name: T5
 *
 * @package Astra
 * @since 1.0.0
 */

get_header(); ?>

	<div id="primary" <?php astra_primary_class(); ?>>

		<?php 

				$lp_hero = get_field('hero_image');

				if (!$lp_hero):

					$lp_hero = site_url() . '/wp-content/uploads/2019/08/trek-sonoma-hero.jpg';

				endif;

		 ?>

		<section class="lp-bleed-section" style="background-image: url(<?php echo $lp_hero; ?>)"></section>

		<section class="lp-section blog-loop-section">
			<div class="ast-container">
				<div class="ast-row">
					<div class="ast-col-lg-8 ast-col-md-8 ast-col-sm-12 ast-col-xs-12">
						<!-- <p class="h4"><?php the_field('subtitle'); ?></p> -->
						<p class="h4">Stories + News</p>
						<h2 class="h1">Find Out What's New</h2>
						<p><?php the_field('heading_area_copy'); ?></p>

					</div>

					<div class="ast-col-lg-4 ast-col-md-4 ast-col-sm-12 ast-col-xs-12">

						<!-- Search  -->
					</div>

					
				</div>
				

				<div class="ast-row">
					<div class="lp-blog-masonry-wrapper ast-col-lg-12 ast-col-md-12 ast-col-sm-12 ast-col-xs-12">

						<?php 

						$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

						$lp_blog_args = array(
				        'order'           => 'DESC',
				        'posts_per_page'  => '12',
				        'category_name' 	=> 'blog',
				        'paged'						=> $paged
				        );

				      $lp_blog = new WP_Query( $lp_blog_args );


				      if ( $lp_blog->have_posts() ) {

				        while ( $lp_blog->have_posts() ) {

				          $lp_blog->the_post();

				          ?>

				          <div class="lp-masonry-card"> <!--  ast-col-lg-4 ast-col-md-4 ast-col-sm-12 ast-col-xs-12 -->
										<div class="lp-blog-img-wrapper">
											<?php the_post_thumbnail('medium'); ?>
										</div>
										<div class="lp-blog-copy-card">
											<h3 class="h4 blog-card-title"><?php the_title(); ?></h3> 
											<p class="lp-post-date"><?php  $post_date = get_the_date( 'F j, Y' ); echo $post_date; ?></p>
											<?php the_excerpt(''); ?>
											<p><?php the_tags(); ?></p>
											<a href="<?php the_permalink(); ?>" class="ast-custom-button-link"><button class="ast-custom-button lp-button lp-blog-btn">Read Article</button></a>
										</div>
									</div>

				        <?php
				        } // endwhile 

				        if (function_exists("lp_pagination")) {
					          lp_pagination($lp_blog->max_num_pages);
					      } 

				      } else {
				        echo '<p>No posts have been found.</p>';
				      }; 

				      wp_reset_postdata();



						 ?>
				
						<?php // astra_primary_content_top(); ?>

						<?php // astra_content_page_loop(); ?>

						<?php // astra_primary_content_bottom(); ?>

					</div>
					
				</div>
			</div>
		</section>





		




					
		<?php get_template_part( 'template-parts/donate' ); ?>  



	</div><!-- #primary -->

<?php get_footer(); ?>