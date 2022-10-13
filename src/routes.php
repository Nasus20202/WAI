<?php
    $basePath = "";
    # Application
    # "/route" => ["/path/to/file.php", "Path name", visible?]
    $routes = [
        "/" => ["pages/index.php", "Klawiatury", true],
        "/details" => ["pages/details.php", "Szczegóły", true],
        "/gallery" => ["pages/gallery.php", "Galeria", true],
        "/test" => ["pages/test.php", "Test pisania", true]
    ];
    $notFoundPath = "pages/404.php"
?>