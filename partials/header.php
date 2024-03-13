
<?php
    if ( is_page('contacto') ) {
      $name = "Contact";
    } elseif ( is_page('about-me') ){
      $name = "About me";
    } elseif ( is_page('home') ){
      $name = "Gallery";
    } else {
      $name = "Gallery";
    }
  ?>

<header>
  <nav class="navbar navbar-expand-lg">
    <div class="container p-relative">
      <?php if ($name): ?>
      <p class="brand"><?php echo $name ?></p>
      <?php endif; ?>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <div class="navbar-toggler-icon-custom"></div>
        <div class="navbar-toggler-icon-custom"></div>
        <div class="navbar-toggler-icon-custom"></div>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <?php
            wp_nav_menu(array(
            'menu' =>'header',
            'container' => '',
            'items_wrap' =>'<ul class="navbar-nav flex-grow-1 pe-3">%3$s</ul>'
            ));
          ?>
        </div>
      </div>
    </div>
  </nav>
</header>

