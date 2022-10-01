<?php 
$about_title = get_field('about_title');
$about_text = get_field('about_text');
$about_img = get_field('about_img');
?>



<section class="two-col" id="about-info">
  <div class="two-col__info">
    <div class="two-col__info">
        <div class="two-col__container">
            <?php get_template_part('template-parts/card' , '', [
                'card_class'        => 'card--color-lite card--no-icon', 
                'card_body_class'   => 'card__body--alt',
                'card_title'        => $about_title,
                'card_copy'         => $about_text,
            ]); ?>
        </div>
      </div>
    </div>

  <div class="two-col__img bg-img d-none d-lg-block"
  style="background-image: url('<?php echo esc_attr( $about_img ); ?>);" >
    </div>
</section>
