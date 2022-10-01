<?php 

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( is_front_page() ) : ?>
	<?php get_template_part('template-parts/front-page/hero'); ?>
<?php endif; ?>

<div class="wrapper py-0" id="index-wrapper">

	<div class="<?php echo esc_attr( $container ); ?> px-0" id="content" tabindex="-1">

		<div class="row">

			<main class="site-main" id="main">

        <?php get_template_part('template-parts/front-page/col', 'two'); ?>

<!-- multi col section-->	
<?php 
// get acf fields 
$multi_col_copy_1 = get_field('multi_col_text_1');
$multi_col_copy_2 = get_field('multi_col_text_2');
$multi_col_copy_3 = get_field('multi_col_text_3');
$multi_col_copy_4 = get_field('multi_col_text_4');
$multi_col_icon_1 = get_field('multi_col_icon');
$multi_col_icon_2 = get_field('multi_col_icon_2');
$multi_col_icon_3 = get_field('multi_col_icon_3');
$multi_col_icon_4 = get_field('multi_col_icon_4');
$multi_col_title_1 = get_field('multi_col_title_1');
$multi_col_title_2 = get_field('multi_col_title_2');
$multi_col_title_3 = get_field('multi_col_title_3');
$multi_col_title_4 = get_field('multi_col_title_4');
?>

<section class="multi-col" id="features">
    <div class="multi-col__left">
      <?php get_template_part('template-parts/card', '', [
        'card_class'        => 'card--color-lite card--icon card--home-page',
        'card_icon_class'   => $multi_col_icon_1, 
        'card_body_class'   => 'card__body--alt',
        'card_title'        => $multi_col_title_1,
        'card_copy'         => $multi_col_copy_1,
      ]); ?> 
    </div>

    <div class="multi-col__mid">
    <?php get_template_part('template-parts/card', '', [
        'card_class'        => 'card--color-base card--icon card--home-page',
        'card_icon_class'   => $multi_col_icon_2, 
        'card_body_class'   => 'card__body--alt',
        'card_title'        => $multi_col_title_2,
        'card_copy'         => $multi_col_copy_2,  
      ]); ?>  
    </div>

    <div class="multi-col__right">
    <?php get_template_part('template-parts/card', '', [
        'card_class'        => 'card--color-lite card--icon card--home-page',
        'card_icon_class'   => $multi_col_icon_3, 
        'card_body_class'   => 'card__body--alt',
        'card_title'        => $multi_col_title_3,
        'card_copy'         => $multi_col_copy_3,  
      ]); ?>
		</div>	

		<div class="multi-col__mid">
    <?php get_template_part('template-parts/card', '', [
        'card_class'        => 'card--color-base card--icon card--home-page',
        'card_icon_class'   => $multi_col_icon_4, 
        'card_body_class'   => 'card__body--alt',
        'card_title'        => $multi_col_title_4,
        'card_copy'         => $multi_col_copy_4,
      ]); ?>  
    </div>
</section>

<!-- end of multi col section -->

  
			</main><!-- #main -->

			<!-- The pagination component -->
			<?php understrap_pagination(); ?>

			

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #index-wrapper -->


<?php
get_footer();