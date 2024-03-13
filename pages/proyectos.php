<?php 
  $carrusel = get_field('carrusel_proyectos');
  $posts = get_posts(
    array(
      'post_type' => 'post',
    )
  );
?>

<main id="projects">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div id="carousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <?php foreach($carrusel as $key=>$item): ?>
              <div class="carousel-item <?php if ($key == "0"): ?> active <?php endif; ?>" data-bs-interval="5000">
                <img src="<?php echo esc_url($item['imagen_principal']['url'])?>" class="d-block w-100" alt="...">
              </div>
            <?php endforeach; ?>
          </div>
          <div class="carousel-indicators">
            <?php foreach($carrusel as $key=>$item): ?>
              <button type="button" data-bs-target="#carousel" data-bs-slide-to="<?php echo $key ?>" 
              class="<?php if ($key == "0"): ?> active <?php endif; ?>" 
              aria-current="<?php if ($key == "0"): ?> true <?php endif; ?>"
              aria-label="Slide 1"></button>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-12 col-lg-10">
        <div class="row categories-container">
          <?php foreach($posts as $key=>$item): ?>
            <div class="col-6 col-lg-4">
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
</main>