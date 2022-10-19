<?php 
$card_class       = ($args['card_class']) ? $args['card_class'] : '';
$card_body_class  = ($args['card_body_class']) ? $args['card_body_class'] : '';
$card_btn_class   = ($args['card_btn_class']) ? $args['card_btn_class'] : '';
$card_icon_class  = ($args['card_icon_class']) ? $args['card_icon_class'] : '';
$card_title       = ($args['card_title']) ? $args['card_title'] : '';
$card_copy        = ($args['card_copy']) ? $args['card_copy'] : '';
$card_btn         = ($args['card_btn']) ? $args['card_btn'] : '';
?>

<div class="card h-100 <?php echo esc_attr( $card_class ); ?>">
  <div class="card__head">
    <?php if($card_icon_class): ?>
      <div class="card__icon">
        <i class="<?php echo $card_icon_class; ?>"></i>
      </div>
      <h3 class="card__title"><?php echo $card_title; ?></h3> 
    <?php else:?>
      <h2 class="card__title">
        <?php echo $card_title; ?>
      </h2>
    <?php endif; ?>
  </div>
  <div class="card__body <?php echo esc_attr( $card_body_class ); ?>">
      <p class="card__copy"><?php echo esc_attr( $card_copy ); ?></p>
    <?php 
      if ($card_btn):
        $card_btn_url = $card_btn['url'];
        $card_btn_title = $card_btn['title'];
        $card_btn_target = $card_btn['target'] ? $card_btn['target'] : '_self';
    ?>
      <a href="<?php echo esc_url( $card_btn_url ); ?>" 
      class="btn <?php echo esc_attr( $card_btn_class ); ?>" 
      target="<?php echo esc_attr( $card_btn_target ); ?>">
      <?php echo $card_btn_title; ?></a>
    <?php endif; ?>
  </div>  
</div>
<?php