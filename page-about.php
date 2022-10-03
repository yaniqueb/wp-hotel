<?php 

get_header();

$container = get_theme_mod( 'understrap_container_type' );

// acf fields
$two_col_copy = get_field('two_col_card_copy');
$two_col_title = get_field('two_col_card_title');
$two_col_btn = get_field('two_col_card_btn');
$two_col_img = get_field('two_col_img');
$two_col_align = get_field('two_col_align');


$testamonials_title = get_field('title');
$testamonials_bg_img = get_field('bg_img');
?>


<div class="wrapper py-0" id="index-wrapper">

	<div class="<?php echo esc_attr( $container ); ?> px-0" id="content" tabindex="-1">

		<div class="row">
			<main class="site-main" id="main">
				<?php
					get_template_part('template-parts/col', 'two', 
						[
							'title'             => $two_col_title,
							'copy'              => $two_col_copy,
							'img'               => $two_col_img,
							'img_class'					=> 'd-none d-lg-block',
							'align'             => $two_col_align,
							'id'                => 'about-info',
							'card_class'        => 'card--color-lite card--no-icon', 
							'card_body_class'   => 'card__body--alt',
						]); 
				?>
				<section class="testimonials">
					<div id= "testimonial" class="testimonial-section" style="background-image: url('<?php echo esc_attr( $testamonials_bg_img ); ?>)";>
						<div class="container container--test"> 
							<div class="testimonial__content">
								<h2 class="testimonial__title"><?php echo $testamonials_title; ?></h2>
								
								<?php
								//The Query
								$loop = new WP_Query( [
									'post_type' => 'testimonial'
								]);
								
								while ( $loop->have_posts() ) {
									$loop->the_post();
									get_template_part( 'template-parts/testimonial' );
								}
								wp_reset_postdata();
								?>
								
							</div>
						</div>
					</div>
				</section>
			</main><!-- #main -->

			<!-- The pagination component -->
			<?php understrap_pagination(); ?>

			

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #index-wrapper -->


<?php
get_footer();