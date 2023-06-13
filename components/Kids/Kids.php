<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MeTube</title>
    <link rel="stylesheet" href="../../style.css">

    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 100px;
        }

        .game-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 70px;
        }

        .game-card {
            width: 300px;
            height: 400px;
            margin: 20px;
            padding: 20px;
            border-radius: 8px;
            background-color: #fff;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            filter: brightness(1.2);
        }

        .game-card h3 {
            font-size: 20px;
            margin-bottom: 10px;
        }

        .game-card img {
            width: 100%;
            height: 200px;
            margin-bottom: 20px;
            background-size: cover;
        }

        .game-card p {
            margin-bottom: 10px;
            color: #555;
        }

        .btn {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 8px 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #0069d9;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php include '../../components/includeParts/NavBar.php' ?>
        <div class="game-container">
            <div class="game-card">
                <img src="../../components/Kids/images/quiz.png" alt="Game 1">
                <h3>General Knowledge Quiz</h3>
                <p>Test your knowledge with this fun quiz!</p>
                <button class="btn" onclick="window.location.href = '../../components/Kids/games/Quiz/Quiz.html'">Start</button>
            </div>
            <div class="game-card">
                <img src="../../components/Kids/images/sprite.png" alt="Game 2">
                <h3>Game 2</h3>
                <p>Description of Game 2</p>
                <button class="btn" onclick="window.location.href = '../../components/Kids/games/game/game.html'">Start</button>
            </div>
            <div class="game-card">
                <img src="../../components/Kids/images/tic.png" alt="Game 3">
                <h3>Tic Tac Toe</h3>
                <p>Play the classic game of Tic Tac Toe!</p>
                <button class="btn" onclick="window.location.href = '../../components/Kids/games/TicTacToe/tictactoe.html'">Start</button>
            </div>
            <div class="game-card">
                <img src="../../components/Kids/images/numbers.png" alt="Game 4">
                <h3>Guess The Number</h3>
                <p>Try to guess the secret number!</p>
                <button class="btn" onclick="window.location.href = '../../components/Kids/games/guess/Guess.html'">Start</button>
            </div>
            <div class="game-card">
                <img src="../../components/Kids/images/rock.png" alt="Game 5">
                <h3>Rock Paper Scissors</h3>
                <p>Play the classic game of Rock Paper Scissors!</p>
                <button class="btn" onclick="window.location.href = '../../components/Kids/games/rock/Rock.html'">Start</button>
            </div>
            <div class="game-card">
                <img src="../../components/Kids/images/blue-ball.png" alt="Game 6">
                <h3>Ball Game</h3>
                <p>Play the exciting ball game!</p>
                <button class="btn" onclick="window.location.href = '../../components/Kids/games/ball.html'">Start</button>
            </div>
            <div class="game-card">
                <img src="../../components/Kids/images/snake.png" alt="Game 7">
                <h3>Snake</h3>
                <p>Control the snake and eat the apples!</p>
                <button class="btn" onclick="window.location.href = '../../components/Kids/games/Snake.html'">Start</button>
            </div>
            <div class="game-card">
                <img src="../../components/Kids/images/tetris.png" alt="Game 8">
                <h3>Tetris</h3>
                <p>Play the classic game of Tetris!</p>
                <button class="btn" onclick="window.location.href = '../../components/Kids/games/Tetris.html'">Start</button>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/pixi.js/5.2.4/pixi.min.js"></script>
    <script>
    // Create a Pixi.js application
    const app = new PIXI.Application();

    document.body.appendChild(app.view);

    // Load the images for game cards
    PIXI.Loader.shared
    //   .add("game-card-1", "../../components/Kids/images/quiz.png")
    //   .add("game-card-2", "../../components/Kids/images/sprite.png")
      // Add more loaders for other game cards
      .load(setup);

    // Setup function to create game cards and apply color adjustment
    function setup() {
      // Create the game cards
      const gameCard1 = createGameCard("game-card-1", 0x0000FF); // Blue color adjustment
      const gameCard2 = createGameCard("game-card-2", 0xFF0000); // Red color adjustment

      // Add the game cards to the stage
      app.stage.addChild(gameCard1, gameCard2);
    }

    // Function to create a game card sprite with color adjustment
    function createGameCard(id, color) {
      const gameCardTexture = PIXI.Loader.shared.resources[id].texture;

      // Create a sprite with the game card texture
      const gameCardSprite = new PIXI.Sprite(gameCardTexture);
      gameCardSprite.width = 300;
      gameCardSprite.height = 200;
      gameCardSprite.interactive = true;

      // Apply color adjustment using a color matrix filter
      const colorMatrix = new PIXI.filters.ColorMatrixFilter();
      colorMatrix.matrix = [
        1, 0, 0, 0, color >> 16 & 0xFF, // Red
        0, 1, 0, 0, color >> 8 & 0xFF, // Green
        0, 0, 1, 0, color & 0xFF, // Blue
        0, 0, 0, 1, 0 // Alpha
      ];
      gameCardSprite.filters = [colorMatrix];

      // Add click event listener
      gameCardSprite.on("click", () => {
        // Handle click event
        console.log(`Clicked on ${id}`);
      });

      return gameCardSprite;
    }
  </script>
</body>

</html>
