// Get the choice buttons and result message element
const choiceButtons = document.querySelectorAll(".choice-btn");
const resultMessage = document.getElementById("result-message");

// Function to handle the player's choice and determine the game result
function playGame(e) {
    const playerChoice = e.target.dataset.choice;
    const computerChoice = generateComputerChoice();

    const result = determineResult(playerChoice, computerChoice);

    displayResult(result, playerChoice, computerChoice);
}

// Function to generate a random computer choice
function generateComputerChoice() {
    const choices = ["rock", "paper", "scissors"];
    const randomIndex = Math.floor(Math.random() * choices.length);
    return choices[randomIndex];
}

// Function to determine the game result based on player and computer choices
function determineResult(playerChoice, computerChoice) {
    if (playerChoice === computerChoice) {
        return "draw";
    } else if (
        (playerChoice === "rock" && computerChoice === "scissors") ||
        (playerChoice === "paper" && computerChoice === "rock") ||
        (playerChoice === "scissors" && computerChoice === "paper")
    ) {
        return "win";
    } else {
        return "lose";
    }
}

// Function to display the game result
function displayResult(result, playerChoice, computerChoice) {
    let message = "";
    if (result === "win") {
        message = `You win! ${playerChoice} beats ${computerChoice}.`;
        resultMessage.style.color = "green";
    } else if (result === "lose") {
        message = `You lose! ${computerChoice} beats ${playerChoice}.`;
        resultMessage.style.color = "red";
    } else {
        message = `It's a draw! You both chose ${playerChoice}.`;
        resultMessage.style.color = "black";
    }

    resultMessage.textContent = message;
}

// Add event listeners to the choice buttons
choiceButtons.forEach((button) => {
    button.addEventListener("click", playGame);
});
