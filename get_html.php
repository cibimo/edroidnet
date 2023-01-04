[@MNQ@!DOCTYPE html>
@MNQ@html>
@MNQ@body>
@MNQ@style>
body{
    padding: 0;
    margin: 0;
    background-color: #66BB6A;
    color: white;
}
.container{
    height: 99vh;
    width: 99vw;
    display: flex;
    justify-content: center;
    align-items: center;
    font-family: monospace;
    font-size: 1.52em;
    text-align: center;
}
h1{
  font-weight: 100;
}
.container span{
    color: #08649;
}
.container span::after{
    content: '';
    animation-name: blinking;
    animation-duration: .71s;
    animation-iteration-count: infinite;
}
@keyframes blinking{
    from{
        color: transparent;
    }
    to{
        color: lightgrey;
    }
}
@MNQ@/style>


@MNQ@/body>
@MNQ@div class="container">
    @MNQ@div class="typing-container">
        @MNQ@h1>Predictor Aviator Real @MNQ@span typing-speed="70" typing-delay="1000" words="">@MNQ@/span> @MNQ@/h1>
    @MNQ@/div>
@MNQ@/div>

@MNQ@script>
var wordsToType = document.querySelector("span[words@CCORCH@").getAttribute("words").split(','),
            typer =  document.querySelector("span[words@CCORCH@"),
            typingSpeed = (parseInt(typer.getAttribute('typing-speed')) || 70),
            typingDelay = (parseInt(typer.getAttribute('typing-delay')) || 700);

var currentWordIndex = 0, currentCharacterIndex = 0;

function type(){

    var wordToType = wordsToType[currentWordIndex%wordsToType.length@CCORCH@;

    if(currentCharacterIndex @MNQ@ wordToType.length){
        typer.innerHTML += wordToType[currentCharacterIndex++@CCORCH@;
        setTimeout(type, typingSpeed);
    }else{

        setTimeout(erase, typingDelay);
    }

}
function erase(){
    var wordToType = wordsToType[currentWordIndex%wordsToType.length@CCORCH@;
    if(currentCharacterIndex >0){
        typer.innerHTML = wordToType.substr(0, --currentCharacterIndex -1);
        setTimeout(erase, typingSpeed);
    }else{

        currentWordIndex++;
        setTimeout(type, typingDelay);
    }

}

window.onload = function(){
    type();
}
@MNQ@/script>

@MNQ@/html>





@MNQ@!DOCTYPE html>
@MNQ@html>
  @MNQ@head>
    @MNQ@meta charset="UTF-8" />
    @MNQ@title>test@MNQ@/title>
@MNQ@link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  @MNQ@/head>
  @MNQ@style>
  :root{
            --animation-status:paused;
        }
        body {
            width: 100%;
            min-height: 50vh;
            margin: 50px 0px;
            padding: 0;
            font-family: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", "Noto Sans", "Liberation Sans", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";

        }

        .container {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .number-generator {
            width: 250px;
            height: 250px;

            display: flex;
            align-items: center;
            font-size: 1.3rem;
            margin-bottom: 40px;
            justify-content: center;
            position: relative;
        }

        .number-generator .number {
            position: relative;
            z-index: 111;
        }

        .generator-loader {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            border: 1px solid rgba(1, 1, 1, .2);
        }


        .generator-loader .wrapper {
            position: relative;
            box-sizing: border-box;
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            width: 100%;
            padding: calc(27px);
            height: 100%;
            animation: loop 4s infinite forwards;
            animation-play-state: var(--animation-status);

        }

        .generator-loader.smaller {
            scale: 0.7;
        }

        .generator-loader.smaller .wrapper {
            animation: reverse-loop 4s infinite forwards;
            animation-play-state: var(--animation-status);

        }

        .generator-loader .wrapper i {
            animation: loop 2s infinite backwards;
            animation-play-state: var(--animation-status);
        }

        @keyframes loop {
            from {
                transform: rotate(0deg)
            }

            to {
                transform: rotate(360deg)
            }
        }

        @keyframes reverse-loop {
            from {
                rotate: 360deg;
            }

            to {
                rotate: 0deg
            }
        }

        .generator-actions {
            display: flex;
            align-items: center;
            flex-direction: column;
            justify-content: center;
        }

        .generator-actions a {
            height: 20px;
            opacity: 0;
            font-size: .9rem;
            visibility: hidden;
            pointer-events: none;
        }

        .generator-actions a.show {
            opacity: 1;
            visibility: visible !important;
            pointer-events: unset;

        }

        .generator-actions button {
            margin-bottom: 15px;

            border: 0px;
            padding: 10px 30px;
            border-radius: 5px;
            cursor: pointer;
            opacity: .8;
            color: white;
            transition: all 400ms;
            font-size: 0.9rem;
            font-weight: 500;
        }

        .generator-actions button:hover {
            opacity: 1;
            transition: opacity 400ms;

        }

        .btn-start {
            background-color: #212529;

        }

        .btn-stop {
            background-color: #DC3545;
        }

        .btn-save {
            background-color: #198754;
        }
  @MNQ@/style>
  @MNQ@/body>
@MNQ@div class="container">
        @MNQ@div class="number-generator">
            @MNQ@span class="number">@MNQ@b id="generator-text">Start@MNQ@/b>x@MNQ@/span>
            @MNQ@div class="generator-loader">
                @MNQ@div class="wrapper">
                    @MNQ@i class="fa-solid fa-circle">@MNQ@/i>
                    @MNQ@i class="fa-solid fa-xmark">@MNQ@/i>
                @MNQ@/div>
            @MNQ@/div>
            @MNQ@div class="generator-loader smaller">
                @MNQ@div class="wrapper">
                    @MNQ@i class="fa-solid fa-circle">@MNQ@/i>
                    @MNQ@i class="fa-solid fa-xmark">@MNQ@/i>
                @MNQ@/div>
            @MNQ@/div>
        @MNQ@/div>
        @MNQ@div class="generator-actions">
            @MNQ@button class="btn-start" id="generator-button">Start@MNQ@/button>
            @MNQ@a href="javascript:;" id="reset-generator">Next Jetx flight detected.@MNQ@/a>
        @MNQ@/div>
    @MNQ@/div>
 @MNQ@script>
const START_INC = 1; //Başlangıç sayısı
        const INC_TIME = 1; //Interval süresi
        const INC_AMOUNTH = 0.001; //Artış miktarı
        const RANDOM_TIME_UP_EXPIRE = 3000; //Butona basmazsa belirtilen  random süre max aralığında durur
        const button = document.getElementById('generator-button');
        const generatorText = document.getElementById('generator-text');
        const resetButton = document.getElementById('reset-generator');

        let isStarted = false, lastNumber = null, counter = null, savedItems = [@CCORCH@, randomTimeOut = null;

        function reset() {
            generatorText.innerText = START_INC.toFixed(2);
        }
        reset();

        button.addEventListener('click', function () {
            if ([...this.classList@CCORCH@.includes('btn-start')) {
                startTheCountdown(this);
            } else if ([...this.classList@CCORCH@.includes('btn-stop')) {
                stopTheCountdown(this)
            } else if ([...this.classList@CCORCH@.includes('btn-save')) {
                saveTheCount(this)
            }

        })

        resetButton.addEventListener('click', function () {
            button.classList.remove('btn-save');
            button.classList.add('btn-start');
            button.innerText = "Next";
            reset();
            this.classList.remove("show");
        })

        function startTheCountdown(e) {
            let tmpNumber = START_INC;
            generatorText.innerText = tmpNumber.toFixed(2);
            let ms = +(Math.floor(Math.random() * (15 * RANDOM_TIME_UP_EXPIRE)));

            randomTimeOut = setTimeout(() => {
                e.click();
            }, ms)
            counter = setInterval(() => {
                tmpNumber += INC_AMOUNTH;
                lastNumber = tmpNumber.toFixed(2)
                generatorText.innerText = lastNumber;
            }, INC_TIME * 10);
            e.classList.remove('btn-start');
            document.body.style.setProperty('--animation-status','running')
            e.classList.add('btn-stop');
            e.innerText = "Signal Detected!";

        }
        function stopTheCountdown(e) {
            clearInterval(counter);
            clearTimeout(randomTimeOut);
            e.classList.remove('btn-stop');
            e.classList.add('btn-save');
            document.body.style.setProperty('--animation-status','paused')
            resetButton.classList.add("show");
            e.innerHTML = "@MNQ@i class='fa-solid fa-check'>@MNQ@/i>";
        }

        function saveTheCount(e) {
            clearInterval(counter);
            clearTimeout(randomTimeOut);
            e.classList.remove('btn-stop');
            e.classList.remove('btn-save');
            e.classList.add('btn-start');
            resetButton.classList.remove("show");
            e.innerText = "Start";
            savedItems.push({ time: new Date(), number: lastNumber });
            reset();
            console.log("Sayım kaydedildi", savedItems)
        }
@MNQ@/script>


@MNQ@/html>
]
