<?php
  $image = get_field('animacion_home');
?>

<main id="home">
  <img 
    src="<?php echo esc_url($image['url']);?>" 
    class="home-animation" 
    alt="<?php echo esc_url($image['alt'])?>"
  >
</main>