<?php 

get_header();

$container = get_theme_mod( 'understrap_container_type' );

// get acf fields for col-two section
$two_col_copy   = get_field('two_col_card_copy');
$two_col_title  = get_field('two_col_card_title');
$two_col_btn    = get_field('two_col_card_btn');
$two_col_img    = get_field('two_col_img');
$two_col_align  = get_field('two_col_align');

// get acf fields for col-multi section
$multi_col_copy_1   = get_field('multi_col_text_1');
$multi_col_copy_2   = get_field('multi_col_text_2');
$multi_col_copy_3   = get_field('multi_col_text_3');
$multi_col_copy_4   = get_field('multi_col_text_4');
$multi_col_icon_1   = get_field('multi_col_icon_1');
$multi_col_icon_2   = get_field('multi_col_icon_2');
$multi_col_icon_3   = get_field('multi_col_icon_3');
$multi_col_icon_4   = get_field('multi_col_icon_4');
$multi_col_title_1  = get_field('multi_col_title_1');
$multi_col_title_2  = get_field('multi_col_title_2');
$multi_col_title_3  = get_field('multi_col_title_3');
$multi_col_title_4  = get_field('multi_col_title_4');

$multi_col_acf_array = [];
// looping to add col-multi acf values into an array 
for ($x = 1; $x < 5; $x++) {
  $multi_col_acf_array[$x]['icon']  =  ${"multi_col_icon_" . $x};
  $multi_col_acf_array[$x]['title'] =  ${"multi_col_title_" . $x};
  $multi_col_acf_array[$x]['copy']  =  ${"multi_col_copy_" . $x};  
}
?>

<?php if ( is_front_page() ) : ?>
	<?php get_template_part('template-parts/front-page/hero'); ?>
<?php endif; ?>

<div class="wrapper py-0" id="index-wrapper">

	<div class="<?php echo esc_attr( $container ); ?> px-0" id="content" tabindex="-1">

		<div class="row">

			<main class="site-main" id="main">

      <!-- begin col-two section-->	
      <?php 
      // calls in col-two template part
      get_template_part('template-parts/col', 'two', [
        'title'             => $two_col_title,
        'copy'              => $two_col_copy,
        'btn'               => $two_col_btn,
        'img'               => $two_col_img,
        'img_class'         => '',
        'align'             => $two_col_align,
        'id'                => 'home-info',
        'card_class'        => 'card--color-dark card--no-icon', 
        'card_body_class'   => 'card__body--alt',
        'card_btn_class'    => 'btn--lite',

      ]); ?>
      <!-- end of col-two section -->

      <!-- begin multi col section-->	
      <?php 
        // calls in col-multi template part 
        get_template_part('template-parts/col', 'multi', [
            'multi_col_array'   => $multi_col_acf_array, 
            'card_class'        => [
            'card--color-lite',
            'card--color-base',
            'card--color-lite',
            'card--color-base',  
          ]
        ]); ?>	
<!-- end of multi col section -->

  
			</main><!-- #main -->

			<!-- The pagination component -->
			<?php understrap_pagination(); ?>

			

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #index-wrapper -->


<?php
get_footer();