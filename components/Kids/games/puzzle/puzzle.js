// Configuration
const rows = 3; // Number of rows in the puzzle
const columns = 3; // Number of columns in the puzzle

// Generate the puzzle pieces
function generatePuzzle() {
    const puzzleContainer = document.getElementById("puzzle-container");
    puzzleContainer.innerHTML = "";

    const totalPieces = rows * columns;
    const pieces = Array.from(Array(totalPieces).keys());

    // Shuffle the pieces
    pieces.sort(() => Math.random() - 0.5);

    for (let i = 0; i < totalPieces; i++) {
        const piece = document.createElement("div");
        piece.classList.add("puzzle-piece");
        piece.textContent = pieces[i] + 1;

        piece.addEventListener("click", function () {
            movePiece(piece, i);
        });

        puzzleContainer.appendChild(piece);
    }
}

// Move the puzzle piece
function movePiece(piece, index) {
    const emptyIndex = getEmptyIndex();

    if (isValidMove(index, emptyIndex)) {
        swapPieces(piece, emptyIndex);

        if (isPuzzleSolved()) {
            alert("Congratulations! You solved the puzzle!");
        }
    }
}

// Get the index of the empty puzzle piece
function getEmptyIndex() {
    const pieces = document.querySelectorAll(".puzzle-piece");

    for (let i = 0; i < pieces.length; i++) {
        if (pieces[i].textContent === "") {
            return i;
        }
    }
}

// Check if the move is valid
function isValidMove(pieceIndex, emptyIndex) {
    const rowDiff = Math.floor(pieceIndex / columns) - Math.floor(emptyIndex / columns);
    const colDiff = pieceIndex % columns - emptyIndex % columns;

    return (
        (rowDiff === 0 && Math.abs(colDiff) === 1) ||
        (colDiff === 0 && Math.abs(rowDiff) === 1)
    );
}

// Swap two puzzle pieces
function swapPieces(piece, index) {
    const emptyIndex = getEmptyIndex();
    const emptyPiece = document.querySelector(`.puzzle-piece:nth-child(${emptyIndex + 1})`);

    emptyPiece.textContent = piece.textContent;
    piece.textContent = "";
}

// Check if the puzzle is solved
function isPuzzleSolved() {
    const pieces = document.querySelectorAll(".puzzle-piece");

    for (let i = 0; i < pieces.length - 1; i++) {
        if (pieces[i].textContent !== i + 1) {
            return false;
        }
    }

    return true;
}

// Shuffle the puzzle pieces
function shufflePuzzle() {
    generatePuzzle();
}

// Event listener for shuffle button
document.getElementById("shuffle-btn").addEventListener("click", shufflePuzzle);

// Generate the initial puzzle
generatePuzzle();
