let isPlaying = true;

function showTest() : void {
    let testContainer = document.getElementById("test");
    let resultContainer = document.getElementById("result");
    if(testContainer == null || resultContainer == null)
        return;
    testContainer.classList.remove("hidden");
    resultContainer.classList.add("hidden");
    startTest();
}

function showResult() : void {
    let testContainer = document.getElementById("test");
    let resultContainer = document.getElementById("result");
    if(testContainer == null || resultContainer == null)
        return;
    testContainer.classList.add("hidden");
    resultContainer.classList.remove("hidden");
    isPlaying = false;
}

function startTest() : void {
    isPlaying = true;
}

function handleKeypress(key : string) : void {
    if(!isPlaying || key != ' ' && (key < 'a' || key > 'z') && (key < 'A' || key > 'Z') || key == "Enter"){
        return;
    } alert(key);
}

addEventListener('keypress', (event) => {
    handleKeypress(event.key);
});

addEventListener('load', (event) => {
    startTest();
});
