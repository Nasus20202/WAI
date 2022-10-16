<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8" />
    <link rel="icon" href="<?php echo $basePath?>/assets/img/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#F5CB5C" />
    <meta name="keywords" content="keebee, klawiatury" />
    <meta name="author" content="Krzysztof Nasuta" />
    <meta
      name="description"
      content="Keebee"
    />
    <title><?php echo $title ?></title>
    <link rel="stylesheet" href="<?php echo $basePath?>/assets/css/style.css" />
    <link rel="stylesheet" href="<?php echo $basePath?>/assets/css/responsive.css" />
    <script src="<?php echo $basePath?>/assets/js/main.js"></script>
  </head>
  <body>
    <div id="theme-toggler" onclick="toggleTheme()"></div>
    <header>
      <div class="center">
        <img src="<?php echo $basePath?>/assets/img/logo.png" class="image logo" alt="keebee logo" />
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
        <main class="content">
          <?php include $content ?>
      </main>
    </div>
  </body>
</html>