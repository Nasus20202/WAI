<script src="<?php echo $basePath ?>/assets/js/gallery.js"></script>
<link rel="stylesheet" href="<?php echo $basePath ?>/assets/css/gallery.css">
<div>
        <svg id="logo" height="10vh" width="100%">
            <defs>
                <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%">
                <stop offset="0%" style="stop-color:rgb(36,36,35);stop-opacity:1" />
                <stop offset="60%" style="stop-color:rgb(219,182,79);stop-opacity:2" />
                <stop offset="100%" style="stop-color:rgb(245,203,92);stop-opacity:2" />
                </linearGradient>
            </defs>
            <rect  x="0" y="0" rx="20" ry="20" width="100%" height="100%"  fill="url(#grad1)" />
            <text fill="#ebc65f" font-size="7vh" font-family="Lato" x="3%" y="75%">Galeria</text>

        </svg>
        <noscript class="gallery">
            <a href="<?php echo $basePath ?>/assets/img/kb1.jpg">
                <img class="gallery-photo" src="<?php echo $basePath?>/assets/img/kb0-min.jpg" alt="Klawiatura">
            </a>
            <a href="<?php echo $basePath ?>/assets/img/kb1.jpg">
                <img class="gallery-photo" src="<?php echo $basePath?>/assets/img/kb1-min.jpg" alt="Klawiatura">
            </a>
            <a href="<?php echo $basePath ?>/assets/img/kb2.jpg">
                <img class="gallery-photo" src="<?php echo $basePath?>/assets/img/kb2-min.jpg" alt="Klawiatura">
            </a>
            <a href="<?php echo $basePath ?>/assets/img/kb3.jpg">
                <img class="gallery-photo" src="<?php echo $basePath?>/assets/img/kb3-min.jpg" alt="Klawiatura">
            </a>
            <a href="<?php echo $basePath ?>/assets/img/kb4.jpg">
                <img class="gallery-photo" src="<?php echo $basePath?>/assets/img/kb4-min.jpg" alt="Klawiatura">
            </a>
            <a href="<?php echo $basePath ?>/assets/img/kb5.jpg">
                <img class="gallery-photo" src="<?php echo $basePath?>/assets/img/kb5-min.jpg" alt="Klawiatura">
            </a>
            <a href="<?php echo $basePath ?>/assets/img/kb6.jpg">
                <img class="gallery-photo" src="<?php echo $basePath?>/assets/img/kb6-min.jpg" alt="Klawiatura">
            </a>
            <a href="<?php echo $basePath ?>/assets/img/kb7.jpg">
                <img class="gallery-photo" src="<?php echo $basePath?>/assets/img/kb7-min.jpg" alt="Klawiatura">
            </a>
            <a href="<?php echo $basePath ?>/assets/img/kb8.jpg">
                <img class="gallery-photo" src="<?php echo $basePath?>/assets/img/kb8-min.jpg" alt="Klawiatura">
            </a>
            <a href="<?php echo $basePath ?>/assets/img/kb9.jpg">
                <img class="gallery-photo" src="<?php echo $basePath?>/assets/img/kb9-min.jpg" alt="Klawiatura">
            </a>
        </noscript>
        <div class="gallery ns-hide" id="js-gallery">
            <img class="gallery-photo" src="<?php echo $basePath?>/assets/img/kb0-min.jpg" alt="Klawiatura" onclick='showPhoto("<?php echo $basePath?>/assets/img/kb0.jpg")'>
            <img class="gallery-photo" src="<?php echo $basePath?>/assets/img/kb1-min.jpg" alt="Klawiatura" onclick='showPhoto("<?php echo $basePath?>/assets/img/kb1.jpg")'>
            <img class="gallery-photo" src="<?php echo $basePath?>/assets/img/kb2-min.jpg" alt="Klawiatura" onclick='showPhoto("<?php echo $basePath?>/assets/img/kb2.jpg")'>
            <img class="gallery-photo" src="<?php echo $basePath?>/assets/img/kb3-min.jpg" alt="Klawiatura" onclick='showPhoto("<?php echo $basePath?>/assets/img/kb3.jpg")'>
            <img class="gallery-photo" src="<?php echo $basePath?>/assets/img/kb4-min.jpg" alt="Klawiatura" onclick='showPhoto("<?php echo $basePath?>/assets/img/kb4.jpg")'>
            <img class="gallery-photo" src="<?php echo $basePath?>/assets/img/kb5-min.jpg" alt="Klawiatura" onclick='showPhoto("<?php echo $basePath?>/assets/img/kb5.jpg")'>
            <img class="gallery-photo" src="<?php echo $basePath?>/assets/img/kb6-min.jpg" alt="Klawiatura" onclick='showPhoto("<?php echo $basePath?>/assets/img/kb6.jpg")'>
            <img class="gallery-photo" src="<?php echo $basePath?>/assets/img/kb7-min.jpg" alt="Klawiatura" onclick='showPhoto("<?php echo $basePath?>/assets/img/kb7.jpg")'>
            <img class="gallery-photo" src="<?php echo $basePath?>/assets/img/kb8-min.jpg" alt="Klawiatura" onclick='showPhoto("<?php echo $basePath?>/assets/img/kb8.jpg")'>
            <img class="gallery-photo" src="<?php echo $basePath?>/assets/img/kb9-min.jpg" alt="Klawiatura" onclick='showPhoto("<?php echo $basePath?>/assets/img/kb9.jpg")'>
        </div>
        <div id="modal" class="modal">
            <span class="close" onclick="closeModal()">&times;</span>
            <img class="modal-content" id="modal-img" src="<?php echo $basePath?>/assets/img/logo.png" alt="modal">
        </div>
</div>
