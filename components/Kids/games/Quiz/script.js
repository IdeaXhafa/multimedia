// Quiz questions and answers
const quizData = [
    {
        question: "What is the capital of France?",
        options: ["Paris", "London", "Rome"],
        answer: "Paris"
    },
    {
        question: "Who painted the Mona Lisa?",
        options: ["Pablo Picasso", "Leonardo da Vinci", "Vincent van Gogh"],
        answer: "Leonardo da Vinci"
    },
    {
        question: "What is the name of the fairy in Peter Pan?",
        options: ["Idea", "Tinkerbell", "Cinderella"],
        answer: "Tinkerbell"
    },
    {
        question: "Is Pluto a planet?",
        options: ["Yes", "No"],
        answer: "No"
    },
    {
        question: "What color are Smurfs?",
        options: ["Blue", "Green", "Yellow"],
        answer: "Blue"
    },
];

const quizContainer = document.getElementById("quiz-container");
const questionContainer = document.getElementById("question-container");
const optionsContainer = document.getElementById("options-container");
const submitButton = document.getElementById("submit-btn");
const resultContainer = document.getElementById("result-container");

let currentQuestion = 0;
let score = 0;

// Function to load the next question
function loadQuestion() {
    const currentQuizData = quizData[currentQuestion];
    questionContainer.innerText = currentQuizData.question;

    optionsContainer.innerHTML = "";

    for (let i = 0; i < currentQuizData.options.length; i++) {
        const option = currentQuizData.options[i];

        const radioBtn = document.createElement("input");
        radioBtn.type = "radio";
        radioBtn.name = "answer";
        radioBtn.value = option;

        const label = document.createElement("label");
        label.innerText = option;

        const optionContainer = document.createElement("div");
        optionContainer.appendChild(radioBtn);
        optionContainer.appendChild(label);

        optionsContainer.appendChild(optionContainer);
    }
}

// Function to check the user's answer
function checkAnswer() {
    const selectedOption = document.querySelector('input[name="answer"]:checked');
    if (selectedOption) {
        const userAnswer = selectedOption.value;
        const currentQuizData = quizData[currentQuestion];

        if (userAnswer.toLowerCase() === currentQuizData.answer.toLowerCase()) {
            score++;
        }

        currentQuestion++;

        if (currentQuestion < quizData.length) {
            loadQuestion();
        } else {
            showResult();
        }
    }
}

// Function to show the quiz result
function showResult() {
    quizContainer.style.display = "none";
    resultContainer.style.display = "block";
    resultContainer.innerText = `You scored ${score} out of ${quizData.length}`;
}

// Event listener for submit button
submitButton.addEventListener("click", checkAnswer);

// Load the first question
loadQuestion();
