<?php
// create place for acf fields for card template
$card_class         = $args['card_class'] ? $args['card_class'] : ''; 
$card_body_class    = $args['card_body_class'] ? $args['card_body_class'] : '';
$copy               = $args['copy'] ? $args['copy'] :'' ;
$title              = $args['title'] ? $args['title'] :'';
$btn                = $args['btn'] ? $args['btn'] :'';
$btn_class          = $args['card_btn_class'] ? $args['card_btn_class'] :'';
// create place for fields for col-two section
$col_img            = $args['img'] ? $args['img'] :'';
$col_img_class      = ($args['img_class']) ? $args['img_class'] : ' ';
$col_section_class  = $args['align'] ? $args['align'] :'';
$col_section_id     = $args['id'] ? $args['id'] : '';

?>


<section class="two-col d-flex flex-column <?php echo esc_attr($col_section_class); ?>" id="<?php echo esc_attr($col_section_id); ?>">
    <div class="two-col__img bg-img <?php echo esc_attr($col_img_class ); ?>" style="background-image: url('<?php echo esc_attr( $col_img ); ?>);" >
    </div>

    <div class="two-col__info">
        <div class="two-col__container">
            <?php get_template_part('template-parts/card' , '', [
                'card_class'        => $card_class, 
                'card_body_class'   => $card_body_class,
                'card_btn'          => $btn,
                'card_btn_class'    => $btn_class,
                'card_title'        => $title,
                'card_copy'         => $copy,
                'card_icon_class'   => '',
            ]); ?>
        </div>
    </div>
  </section>