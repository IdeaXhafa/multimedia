// Create a Pixi.js application
const app = new PIXI.Application({
    width: 300,
    height: 300,
    backgroundColor: 0xFFFFFF,
});

document.body.appendChild(app.view);

// Game variables
const board = [
    ['', '', ''],
    ['', '', ''],
    ['', '', ''],
];
let currentPlayer = 'X';

// Create the game board
const cellSize = 100;
const cells = [];

for (let row = 0; row < 3; row++) {
    for (let col = 0; col < 3; col++) {
        const cell = new PIXI.Graphics();
        cell.lineStyle(2, 0x000000);
        cell.drawRect(col * cellSize, row * cellSize, cellSize, cellSize);
        cell.interactive = true;
        cell.buttonMode = true;

        cell.on('pointerdown', () => handleCellClick(row, col));

        app.stage.addChild(cell);
        cells.push(cell);
    }
}

// Function to handle cell clicks
function handleCellClick(row, col) {
    if (board[row][col] === '') {
        board[row][col] = currentPlayer;

        const mark = new PIXI.Text(currentPlayer, { fontSize: 60, fill: 0x000000 });
        mark.anchor.set(0.5);
        mark.position.set((col + 0.5) * cellSize, (row + 0.5) * cellSize);

        app.stage.addChild(mark);

        cells[row * 3 + col].removeListener('pointerdown', handleCellClick);

        currentPlayer = currentPlayer === 'X' ? 'O' : 'X';

        // Check for a win or draw condition
        const winner = checkWinner();
        if (winner) {
            console.log(`Player ${winner} wins!`);
            disableCellClicks();
        } else if (isBoardFull()) {
            console.log("It's a draw!");
            disableCellClicks();
        }
    }
}

// Function to check for a win condition
function checkWinner() {
    const winningConditions = [
        [[0, 0], [0, 1], [0, 2]],
        [[1, 0], [1, 1], [1, 2]],
        [[2, 0], [2, 1], [2, 2]],
        [[0, 0], [1, 0], [2, 0]],
        [[0, 1], [1, 1], [2, 1]],
        [[0, 2], [1, 2], [2, 2]],
        [[0, 0], [1, 1], [2, 2]],
        [[0, 2], [1, 1], [2, 0]]
    ];

    for (const condition of winningConditions) {
        const [a, b, c] = condition;
        const [rowA, colA] = a;
        const [rowB, colB] = b;
        const [rowC, colC] = c;

        if (
            board[rowA][colA] !== '' &&
            board[rowA][colA] === board[rowB][colB] &&
            board[rowA][colA] === board[rowC][colC]
        ) {
            return board[rowA][colA];
        }
    }

    return null;
}

// Function to check if the board is full
function isBoardFull() {
    for (const row of board) {
        if (row.includes('')) {
            return false;
        }
    }

    return true;
}

// Function to disable cell clicks
function disableCellClicks() {
    for (const cell of cells) {
        cell.interactive = false;
        cell.buttonMode = false;
    }
}
