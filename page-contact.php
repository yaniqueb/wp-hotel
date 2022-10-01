<?php 

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper py-0" id="index-wrapper">

	<div class="<?php echo esc_attr( $container ); ?> px-0" id="content" tabindex="-1">

		<div class="row">

			<main class="site-main" id="main">

        <?php get_template_part('template-parts/contact-page/contact'); ?>
        <?php get_template_part('template-parts/multi-col'); ?>
  
			</main><!-- #main -->

			<!-- The pagination component -->
			<?php understrap_pagination(); ?>
			 
		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #index-wrapper -->


<?php
get_footer();