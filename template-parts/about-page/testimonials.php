
<?php 
$review_title = get_field('title');
$review_text = get_field('about_text');
$bg_img = get_field('bg_img');
?>



<section class="testimonials">
  <div id= "testimonial" class="testimonial-section";>
    <div class="container container--test"> 
      <div class="testimonial__content">
        <h2 class="testimonial__title"><?php echo $review_title; ?></h2>
        <div class="slides">
        <?php
				while ( have_posts() ) {
					the_post();
					get_template_part( 'template-parts/about-page/single', 'testimonial' );
				}
				?>
        </div>
      </div>
    </div>
  </div>
</section>