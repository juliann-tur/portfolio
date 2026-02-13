<?php require 'ti.php' ?>

<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri()?>/assets/images/favicon.png">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/css/main.css">
    <title>
      Julián Tur |  
      <?php startblock('title')?><?php endblock() ?>
    </title>
  </head>
  <body>
    <style>
      :root{
        --primary-color: #0B0A0C;
        --secondary-color: #6210D5;
        --secondary-light-color:#FDFBFF;
        --light-grey-color: #EAE7EE;
        --grey-color: #848288;
        --background-color: #fff;
        --error-color: #AD0000;
        --success-color: #016100;
      }
    </style>

    <?php include 'header.php';?>

    <?php startblock('content')?>
    
    <?php endblock() ?>

    <?php include 'footer.php';?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script>
      const intro = document.getElementById('introContainer');
      setTimeout(() => {
        intro.classList.add("animation");
      }, 1)
    </script>
  </body>
</html>