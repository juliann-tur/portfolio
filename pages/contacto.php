<?php 
  $description = get_field('descripcion_contacto');
?> 

<main id="contact">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-5" data-aos="fade-down" data-aos-duration="1000" >
        <span class="description">
          <?php echo $description?>
        </span>
      </div>
      <div class="col-12 col-lg-6 offset-lg-1" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="200">
        <?php echo do_shortcode('[contact-form-7 id="cda1622" title="Formulario de contacto"]') ?>
      </div>
    </div>
  </div>
</main>