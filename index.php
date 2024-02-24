<?php include 'partials/layout.php';?>

<?php startblock('title') ?>
  <?php
    if ( is_page('contacto') ) {
      echo "Contact";
    } elseif ( is_page('about-me') ){
      echo "About me";
    } elseif ( is_page('projects') ){
      echo "Projects";
    } elseif ( is_page('home') ){
      echo "Home";
    } else {
      echo "Project";
    }
  ?>
<?php endblock() ?> 


<?php startblock('content') ?>
  <?php
    if ( is_page('contacto') ) {
      include 'pages/contacto.php';
    } elseif ( is_page('about-me') ){
      include 'pages/sobre-mi.php';
    } elseif ( is_page('projects') ){
      include 'pages/proyectos.php';
    } elseif ( is_page('home') ){
      include 'pages/home.php';
    } else {
      include 'pages/proyecto.php';
    }
  ?>
<?php endblock() ?> 