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
        --primary-color: #202020;
        --secondary-color: #8A8A8A;
        --light-grey-color: #AFAFAF;
        --background-color: #fff;
        --error-color: #d01b1b;
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
      const seenIntro = localStorage.getItem('JT_intro');
      const intro = document.getElementById('introContainer');
      if(seenIntro){
        intro.classList.add("hide");
      }else{ 
        setTimeout(() => {
          localStorage.setItem('JT_intro', 'true');
          intro.classList.add("animation");
        }, 5000)
      }
    </script>
  </body>
</html>