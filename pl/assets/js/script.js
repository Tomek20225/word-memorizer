// ------ GLOBAL ------
var amount = 0;
var rand = 0;
var size = Object.keys(words).length;
var pickedWords = [];
var pickedWordsIds = [];
var result = document.getElementById('result');
var nextStep = document.getElementById('nextStep');
var randomNum = 0;
var randomNumContainer = document.getElementById('randomNum');
var checkContainer = document.getElementById('checkContainer');
var resultCheck = document.getElementById('resultCheck');
var wordInput = document.getElementById('wordInput');
var checkerBox = document.getElementById('checkerBox');
var click = 0;
var trueAn = 0;
var falseAn = 0;
var nonAn = 0;
var wasAnswered = false;
var score = 0;
var answer = "";


// ------ RANDOMIZING WORDS ------
function pickWords() {
	result.innerHTML = "";
	checkContainer.classList.add("inactive");
	checkContainer.classList.remove("active");
	randomNumContainer.innerHTML = "";
	resultCheck.innerHTML = "";
	
	amount = document.getElementById('amount').value;
	pickedWords = [];
	pickedWordsIds = [];
	wordInput.value = "";
	click = 0;
	trueAn = 0;
	falseAn = 0;
	nonAn = 0;
	wasAnswered = false;
	answer = "";

	for (let i = 0; i < amount; i++) {
		rand = Math.floor(Math.random() * size);
		pickedWords.push(words[rand]);

		pickedWordsIds.push(i);
		
		result.classList.remove("inactive");
		result.classList.add("active");
		result.innerHTML += '<li class="list-group-item"><span>' + (i+1) + ".</span> " + words[rand] + "</li>";
	}

	nextStep.classList.remove("inactive");
	nextStep.classList.add("active");
}


// ------ PICKING RANDOM WORDS FROM RANDOMIZED ARRAY ------
function pickRandom() {
	click++;

	if (!wasAnswered) nonAn++;
	wasAnswered = false;

	if (click > pickedWords.length) {
		nonAn--;

		score = (trueAn / (trueAn + falseAn + nonAn)) * 100;

		randomNumContainer.innerHTML = "To wszystko!<br><br>" + trueAn + " poprawne odpowiedzi<br>" + falseAn + " niepoprawne odpowiedzi<br>" + nonAn + " nieudzielone odpowiedzi<br><br>Twój wynik to: " + score.toFixed(2) + "%";

		checkContainer.classList.add('inactive');
		checkContainer.classList.remove('active');
	} else {
		while (true) {
			randomNum = Math.floor(Math.random() * pickedWords.length);

			if (pickedWordsIds[randomNum] == "NULL") {
				randomNum = Math.floor(Math.random() * pickedWords.length);
			} else {
				break;
			}
		}
		
		randomNumContainer.innerHTML = "Liczba to: " + (pickedWordsIds[randomNum] + 1);
		pickedWordsIds[randomNum] = "NULL";
	
		result.classList.add("inactive");
		result.classList.remove("active");
		checkContainer.classList.remove("inactive");
		checkContainer.classList.add("active");
		checkerBox.classList.remove("inactive");
		checkerBox.classList.add("active");
		resultCheck.classList.add("inactive");
		resultCheck.classList.remove("active");
	}
}


// ------ COMPARING USER INPUT AND ONE RANDOMIZED WORD ------
function checkWord() {
	wasAnswered = true;

	resultCheck.classList.remove("inactive");
	resultCheck.classList.add("active");

	answer = wordInput.value;
	answer = answer.toLowerCase();

	if (answer == pickedWords[randomNum]) {
		resultCheck.innerHTML = "Dobrzee!";
		
		trueAn++;
	} else {
		resultCheck.innerHTML = "Niestety źle :(<br>Słowo brzmiało: " + pickedWords[randomNum];

		falseAn++;
	}

	checkerBox.classList.add('inactive');
	checkerBox.classList.remove('active');
	wordInput.value = "";
}