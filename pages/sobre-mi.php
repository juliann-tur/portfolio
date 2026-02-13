<?php
  $image = get_field('au_imagen_principal');
  $description = get_field('au_descripcion');
  $linkedin = get_field('au_linkedin');
  $behance = get_field('au_behance');
  $workexp = get_field('au_experiencia_laboral');
  $ed = get_field('au_educacion');
  $ach = get_field('au_logros');
  $ts = get_field('au_habilidades_tecnicas');
  $software = $ts['au_software'];
  $knowledge = $ts['au_knowledge'];
?>


<main id="aboutMe">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-4 pb-4 pb-lg-0 animate__animated animate__fadeIn">
        <img 
          src="<?php echo esc_url($image['url']);?>" 
          class="main-img" 
          alt="<?php echo esc_url($image['alt'])?>"
        >
      </div>
      <div class="col-12 col-lg-8 animate__animated animate__fadeInDown">
        <div class="about-me-description">
          <?php echo $description ?>
        </div>
        <div class="rrss-container">
          <a 
            href="<?php echo esc_url($linkedin['link'])?>"
            class="rrss"
            target="_blank"
          >
            <img src="<?php echo get_template_directory_uri()?>/assets/images/LinkedinLogo.svg" alt="Linkedin">
            <p class="title">Linkedin</p>
          </a>
          <a 
            href="<?php echo esc_url($behance['link'])?>"
            class="rrss"
            target="_blank"
          >
            <img src="<?php echo get_template_directory_uri()?>/assets/images/BehanceLogo.svg" alt="Behance">
            <p class="title">Behance</p>
          </a>
        </div>
      </div>
    </div>
    <div class="row skills-container pt-lg-0">
      <div class="col-12 col-lg-4">
        <div class="am-block tech-skills">
          <h3 data-aos="fade" data-aos-delay="300" data-aos-duration="1000">Technical skills</h3>
          <div class="row" data-aos="fade" data-aos-delay="500" data-aos-duration="1000">
            <div class="col-12">
              <div class="content">
                <p class="ts-title">01 Software</p>
                <?php foreach($software as $item): ?>
                  <p class="ts-item">
                    <?php echo $item['nombre_del_software'] ?>
                  </p>
                <?php endforeach; ?>
              </div>
            </div>
            <div class="col-12">
              <div class="content knowledge-content">
                <p class="ts-title">02 Specialized Knowledge</p>
                <?php foreach($knowledge as $item): ?>
                  <p class="ts-item">
                    <?php echo $item['nombre_del_conocimiento'] ?>
                  </p>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-8">
        <div class="row">
          <div class="col-12 col-lg-6">
            <div class="am-block work-experience">
              <h3 data-aos="fade" data-aos-delay="300" data-aos-duration="1000">Work experience</h3>
              <div class="content" data-aos="fade" data-aos-delay="500" data-aos-duration="1000">
                <?php foreach($workexp as $key=>$item): ?>
                  <div class="item">
                    <p class="date">
                      <?php echo $item['fecha_de_inicio'] ?> - <?php echo $item['fecha_de_finalizacion'] ?>
                    </p>
                    <p class="job">
                      <?php echo $item['puesto_de_trabajo'] ?> 
                      <?php if ($item['empresa']) : ?>
                      at <?php echo $item['empresa'] ?>
                      <?php endif; ?>
                    </p>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6">
            <div class="am-block education">
              <h3 data-aos="fade" data-aos-delay="300" data-aos-duration="1000">Education</h3>
              <div class="content" data-aos="fade" data-aos-delay="500" data-aos-duration="1000">
                <?php foreach($ed as $key=>$item): ?>
                  <div class="item">
                    <p class="date">
                      <?php echo $item['fecha_de_inicio'] ?> - <?php echo $item['fecha_de_finalizacion'] ?>
                    </p>
                    <p class="job">
                      <?php echo $item['carrera'] ?> 
                      <?php if ($item['institucion']) : ?>
                      at <?php echo $item['institucion'] ?>
                      <?php endif; ?>
                    </p>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>