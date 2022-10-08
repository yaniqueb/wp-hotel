<?php 
$multi_col_array  = $args['multi_col_array'] ? $args['multi_col_array'] : '';
$card_class       = ($args['card_class']) ? $args['card_class'] : '';
?>




<section class="col-multi" id="features">
  
    <?php 
      if($multi_col_array):
        $i = 0;
        foreach($multi_col_array as $multi_col):

          $multi_col_icon = $multi_col['icon'];
          $multi_col_title = $multi_col['title'];
          $multi_col_copy = $multi_col['copy'];
    ?>    
    <div class="col-multi__card"> 
   
    <?php get_template_part('template-parts/card', '', [
            'card_class'        => $card_class[$i] . ' card--icon',
            'card_body_class'   => 'card__body--alt',
            'card_icon_class'   => $multi_col_icon, 
            'card_title'        => $multi_col_title,
            'card_copy'         => $multi_col_copy,
            'card_btn'          => '',
            'card_btn_class'    => '',
          ]);
    ?>

    </div>
    <?php $i++; ?>
<?php endforeach; ?>
<?php endif; ?>
</section>