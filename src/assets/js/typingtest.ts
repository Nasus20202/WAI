let isPlaying = true;
let words = ["a","ability","able","about","above","accept","according","account","across","act","action","activity","actually","add","address","administration","admit","adult","affect","after","again","against","age","agency","agent","ago","agree","agreement","ahead","air","all","allow","almost","alone","along","already","also","although","always","American","among","amount","analysis","and","animal","another","answer","any","anyone","anything","appear","apply","approach","area","argue","arm","around","arrive","art","article","artist","as","ask","assume","at","attack","attention","attorney","audience","author","authority","available","avoid","away","baby","back","bad","bag","ball","bank","bar","base","be","beat","beautiful","because","become","bed","before","begin","behavior","behind","believe","benefit","best","better","between","beyond","big","bill","billion","bit","black","blood","blue","board","body","book","born","both","box","boy","break","bring","brother","budget","build","building","business","but","buy","by","call","camera","campaign","can","cancer","candidate","capital","car","card","care","career","carry","case","catch","cause","cell","center","central","century","certain","certainly","chair","challenge","chance","change","character","charge","check","child","choice","choose","church","citizen","city","civil","claim","class","clear","clearly","close","coach","cold","collection","college","color","come","commercial","common","community","company","compare","computer","concern","condition","conference","Congress","consider","consumer","contain","continue","control","cost","could","country","couple","course","court","cover","create","crime","cultural","culture","cup","current","customer","cut","dark","data","daughter","day","dead","deal","death","debate","decade","decide","decision","deep","defense","degree","Democrat","democratic","describe","design","despite","detail","determine","develop","development","die","difference","different","difficult","dinner","direction","director","discover","discuss","discussion","disease","do","doctor","dog","door","down","draw","dream","drive","drop","drug","during","each","early","east","easy","eat","economic","economy","edge","education","effect","effort","eight","either","election","else","employee","end","energy","enjoy","enough","enter","entire","environment","environmental","especially","establish","even","evening","event","ever","every","everybody","everyone","everything","evidence","exactly","example","executive","exist","expect","experience","expert","explain","eye","face","fact","factor","fail","fall","family","far","fast","father","fear","federal","feel","feeling","few","field","fight","figure","fill","film","final","finally","financial","find","fine","finger","finish","fire","firm","first","fish","five","floor","fly","focus","follow","food","foot","for","force","foreign","forget","form","former","forward","four","free","friend","from","front","full","fund","future","game","garden","gas","general","generation","get","girl","give","glass","go","goal","good","government","great","green","ground","group","grow","growth","guess","gun","guy","hair","half","hand","hang","happen","happy","hard","have","he","head","health","hear","heart","heat","heavy","help","her","here","herself","high","him","himself","his","history","hit","hold","home","hope","hospital","hot","hotel","hour","house","how","however","huge","human","hundred","husband","I","idea","identify","if","image","imagine","impact","important","improve","in","include","including","increase","indeed","indicate","individual","industry","information","inside","instead","institution","interest","interesting","international","interview","into","investment","involve","issue","it","item","its","itself","job","join","just","keep","key","kid","kill","kind","kitchen","know","knowledge","land","language","large","last","late","later","laugh","law","lawyer","lay","lead","leader","learn","least","leave","left","leg","legal","less","let","letter","level","lie","life","light","like","likely","line","list","listen","little","live","local","long","look","lose","loss","lot","love","low","machine","magazine","main","maintain","major","majority","make","man","manage","management","manager","many","market","marriage","material","matter","may","maybe","me","mean","measure","media","medical","meet","meeting","member","memory","mention","message","method","middle","might","military","million","mind","minute","miss","mission","model","modern","moment","money","month","more","morning","most","mother","mouth","move","movement","movie","Mr","Mrs","much","music","must","my","myself","name","nation","national","natural","nature","near","nearly","necessary","need","network","never","new","news","newspaper","next","nice","night","no","none","nor","north","not","note","nothing","notice","now","n't","number","occur","of","off","offer","office","officer","official","often","oh","oil","ok","old","on","once","one","only","onto","open","operation","opportunity","option","or","order","organization","other","others","our","out","outside","over","own","owner","page","pain","painting","paper","parent","part","participant","particular","particularly","partner","party","pass","past","patient","pattern","pay","peace","people","per","perform","performance","perhaps","period","person","personal","phone","physical","pick","picture","piece","place","plan","plant","play","player","PM","point","police","policy","political","politics","poor","popular","population","position","positive","possible","power","practice","prepare","present","president","pressure","pretty","prevent","price","private","probably","problem","process","produce","product","production","professional","professor","program","project","property","protect","prove","provide","public","pull","purpose","push","put","quality","question","quickly","quite","race","radio","raise","range","rate","rather","reach","read","ready","real","reality","realize","really","reason","receive","recent","recently","recognize","record","red","reduce","reflect","region","relate","relationship","religious","remain","remember","remove","report","represent","Republican","require","research","resource","respond","response","responsibility","rest","result","return","reveal","rich","right","rise","risk","road","rock","role","room","rule","run","safe","same","save","say","scene","school","science","scientist","score","sea","season","seat","second","section","security","see","seek","seem","sell","send","senior","sense","series","serious","serve","service","set","seven","several","sex","sexual","shake","share","she","shoot","short","shot","should","shoulder","show","side","sign","significant","similar","simple","simply","since","sing","single","sister","sit","site","situation","six","size","skill","skin","small","smile","so","social","society","soldier","some","somebody","someone","something","sometimes","son","song","soon","sort","sound","source","south","southern","space","speak","special","specific","speech","spend","sport","spring","staff","stage","stand","standard","star","start","state","statement","station","stay","step","still","stock","stop","store","story","strategy","street","strong","structure","student","study","stuff","style","subject","success","successful","such","suddenly","suffer","suggest","summer","support","sure","surface","system","table","take","talk","task","tax","teach","teacher","team","technology","television","tell","ten","tend","term","test","than","thank","that","the","their","them","themselves","then","theory","there","these","they","thing","think","third","this","those","though","thought","thousand","threat","three","through","throughout","throw","thus","time","to","today","together","tonight","too","top","total","tough","toward","town","trade","traditional","training","travel","treat","treatment","tree","trial","trip","trouble","true","truth","try","turn","TV","two","type","under","understand","unit","until","up","upon","us","use","usually","value","various","very","victim","view","violence","visit","voice","vote","wait","walk","wall","want","war","watch","water","way","we","weapon","wear","week","weight","well","west","western","what","whatever","when","where","whether","which","while","white","who","whole","whom","whose","why","wide","wife","will","win","wind","window","wish","with","within","without","woman","wonder","word","work","worker","world","worry","would","write","writer","wrong","yard","yeah","year","yes","yet","you","young","your","yourself"];
let desiredInput = "";
let userInput = ""; 
let time = 0;
let timeInterval : number;
let wpm = 0;
let letters = 0; 
let errors = 0;
let badLetters = 0;

