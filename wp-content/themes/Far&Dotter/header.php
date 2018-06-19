<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nixie+One" rel="stylesheet">
    
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>

    <title>Far & Dotter</title>
    <?php wp_head(); ?>

  </head>
  <body>

    <header role="header">
      <nav class="navbar navbar-default navbar-captum navbar-side navbar-static-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".navbar-collapse" role="button">
              <span class="sr-only">Toggle Navigation</span>

              <span class="icon-bar"></span>

              <span class="icon-bar"></span>

              <span class="icon-bar"></span>
            </button>

            <a href="http://localhost:8888/wordpress-PK/" class="navbar-brand">Far & Dotter</a>
          </div>

          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right js-nav">
              <?php
                  if(has_nav_menu('primary')):
                      wp_nav_menu(['theme_location' => 'primary', 'menu_class' => 'nav navbar-nav navbar-right  navbar-user-profile', 'container'=> false]);
                  endif;
              ?>

              <!-- <li><a href="#about">Om oss</a></li>

              <li><a href="#services">Blogg</a></li>

              <li><a href="#folio">Veckans</a></li>

              <li><a href="#contact">Kontakt</a></li> -->

            </ul>
          </div>
        </div>
      </nav>
    </header>
