// Generate a random number between 1 and 100
const targetNumber = Math.floor(Math.random() * 100) + 1;

// Get the input, button, and result message elements
const guessInput = document.getElementById("guess-input");
const guessButton = document.getElementById("guess-btn");
const resultMessage = document.getElementById("result-message");

// Function to handle the guess button click event
function handleGuess() {
    // Get the user's guess from the input field
    const userGuess = parseInt(guessInput.value);

    // Compare the user's guess with the target number
    if (userGuess === targetNumber) {
        resultMessage.textContent = "Congratulations! You guessed the correct number!";
        resultMessage.style.color = "green";
    } else if (userGuess < targetNumber) {
        resultMessage.textContent = "Too low! Guess a higher number.";
        resultMessage.style.color = "red";
    } else {
        resultMessage.textContent = "Too high! Guess a lower number.";
        resultMessage.style.color = "red";
    }

    // Clear the input field
    guessInput.value = "";
}

// Add event listener to the guess button
guessButton.addEventListener("click", handleGuess);
