<?php
    include 'routes.php';
    $path = strtok($_SERVER["REQUEST_URI"], '?');
    if (substr($path, 0, strlen($basePath)) == $basePath) {
        $path = substr($path, strlen($basePath));
    } 
    echo 'Your path: ' . $path . '<br>';
    foreach (array_keys($routes) as &$routeName){
        echo $routeName . ' : ' . $routes[$routeName] . '<br>';
    }
    if(array_key_exists($path, $routes)){
        include $routes[$path];
    } else {
        include $notFoundPath;
    }
?>