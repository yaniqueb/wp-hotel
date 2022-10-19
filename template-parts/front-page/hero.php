<?php 
$title = get_field('hero_title');
$subtitle = get_field('sub_title');
$cta_btn = get_field('cta_button');
$hero_img = get_field('hero_img');
$copy_position = get_field('copy_position');

$copy_position_style = ''; 

if( 'top' == $copy_position) {
  $copy_position_style = '3.5rem';
} else if( 'mid' == $copy_position) {
  $copy_position_style = '10rem';
} else if('bottom' == $copy_position) {
  $copy_position_style = '19.5rem';
}

?>

<div id= "hero" class="hero" style="background-image: url('<?php echo esc_attr($hero_img ); ?>);">
  <div class="container-fluid"> 
    <div class="row">
      <div class="col-md-8 mx-auto position-relative">
        <div class="hero__content col-12" style="top: <?php echo esc_attr($copy_position_style ); ?>">
          <h1 class="hero__title pb-2"><?php echo $title; ?></h1>
          <h5 class="hero__copy pb-3"><?php echo $subtitle; ?></h5>
          <?php if($cta_btn):
            $cta_btn_url = $cta_btn['url'];
            $cta_btn_title = $cta_btn['title'];
            $cta_btn_target = $cta_btn['target'] ? $cta_btn['target'] : '_self';
          ?>
            <a href="<?php echo esc_url( $cta_btn_url ); ?>" class="btn btn--dark" target="<?php echo esc_attr( $cta_btn_target ); ?>"><?php echo esc_html( $cta_btn_title ); ?></a>
          <?php endif; ?>
        </div> <!-- end hero__content -->
      </div> 
    </div> <!-- end row -->
    </div> <!-- end container-fluid -->
  </div> <!-- end hero  -->
  <?php