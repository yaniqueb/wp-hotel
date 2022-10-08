<?php 
get_header();

$container = get_theme_mod( 'understrap_container_type' );


// get acf fields for col-multi section

$multi_col_icon_1 = get_field('multi_col_icon_1');
$multi_col_icon_2 = get_field('multi_col_icon_2');
$multi_col_icon_3 = get_field('multi_col_icon_3');
$multi_col_icon_4 = get_field('multi_col_icon_4');
$multi_col_title_1 = get_field('multi_col_title_1');
$multi_col_title_2 = get_field('multi_col_title_2');
$multi_col_title_3 = get_field('multi_col_title_3');
$multi_col_title_4 = get_field('multi_col_title_4');
$multi_col_copy_1 = get_field('multi_col_text_1');
$multi_col_copy_2 = get_field('multi_col_text_2');
$multi_col_copy_3 = get_field('multi_col_text_3');
$multi_col_copy_4 = get_field('multi_col_text_4');


$multi_col_acf_array = [];
// looping to add col-multi acf values into an array 
for ($x = 1; $x < 5; $x++) {
  
  $multi_col_acf_array[$x]['icon'] =  ${multi_col_icon_ . $x};
  $multi_col_acf_array[$x]['title'] =  ${multi_col_title_ . $x};
  $multi_col_acf_array[$x]['copy']  =  ${multi_col_copy_ . $x};
  
}

?>

<div class="wrapper py-0" id="index-wrapper">

	<div class="<?php echo esc_attr( $container ); ?> px-0" id="content" tabindex="-1">

		<div class="row">

			<main class="site-main" id="main">

      <!-- contact header and form section -->
      <section class="contact-form py-3">
        <h2><span class="text-primary">Contact</span> Us</h2>
        <p> Please fill out the form below to contact us.</p>  
      
        <form class= "form-section py-3" action="process.php">
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Your name..">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="text" id="Email" name="email" placeholder="Your email..">
          </div>
          <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" id="message"></textarea>  
          </div>
          <button type="submit" class="btn btn--dark">Submit</button>
        </form>
      
      </section>

      <?php 
        // calls in col-multi template part 
        get_template_part('template-parts/col', 'multi', [
          'multi_col_array'   => $multi_col_acf_array, 
          'card_class'        => [
            'card--color-dark',
            'card--color-dark',
            'card--color-dark',
            'card--color-dark',
          ], 
        ]);
      
      ?>	

  
			</main><!-- #main -->

			<!-- The pagination component -->
			<?php understrap_pagination(); ?>
			 
		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #index-wrapper -->


<?php
get_footer();