function showTest() : void {
    let testContainer = document.getElementById("test");
    let resultContainer = document.getElementById("result");
    if(testContainer == null || resultContainer == null)
        return;
    startTest();
    testContainer.classList.remove("hidden");
    resultContainer.classList.add("hidden");
}

function showResult() : void {
    let testContainer = document.getElementById("test");
    let resultContainer = document.getElementById("result");
    if(testContainer == null || resultContainer == null)
        return;
    updateHistory();
    testContainer.classList.add("hidden");
    resultContainer.classList.remove("hidden");
    isPlaying = false;
}

function endTest(letters : number, badLetters : number, errors : number, time : number) : void {
    let wpmContainer = document.getElementById("result-wpm");
    let accuracyContainer = document.getElementById("result-accuracy");
    if (wpmContainer == null || accuracyContainer == null)
        return;
    wpmContainer.innerHTML =  Math.max(Math.round((letters * 0.2 - errors) / (time / 60)), 0).toString();
    accuracyContainer.innerHTML = letters == 0 ? '0' : Math.round((Math.max(letters - badLetters, 0) / letters) * 100).toString();
    let stats = document.getElementsByClassName("result-stat");
    for(let i = 0; i < stats.length; i++) {
        stats[i].classList.remove("hidden");
    };
    addToHistory(Math.max(Math.round((letters * 0.2 - errors) / (time / 60)), 0), letters == 0 ? 0 : Math.round((Math.max(letters - badLetters, 0) / letters) * 100));
    showResult();
}

interface historyData {
    wpm : number;
    accuracy : number;
    time : string;
}

function updateHistory() : void {
    let historyContainer = document.getElementById("history");
    if (historyContainer == null)
        return;
    let historyJson = sessionStorage.getItem("history");
    let history : historyData[] = historyJson == null ? [] : JSON.parse(historyJson);  
    historyContainer.innerHTML = "";
    if(history.length > 0) {
        let elem = document.createElement("span");
        elem.id = "history-title";
        elem.innerHTML = "Historia";
        historyContainer.appendChild(elem);
    }
    history.reverse().forEach((entry, index) => {
        let entryContainer = document.createElement("div");
        entryContainer.innerHTML = '<span style="color: #707070">' + (index+1).toString() + '. ' + entry.time + ' &#8226</span> ' + entry.wpm + ' WPM, ' + entry.accuracy + '% poprawności';
        if (historyContainer != null)
            historyContainer.appendChild(entryContainer);
    });
}

