var isPlaying = true;
function showTest() {
    var testContainer = document.getElementById("test");
    var resultContainer = document.getElementById("result");
    if (testContainer == null || resultContainer == null)
        return;
    testContainer.classList.remove("hidden");
    resultContainer.classList.add("hidden");
    startTest();
}
function showResult() {
    var testContainer = document.getElementById("test");
    var resultContainer = document.getElementById("result");
    if (testContainer == null || resultContainer == null)
        return;
    testContainer.classList.add("hidden");
    resultContainer.classList.remove("hidden");
    isPlaying = false;
}
function startTest() {
    isPlaying = true;
}
function handleKeypress(key) {
    if (!isPlaying || key != ' ' && (key < 'a' || key > 'z') && (key < 'A' || key > 'Z') || key == "Enter") {
        return;
    }
    alert(key);
}
addEventListener('keypress', function (event) {
    handleKeypress(event.key);
});
addEventListener('load', function (event) {
    startTest();
});
