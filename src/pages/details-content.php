<link rel="stylesheet" href="<?php echo $basePath ?>/assets/css/details.css">
<script src="<?php echo $basePath ?>/assets/js/gallery.js"></script>
<link rel="stylesheet" href="<?php echo $basePath ?>/assets/css/gallery.css">
<link rel="stylesheet" href="<?php echo $basePath ?>/assets/js/jquery-ui/jquery-ui.css">
<script src="<?php echo $basePath ?>/assets/js/jquery.js"></script>
<script src="<?php echo $basePath ?>/assets/js/jquery-ui/jquery-ui.js"></script>
<script src="<?php echo $basePath ?>/assets/js/details.js"></script>
<section>
    <h3>Szczegóły</h3>
    <article class="card card-right" id="elements">
        <div class="card-content">
            <h4 style="margin: 10px 0">Elementy klawiatury mechanicznej</h4>
            <ul>
                <li><b>Klawisze</b> (Keycaps) - Plastikowe elementy służące do aktywacji przełącznika</li>
                <li><b>Przełączniki</b> (Switches) - Wykrywają kliknięcia i przesyłają je do PCB</li>
                <li><b>Obudowa</b> (Case) - Łączy pozostałe elementy w całość. Może składać się z części górnej i dolnej.</li>
                <li><b>Gaskets</b>	- Zwiększają miękkość klawiatury.</li>
                <li><b>Plate</b> - Wyrównuje i stabilizuje przełączniki</li>
                <li><b>Płytka drukowana</b> (PCB) - Konwertuje naciśnięcia klawiszy na sygnały elektryczne i wysyła je do komputera. Może zawierać diody RGB do podświetlenia.</li>
                <li><b>Stabilizatory</b> (Stabilizers) - Zwiększają stabilność dużych klawiszy, takich jak spacja, shift czy enter.</li>
                <li><b>Kabel</b> - Służy do zasilania oraz komunikacji z komputerem.</li>
                <li><b>Pianka</b> - Pochłania wtórne fale dźwiękowe.</li>
            </ul>
        </div>
        <img class="card-img" id="teardown" src="<?php echo $basePath?>/assets/img/teardown.jpg" alt="Budowa klawiatury" onclick='showPhoto("<?php echo $basePath?>/assets/img/teardown.jpg")'>
    </article>
    <article class="card" id="switches">
        <div class="card-content">
            <h4 style="margin: 10px 0">Podstawowe rodzaje przełączników</h4>
            <div class="tableContainer">
                <table>
                    <tr>
                        <th>Kolor</th>
                        <th>Typ</th>
                        <th>Siła aktywacji</th>
                        <th>Dystans aktywacji</th>
                        <th>Cały dystans</th>
                        <th>Głośność</th>
                    </tr>
                    <tr>
                        <td><img src="<?php echo $basePath?>/assets/img/gateron-red.png" alt="Gateron Red"></td>
                        <td>Linear</td>
                        <td>45&#177;15g</td>
                        <td>2.0&#177;0.6 mm</td>
                        <td>4.0 mm</td>
                        <td>Cichy</td>
                    </tr>
                    <tr>
                        <td><img src="<?php echo $basePath?>/assets/img/gateron-brown.png" alt="Gateron Brown"></td>
                        <td>Tactile</td>
                        <td>55&#177;15g</td>
                        <td>2.0&#177;0.6 mm</td>
                        <td>4.0 mm</td>
                        <td>Średni</td>
                    </tr>
                    <tr>
                        <td><img src="<?php echo $basePath?>/assets/img/gateron-blue.png" alt="Gateron Blue"></td>
                        <td>Clicky</td>
                        <td>60&#177;15g</td>
                        <td>2.3&#177;0.6 mm</td>
                        <td>4.0 mm</td>
                        <td>Głośny</td>
                    </tr>
                    <tr>
                        <td><img src="<?php echo $basePath?>/assets/img/gateron-black.png" alt="Gateron Black"></td>
                        <td>Linear</td>
                        <td>60&#177;15g</td>
                        <td>20&#177;0.6 mm</td>
                        <td>4.0 mm</td>
                        <td>Cichy</td>
                    </tr>
                    <tr>
                        <td><img src="<?php echo $basePath?>/assets/img/gateron-yellow.png" alt="Gateron Yellow"></td>
                        <td>Linear</td>
                        <td>50&#177;15g</td>
                        <td>2.0&#177;0.6 mm</td>
                        <td>4.0 mm</td>
                        <td>Cichy</td>
                    </tr>
                    <tr>
                        <td><img src="<?php echo $basePath?>/assets/img/gateron-green.png" alt="Gateron Green"></td>
                        <td>Clicky</td>
                        <td>80&#177;15g</td>
                        <td>2.3&#177;0.6 mm</td>
                        <td>4.0 mm</td>
                        <td>Głośny</td>
                    </tr>
                    <tr>
                        <td><img src="<?php echo $basePath?>/assets/img/gateron-clear.png" alt="Gateron White/Clear"></td>
                        <td>Linear</td>
                        <td>35&#177;15g</td>
                        <td>2.0&#177;0.6 mm</td>
                        <td>4.0 mm</td>
                        <td>Cichy</td>
                    </tr>
                </table>
                <br>
                Table przedstawia przełączniki na przykładznie produków marki <b>Gateron</b>. Inne popularne firmy produkujące switche do klawiatur to m. in. Cherry, Kailh, Outemu, TTC, Everglide, ZealPC, AKKO, JWK.
            </div>
        </div>
    </article>
    <article class="card card-right" id="layouts">
        <div class="card-content" id="card-content-layouts">
            <div class="layouts-elem">
                <h4 style="margin: 10px 0">Rozmiary klawiatur</h4>
                <img class="no-zoom layouts-elem-img" src="<?php echo $basePath?>/assets/img/layouts.jpg" alt="Budowa klawiatury" onclick='showPhoto("<?php echo $basePath?>/assets/img/layouts.jpg")'>
            </div>
            <div class="layouts-elem">
                <h4 style="margin: 10px 0">Profile klawiszy</h4>
                <img class="no-zoom layouts-elem-img" src="<?php echo $basePath?>/assets/img/profiles.jpg" alt="Budowa klawiatury" onclick='showPhoto("<?php echo $basePath?>/assets/img/profiles.jpg")'>
            </div>
        </div>
    </article>
    <article class="card" id="poll">
        <img class="card-img" id="poll-img" src="<?php echo $basePath?>/assets/img/kb6-min.jpg" alt="Klawiatura">
        <div class="card-content">
            <h4 style="margin: 10px 0">Ankieta</h4>
            <form action="/poll" method="POST">
                <span><label for="age">Twój wiek:</label><input type="number" class="poll-input" id="age" title="Wiek jest daną jedynie statystyczną" required></span>
                <span><label for="keyboard">Twoja klawiatura:</label><input class="poll-input" id="keyboard" required></span>
                <span><label for="custom">Custom? </label><input type="checkbox" id="custom"></span>
                <span><label for="budget">Budżet:</label><input class="poll-input" type="number" id="budget" required> zł</span>
                <fieldset>
                    <legend>Rodzaj przełącznika</legend>
                    <label for="linear">Linear</label>
                    <input type="radio" name="switchType" id="linear" required>
                    <label for="tactile">Tactile</label>
                    <input type="radio" name="switchType" id="tactile">
                    <label for="clicky">Clicky</label>
                    <input type="radio" name="switchType" id="clicky">
                </fieldset>
                <span><label for="switch">Model przełącznika:</label><input class="poll-input" id="switch" required></span>
                <span><label for="keycaps">Keycapy:</label><input class="poll-input" id="keycaps" required></span>
                <span><label for="color">Kolor przewodni:</label><input class="poll-input" id="color" type="color"></span>
                <span><label for="rgb">Podświetlenie RGB? </label><input type="checkbox" id="rgb"></span>
                <span><label for="photo">Zdjęcie: </label><input class="poll-input" type="file" id="photo"></span>
                <span><label for="priority">Co jest dla ciebie najważniejsze:</label>
                    <select id="priority" class="poll-input"  name="priority" required>
                        <option value="">Wybierz...</option>
                        <option value="price">Cena</option>
                        <option value="look">Wygląd</option>
                        <option value="comfort">Komfort</option>
                        <option value="sound">Dźwięk</option>
                    </select>
                </span>
                <span><label for="email">Email:</label><input class="poll-input" id="email" title="Pole nieobowiązkowe"  type="email"></span>
                <div id="form-btn-container">
                    <button type="submit">Wyślij</button>
                    <button type="reset">Reset</button>
                </div>
            </form>
        </div>
    </article>
</section>
<a id="poll-link" href="#poll">Ankieta</a>
<div id="modal" class="modal">
        <span class="close" onclick="closeModal()">&times;</span>
        <img class="modal-content" id="modal-img" src="<?php echo $basePath?>/assets/img/logo.png" alt="modal">
</div>

