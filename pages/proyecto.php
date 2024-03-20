<?php 
  $postData = get_fields();
  $resumen = $postData['post_resumen_del_proyecto'];
  $antesDespues = $postData['post_antes_despues'];
  $galeria = $postData['post_imagenes_del_proyecto'];
  $tipografias = $postData['post_tipografias'];
  $colores = $postData['post_colores'];
?>

<main id="project">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12" data-aos="fade" data-aos-duration="1000">
        <img 
          src="<?php echo esc_url($postData['post_imagen_principal']['url']);?>" 
          class="post-img" 
          alt="<?php echo esc_url($postData['post_imagen_principal']['alt']);?>"
        >
      </div>
      <div class="col-12">
        <div 
          class="main-banner" 
          style="background:<?php echo ($resumen['color_de_fondo']);?>"
        >
          <h1 style="color:<?php echo ($resumen['color_tipografia']);?>"  data-aos="fade-down" data-aos-duration="1000">
            <?php echo ($resumen['nombre_del_proyecto']);?>
          </h1>
          <div style="color:<?php echo ($resumen['color_tipografia'])?> !important;" data-aos="fade-down" data-aos-duration="700" data-aos-delay="300">
            <?php echo ($resumen['descripcion']);?>
          </div>
          <img 
            src="<?php echo esc_url($resumen['imagen']['url']);?>" 
            class="banner-img" data-aos="fade" data-aos-duration="700"
            alt="<?php echo esc_url($resumen['imagen']['alt']);?>"
          >
        </div>
      </div>
      <?php foreach($antesDespues as $key=>$item): ?>
        <div class="col-12 col-lg-6 d-flex justify-content-center" data-aos="fade-down" data-aos-duration="700" data-aos-delay="<?php echo 300*$key?>">
          <div class="antes-despues-item">
            <?php if ($item['titulo']) : ?>
              <p><?php echo ($item['titulo']);?></p>
            <?php endif; ?>
            <img 
              src="<?php echo esc_url($item['imagen']['url']);?>"  
              alt="<?php echo esc_url($item['imagen']['alt']);?>"
            >
          </div>
        </div>
      <?php endforeach; ?>
      <div class="col-12 col-lg-11 offset-lg-1 tipografias-container">
        <div class="row">
          <div class="col-12 col-lg-4" data-aos="fade" data-aos-duration="700">
            <p class="title">Typography</p>
            <div class="description">
              <?php echo ($postData['post_descripcion_tipografia']);?>
            </div>
          </div>
          <div class="col-12 col-lg-6 offset-lg-2">
            <div class="tipografias">
              <div class="row">
                <?php foreach($tipografias as $key=>$item): ?>
                  <div class="col-6" data-aos="flip-right" data-aos-duration="700" data-aos-delay="<?php echo 300*$key?>">
                    <div class="tipografia">
                      <p class="name"><?php echo ($item['nombre_de_la_tipografia']);?></p> 
                      <p class="variable"><?php echo ($item['variable_visual_de_la_tipografia']);?></p> 
                      <img 
                        src="<?php echo esc_url($item['imagen']['url']);?>"  
                        alt="<?php echo esc_url($item['imagen']['alt']);?>"
                      >
                      <p class="type"><?php echo ($item['rol_de_la_tipografia']);?></p>
                    </div>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 p-relative">
        <div class="row">
          <div class="col-12 col-lg-5 offset-lg-1">
            <?php if ($postData['post_illustracion']) : ?>
              <img 
                src="<?php echo esc_url($postData['post_illustracion']['url']);?>" 
                class="color-ilustracion" data-aos="fade" data-aos-duration="1000"
                alt="<?php echo esc_url($postData['post_illustracion']['alt']);?>"
              >
            <?php endif; ?>
            <div class="color-container">
              <p class="title">Color</p>
              <div class="colores">
                <?php foreach($colores as $key=>$color): ?>
                  <div class="color" data-aos="fade-down" data-aos-duration="700" data-aos-delay="<?php echo 200*$key?>">
                    <div class="color-block" style="background:<?php echo ($color['color']);?>"></div>
                    <p class="hexa"><?php echo ($color['codigo_hexadecimal']);?></p>
                    <p class="rgb">RGB <?php echo ($color['codigo_rgb']);?></p>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 galeria">
        <img 
          src="<?php echo esc_url($galeria[0]['imagen']['url']);?>" 
          class="post-img" data-aos="fade-up" data-aos-duration="1000"
          alt="<?php echo esc_url($galeria[0]['imagen']['alt']);?>"
        >
      </div>
      <div class="col-12 col-lg-6" style="padding:0px 7px 0px 12px">
        <img 
          src="<?php echo esc_url($galeria[1]['imagen']['url']);?>" 
          class="galeria-img" data-aos="fade-left" data-aos-duration="1000"
          alt="<?php echo esc_url($galeria[1]['imagen']['alt']);?>"
        >
        <img 
          src="<?php echo esc_url($galeria[3]['imagen']['url']);?>" 
          class="galeria-img" data-aos="fade-down" data-aos-duration="1000"
          alt="<?php echo esc_url($galeria[3]['imagen']['alt']);?>"
        >
      </div>
      <div class="col-12 col-lg-6" style="padding:0px 12px 0px 7px">
        <img 
          src="<?php echo esc_url($galeria[2]['imagen']['url']);?>" 
          class="galeria-img" data-aos="fade-down" data-aos-duration="1000"
          alt="<?php echo esc_url($galeria[2]['imagen']['alt']);?>"
        >
        <img 
          src="<?php echo esc_url($galeria[4]['imagen']['url']);?>" 
          class="galeria-img" data-aos="fade-right" data-aos-duration="1000"
          alt="<?php echo esc_url($galeria[4]['imagen']['alt']);?>"
        >
      </div>
      <div class="col-10 col-lg-3 img-final">
        <?php if ($postData['post_imagen_final']) : ?>
          <img 
            src="<?php echo esc_url($postData['post_imagen_final']['url']);?>" 
            class="post-img" data-aos="fade-up" data-aos-duration="1000"
            alt="<?php echo esc_url($postData['post_imagen_final']['alt']);?>"
          >
        <?php endif; ?>
        <p data-aos="flip-down" data-aos-duration="7000">Thank you for dropping by</p>
      </div>
    </div>
  </div>
</main>