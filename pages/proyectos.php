<?php 
  $carrusel = get_field('carrusel_proyectos');
  $imageIntro = get_field('animacion_intro');
  $posts = get_posts(
    array(
      'post_type' => 'post',
      'posts_per_page'=> -1,
      'nopaging' => true
    )
  );
?>

<main id="projects">
  <div class="container-fluid">
    <div class="row" data-aos="fade" data-aos-duration="1000">
      <div class="col-12 px-0">
        <div id="carousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <?php foreach($carrusel as $key=>$item): ?>
              <div class="carousel-item <?php if ($key == "0"): ?> active <?php endif; ?>" data-bs-interval="5000">
                <a href="<?php echo esc_url($item['proyecto_relacionado'])?>">
                  <?php if ( wp_is_mobile() ) : ?>
                    <img src="<?php echo esc_url($item['imagen_principal_mobile']['url'])?>" class="d-block w-100" alt="...">
                  <?php else : ?>
                    <img src="<?php echo esc_url($item['imagen_principal_desktop']['url'])?>" class="d-block w-100" alt="...">
                  <?php endif; ?>
                </a>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12">
        <p class="projects-title">Projects</p>
        <div class="row categories-container">
          <?php foreach($posts as $key=>$item): ?>
            <div class="col-12 col-lg-4 mb-4" data-aos="fade-down" data-aos-delay="<?php echo 200*$key ?>" data-aos-duration="1000">
              <?php 
                $image = get_the_post_thumbnail_url( $item );
                $title = get_the_title($item);
                $url = get_post_permalink($item);
              ?>
              <a href="<?php echo $url ?>" class="category">
                <img 
                  src="<?php echo $image ?>" 
                  class="category-img" 
                  alt="<?php echo $title ?>"
                >
              </a>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
  <div id="introContainer">
    <img 
      src="<?php echo esc_url($imageIntro['url']);?>" 
      alt="<?php echo esc_url($imageIntro['alt'])?>"
    >
  </div>
</main>