<?php include 'partials/layout.php';?>

<?php startblock('title') ?>
  <?php
    if ( is_page('contacto') ) {
      echo "Contact";
    } elseif ( is_page('about-me') ){
      echo "About me";
    } elseif ( is_page('home') ){
      echo "Projects";
    }else {
      $title = get_the_title();
      echo $title;
    }
  ?>
<?php endblock() ?> 


<?php startblock('content') ?>
  <?php
    if ( is_page('contacto') ) {
      include 'pages/contacto.php';
    } elseif ( is_page('about-me') ){
      include 'pages/sobre-mi.php';
    } elseif ( is_page('home') ){
      include 'pages/proyectos.php';
    } else {
      include 'pages/proyecto.php';
    }
  ?>
<?php endblock() ?> 