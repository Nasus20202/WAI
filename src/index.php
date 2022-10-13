<?php
    include 'routes.php';
    $path = strtok($_SERVER["REQUEST_URI"], '?');
    if (substr($path, 0, strlen($basePath)) == $basePath) {
        $path = substr($path, strlen($basePath));
    } 
    if(array_key_exists($path, $routes)){
        include $routes[$path][0];
    } else {
        http_response_code(404);
        include $notFoundPath;
    }
?>