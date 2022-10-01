<?php 
$text = get_field('card_copy');
$title = get_field('2_column_title');
$btn = get_field('card_btn');
$col_img = get_field('2_column_img');
?>


<section class="two-col" id="home-info">
    <div class="two-col__img bg-img" style="background-image: url('<?php echo esc_attr( $col_img ); ?>);" >
    </div>

    <div class="two-col__info">
        <div class="two-col__container">
            <?php get_template_part('template-parts/card' , '', [
                'card_class'        => 'card--color-dark card--no-icon', 
                'card_body_class'   => 'card__body--alt',
                'card_btn'          => $btn,
                'card_btn_class'    => 'btn--lite',
                'card_title'        => $title,
                'card_copy'         => $text,
            ]); ?>
        </div>
    </div>
  </section>