function addToHistory(wpm : number, accuracy : number) : void {
    let historyJson = sessionStorage.getItem("history");
    let history : historyData[] = historyJson == null ? [] : JSON.parse(historyJson);
    history.push({wpm: wpm, accuracy: accuracy, time: new Date().toLocaleTimeString()});
    sessionStorage.setItem("history", JSON.stringify(history));
}

function startTest() : void {
    isPlaying = true; desiredInput = ""; userInput = ""; time = -1; letters = 0; errors = 0; badLetters = 0;
    if (timeInterval != null) {
        clearInterval(timeInterval);
        timeInterval = -1;
    }
    for(let i = 0; i < 20; i++) {
        if(i > 0)
            desiredInput += " ";
        desiredInput += words[Math.floor(Math.random() * words.length)];
    }
    updateTime();
    updateTyping();
    updateProgress();
    updateWpm();
    updateAccuracy();
}

function updateTyping() : void {
    let typing = document.getElementById("typing");
    if(typing == null)
        return;
    let output = "";
    let userWords = userInput.split(" ");
    let localLetters = 0, localErrors = 0, localBadLetters = 0;
    desiredInput.split(" ").forEach((word, index) => {
        let isCorrect = true;
        if(index > 0)
            output += " ";
        if(userWords.length <= index){
            output += word;
        } else {
            let userWord = userWords[index];
            localLetters += Math.min(word.length, userWord.length);
            for(let i = 0; i < word.length; i++) {
                if(i < userWord.length && word[i] == userWord[i])
                    output += "<span class='correct'>" + word[i] + "</span>";
                else if(i < userWord.length){
                    output += "<span class='incorrect'>" + word[i] + "</span>";
                    isCorrect = false;
                    localBadLetters++;
                }
                else
                    output += word[i]; 
            }
            if(userWord.length > word.length) {
                let rest = userWord.substring(word.length, userWord.length + (userWord.length - word.length))
                output += "<span class='incorrect'>" + rest + "</span>"; 
                localBadLetters += rest.length;
                isCorrect = false;
            }
        }
        if(!isCorrect)
            localErrors++;
    });
    errors = localErrors; letters = localLetters; badLetters = localBadLetters;
    if(time > 0)
        wpm = Math.round((letters * 0.2 - errors) / (time / 60));
    else
        wpm = 0;
    if(wpm < 0)
        wpm = 0;
    typing.innerHTML = output;
}

function handleKeypress(key : string) : void {
    if(timeInterval == null)
        timeInterval = setInterval(updateTime, 1000);
    else if (timeInterval == -1)
        timeInterval = setInterval(updateTime, 1000);
    if(isPlaying && (key == "Backspace" || key == "Delete")) {
        userInput = userInput.substring(0, userInput.length - 1);
    }
    else if(isPlaying && key.length == 1){
        if(key == " " && userInput.length > 0 && userInput[userInput.length - 1] == " ")
            return;
        userInput += key;
    } else {
        return;
    }
    updateTyping();
    updateProgress();
    if(key == ' ' && userInput.split(' ').length == desiredInput.split(' ').length + 1) {
        endTest(letters, badLetters, errors, time);
    }
}

function updateTime() : void {
    let timeContainer = document.getElementById("time");
    if(timeContainer == null)
        return;
    time++;
    timeContainer.innerHTML = time.toString();
    updateWpm();
    updateAccuracy();
}

function updateWpm() : void {
    let wpmContainer = document.getElementById("wpm");
    if(wpmContainer == null)
        return;
    if(time > 0)
        wpm = Math.round((letters * 0.2 - errors) / (time / 60));
    else
        wpm = 0;
    if(wpm < 0)
        wpm = 0;
    wpmContainer.innerHTML = wpm.toString();
}

function updateProgress() : void {
    let progressContainer = document.getElementById("progress");
    let progressBar = document.getElementById("progressbar");
    if(progressContainer == null || progressBar == null)
        return;
    let progress = Math.round(((letters + userInput.split(" ").length - 1) / desiredInput.length) * 100).toString();
    progressContainer.innerHTML = progress
    progressBar.setAttribute("value", progress);
}

function updateAccuracy() : void {
    let accuracyContainer = document.getElementById("accuracy");
    if(accuracyContainer == null)
        return;
    accuracyContainer.innerHTML = letters == 0 ? '0' : Math.round((Math.max(letters - badLetters, 0) / letters) * 100).toString();
}

addEventListener('keydown', (event) => {
    handleKeypress(event.key);
});

addEventListener('load', (event) => {
    startTest();
});
