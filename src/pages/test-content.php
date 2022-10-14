<script src="<?php echo $basePath ?>/assets/js/typingtest.js"></script>
<link rel="stylesheet" href="<?php echo $basePath ?>/assets/css/typingtest.css">
<section id="test">
    <h3>Test pisania</h3>
    <div id="typing">
        
    </div>
    <div id="typing-stats">
        <div class="stat">Progress: <span id="progress">0</span>%</div>
        <div class="stat">Szybkość: <span id="wpm">0</span> WPM</div>
        <div class="stat">Czas: <span id="time">0</span> s</div>
        <div class="stat">Poprawność: <span id="accuracy">0</span>%</div>
    </div>
    <button onclick="showResult()">Wyniki</button>
</section>
<section id="result" class="hidden">
    <h3>Wyniki</h3>
    <button onclick="showTest()">Rozpocznij test</button>
</section>
