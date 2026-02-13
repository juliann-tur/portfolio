<?php 
  $postData = get_fields();
  $galeriaDesktop = $postData['post_imagenes_del_proyecto_desktop'];
  $galeriaMobile = $postData['post_imagenes_del_proyecto_mobile'];
  $galeria = wp_is_mobile() ? $galeriaMobile : $galeriaDesktop;
?>

<main id="project">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12" data-aos="fade" data-aos-duration="1000">
        <?php foreach($galeria as $key=>$imagen): ?>
          <img 
            src="<?php echo esc_url($imagen['imagen']['url']);?>" 
            class="post-img" data-aos="fade-up" data-aos-duration="1000"
            alt="<?php echo esc_url($imagen['imagen']['alt']);?>"
          >
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</main>