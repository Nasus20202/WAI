<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8" />
    <link rel="icon" href="<?php echo $basePath?>/assets/img/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <meta name="keywords" content="">
    <meta name="author" content="Krzysztof Nasuta">
    <meta
      name="description"
      content="description"
    />
    <title><?php echo $title ?></title>
    <link rel="stylesheet" href="<?php echo $basePath?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo $basePath?>/assets/css/responsive.css">
    <script src="<?php echo $basePath?>/assets/js/main.js"></script>
  </head>
  <body>
    <header>
      <div class="center">
        <img src="<?php echo $basePath?>/assets/img/logo.png" class="image logo" alt="keebee logo">
        <span class="title">Keebee</span>
      </div>
    </header>
    <div class="container">
      <nav id="sticky-navbar">
        <?php
        foreach (array_keys($routes) as &$routeName){
          if($routes[$routeName][2]){
            echo '<a href="'. $routeName .'" class="navitem' . ($path == $routeName ? ' currentNav' : '') . '">' . $routes[$routeName][1] . '</a>';
          }
        }?>
              </nav>
        <?php include $content ?>
    </div>
  </body>
</html>