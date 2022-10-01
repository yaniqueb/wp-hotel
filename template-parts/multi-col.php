<section class="multi-col" id="features">
    <div class="multi-col__left">
      <?php get_template_part('template-parts/card', '', [
        'card_class'        => 'card--color-dark card--icon card--home-page',
        'card_icon_class'   => $multi_col_icon_1, 
        'card_body_class'   => 'card__body--alt',
        'card_title'        => $multi_col_title_1,
        'card_copy'         => $multi_col_copy_1,
      ]); ?> 
    </div>

    <div class="multi-col__mid">
    <?php get_template_part('template-parts/card', '', [
        'card_class'        => 'card--color-dark card--icon card--home-page',
        'card_icon_class'   => $multi_col_icon_2, 
        'card_body_class'   => 'card__body--alt',
        'card_title'        => $multi_col_title_2,
        'card_copy'         => $multi_col_copy_2,  
      ]); ?>  
    </div>

    <div class="multi-col__right">
    <?php get_template_part('template-parts/card', '', [
        'card_class'        => 'card--color-dark card--icon card--home-page',
        'card_icon_class'   => $multi_col_icon_3, 
        'card_body_class'   => 'card__body--alt',
        'card_title'        => $multi_col_title_3,
        'card_copy'         => $multi_col_copy_3,  
      ]); ?>
		</div>	
</section>