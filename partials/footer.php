<footer>
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-2" data-aos="fade-right" data-aos-duration="800">
        <div class="brand-container">
          <h1>Julian Tur</h1>
          <p>Graphic and UI Designer</p>
        </div>
      </div>
      <div class="col-6 col-lg-2 offset-lg-1" data-aos="fade-right" data-aos-duration="800" data-aos-delay="300">
        <p class="title" >Navigation</p>
        <?php
          wp_nav_menu(array(
          'menu' =>'footer-navigation',
          'container' => '',
          'items_wrap' =>'<ul class="nav-items">%3$s</ul>'
          ));
        ?>
      </div>
      <div class="col-6 col-lg-2" data-aos="fade-right" data-aos-duration="800" data-aos-delay="500">
      <p class="title">Projects</p>
        <?php
          wp_nav_menu(array(
          'menu' =>'footer-projects',
          'container' => '',
          'items_wrap' =>'<ul class="nav-items">%3$s</ul>'
          ));
        ?>
      </div>
      <div class="col-12 col-lg-2 offset-lg-2"data-aos="fade-right" data-aos-duration="800" data-aos-delay="700">
        <p class="title">Social</p>
        <?php
          wp_nav_menu(array(
          'menu' =>'footer-social',
          'container' => '',
          'items_wrap' =>'<ul class="nav-items social">%3$s</ul>'
          ));
        ?>
      </div> 
    </div>
  </div>
  
</footer>