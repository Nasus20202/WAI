<script src="<?php echo $basePath ?>/assets/js/typingtest.js"></script>
<link rel="stylesheet" href="<?php echo $basePath ?>/assets/css/typingtest.css">
<section id="test">
    <h3>Test pisania</h3>
    <div id="typing">
        
    </div>
    <div id="typing-stats">
        <div class="stat">Progres: <span id="progress">0</span>%</div>
        <div class="stat">Szybkość: <span id="wpm">0</span> WPM</div>
        <div class="stat">Czas: <span id="time">0</span> s</div>
        <div class="stat">Poprawność: <span id="accuracy">0</span>%</div>
    </div>
    <progress id="progressbar" value="0" max="100"></progress>
    <button onclick="showResult()">Wyniki</button>
</section>
<section id="result" class="hidden">
    <h3>Wyniki <span id="record"></span></h3>
    <div id="result-stats">
        <div class="result-stat hidden">Szybkość: <span id="result-wpm">0</span> WPM</div>
        <div class="result-stat hidden">Poprawność: <span id="result-accuracy">0</span>%</div>
    </div>
    <div class="row">
        <button id="newtestbtn" onclick="showTest()">Rozpocznij test</button>
        <div id="word-count-container">
            Ilość słów: 
            <input type="text" id="word-count" value="30" placeholder="10-1000">
        </div>
    </div>
    <div id="history">

    </div>
</section>
