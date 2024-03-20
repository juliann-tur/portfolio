<?php
  $image = get_field('au_imagen_principal');
  $description = get_field('au_descripcion');
  $linkedin = get_field('au_linkedin');
  $workexp = get_field('au_experiencia_laboral');
  $ed = get_field('au_educacion');
  $ach = get_field('au_logros');
  $ts = get_field('au_habilidades_tecnicas');
  $software = $ts['au_software'];
  $knowledge = $ts['au_knowledge'];
?>


<main id="aboutMe">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-8 col-lg-4 pb-4 pb-lg-0 animate__animated animate__fadeIn">
        <img 
          src="<?php echo esc_url($image['url']);?>" 
          class="main-img" 
          alt="<?php echo esc_url($image['alt'])?>"
        >
      </div>
      <div class="col-12 col-lg-6 offset-lg-2  animate__animated animate__fadeInDown">
        <?php echo $description ?>
        <p class="title">Linkedin</p>
        <a 
          href="<?php echo esc_url($linkedin['link'])?>"
          class="linkedin"
          target="_blank"
        >
          <?php echo $linkedin['subtitle'] ?>
        </a>
      </div>
    </div>
    <div class="row pt-4 pt-lg-0">
      <div class="col-12 col-lg-6">
        <div class="am-block work-experience"  data-aos="fade" data-aos-duration="1000">
          <img src="<?php echo get_template_directory_uri()?>/assets/images/work-experience.svg" alt="icon">
          <h3>Work experience</h3>
          <div class="content">
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
        <div class="am-block tech-skills"  data-aos="fade-down" data-aos-duration="1000">
          <img src="<?php echo get_template_directory_uri()?>/assets/images/technical-skills.svg" alt="icon">
          <h3>Technical skills</h3>
          <div class="row">
            <div class="col-6 col-lg-5">
              <div class="content">
                <p class="ts-title">01 Software</p>
                <?php foreach($software as $item): ?>
                  <p class="ts-item">
                    <?php echo $item['nombre_del_software'] ?>
                  </p>
                <?php endforeach; ?>
              </div>
            </div>
            <div class="col-6 col-lg-5">
              <div class="content">
                <p class="ts-title">02 Knowledge</p>
                <?php foreach($software as $item): ?>
                  <p class="ts-item">
                    <?php echo $item['nombre_del_software'] ?>
                  </p>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-6">
        <div class="am-block education"  data-aos="fade" data-aos-duration="1000">
          <img src="<?php echo get_template_directory_uri()?>/assets/images/education.svg" alt="icon">
          <h3>Education</h3>
          <div class="content">
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
        <div class="am-block achievments" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="500">
          <img src="<?php echo get_template_directory_uri()?>/assets/images/achievments.svg" alt="icon">
          <h3>Achievments</h3>
          <div class="content">
            <?php foreach($ach as $key=>$item): ?>
              <div class="item">
                <p class="job">
                  <?php echo $item['descripcion'] ?> 
                </p>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>