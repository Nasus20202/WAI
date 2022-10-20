<script src="<?php echo $basePath ?>/assets/js/gallery.js"></script>
<link rel="stylesheet" href="<?php echo $basePath ?>/assets/css/gallery.css">
<section>
    <h3>Galeria</h3>
    <section>
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
            <style>
                #js-gallery{display: none;}
            </style>
        </noscript>
        <div class="gallery" id="js-gallery">
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
            <img class="modal-content" id="modal-img">
        </div>
    </section>
</section>
