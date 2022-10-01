
<?php 
$profile_pic = get_field('profile_pic');
$comment = get_field('comment');
?>

<?php 
  while(have_posts()) {
    the_post(); ?>

  <div class="slides">
    <div class="card-testimonial card--color-base slider">
      <?php echo wp_get_attachment_image($profile_pic, "full", false, ["class" => "test-img"]); ?>
      <p><?php echo $comment; ?></p>
    </div>
  </div>

<?php }
    ?>
    
   

  
    
