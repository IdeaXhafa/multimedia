// List of words for the game
const words = ["hangman", "javascript", "programming", "openai", "web", "idea", "talbad"];

// Select a random word from the list
let randomWord = words[Math.floor(Math.random() * words.length)];

// Track the guessed letters
let guessedLetters = [];

// Track the remaining chances
let chances = 6;

// Display the initial word with underscores
let hiddenWord = "_".repeat(randomWord.length);

// Function to update the word display
function updateWordDisplay() {
    let wordElement = document.getElementById("word");
    wordElement.textContent = hiddenWord.split("").join(" ");
}

// Function to update the letters display
function updateLettersDisplay() {
    let lettersElement = document.getElementById("letters");
    lettersElement.textContent = "Guessed letters: " + guessedLetters.join(", ");
}

// Function to update the remaining chances
function updateChances() {
    let chancesElement = document.getElementById("chances-count");
    chancesElement.textContent = chances.toString();
}

// Function to handle user input
function handleInput(event) {
    if (event.keyCode >= 65 && event.keyCode <= 90) {
        let letter = event.key.toLowerCase();
        if (guessedLetters.includes(letter)) {
            return; // Letter already guessed, ignore
        }
        guessedLetters.push(letter);
        updateLettersDisplay();
        if (randomWord.includes(letter)) {
            // Update the hidden word with the guessed letter
            let newHiddenWord = "";
            for (let i = 0; i < randomWord.length; i++) {
                if (randomWord[i] === letter) {
                    newHiddenWord += letter;
                } else {
                    newHiddenWord += hiddenWord[i];
                }
            }
            hiddenWord = newHiddenWord;
            updateWordDisplay();
            if (!hiddenWord.includes("_")) {
                // All letters guessed, the player wins
                alert("Congratulations! You won!");
                resetGame();
            }
        } else {
            chances--;
            updateChances();
            if (chances === 0) {
                // No more chances, the player loses
                alert("Game over. The word was: " + randomWord);
                resetGame();
            }
        }
    }
}

// Function to reset the game
function resetGame() {
    randomWord = words[Math.floor(Math.random() * words.length)];
    guessedLetters = [];
    chances = 6;
    hiddenWord = "_".repeat(randomWord.length);
    updateWordDisplay();
    updateLettersDisplay();
    updateChances();
}

// Event listener for keydown events
document.addEventListener("keydown", handleInput);

// Initial display update
updateWordDisplay();
updateLettersDisplay();
updateChances();
