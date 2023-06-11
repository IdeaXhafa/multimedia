<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MeTube</title>
    <link rel="stylesheet" href="../../style.css">

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      integrity="sha384-pzLF8o8R/W9GL5gqjSvLUnS2jB8ih5rUjVw5WfySi5StV9gvRMu4w8Qj84b4vW3X"
      crossorigin="anonymous"
    >
    
    <style>
        .game-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 100px;
        }

        .game-card {
            width: 400px;
            height: 300px;
            margin: 20px;
            padding: 20px;
            border: 1px solid pink;
            border-radius: 8px;
            background-color: #fff0f3;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .game-card h3 {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .game-card img {
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php include '../../components/includeParts/NavBar.php' ?>
        <div class="game-container">
            <div class="game-card">
                <img src="../../components/Kids/images/quiz.png" alt="Game 1" style="width: 200px;height: 300px;">
                <p>General Knowledge Quiz</p>
                <button class="btn btn-primary" onclick="window.location.href = '../../components/Kids/games/Quiz/Quiz.html'">Start</button>
            </div>
            <div class="game-card">
                <img src="../../components/Kids/images/sprite.png" alt="Game 2" style="width: 200px;height: 300px;">
                <p>game</p>
                <button class="btn btn-primary" onclick="window.location.href = '../../components/Kids/games/game/game.html'">Start</button>
            </div>
            <div class="game-card">
                <img src="../../components/Kids/images/tic.png" alt="Game 3" style="width: 300px;height: 300px;">
                <p>Tic Tac Toe</p>
                <button class="btn btn-primary" onclick="window.location.href = '../../components/Kids/games/TicTacToe/tictactoe.html'">Start</button>
            </div>
            <div class="game-card">
                <img src="../../components/Kids/images/numbers.png" alt="Game 3" style="width: 200px;height: 300px;">
                <p>Guess The number</p>
                <button class="btn btn-primary" onclick="window.location.href = '../../components/Kids/games/guess/Guess.html'">Start</button>
            </div>
            <div class="game-card">
                <img src="../../components/Kids/images/rock.png" alt="Game 3" style="width: 200px;height: 300px;">
                <p>Rock Paper Scissors</p>
                <button class="btn btn-primary" onclick="window.location.href = '../../components/Kids/games/rock/Rock.html'">Start</button>
            </div>
            <div class="game-card">
                <img src="../../components/Kids/images/blue-ball.png" alt="Game 3" style="width: 200px;height: 300px;">
                <p>Ball game</p>
                <button class="btn btn-primary" onclick="window.location.href = '../../components/Kids/games/ball.html'">Start</button>
            </div>
            <div class="game-card">
                <img src="../../components/Kids/images/snake.png" alt="Game 3" style="width: 200px;height: 300px;">
                <p>Snake</p>
                <button class="btn btn-primary" onclick="window.location.href = '../../components/Kids/games/Snake.html'">Start</button>
            </div>
            <div class="game-card">
                <img src="../../components/Kids/images/tetris.png" alt="Game 3" style="width: 200px;height: 300px;">
                <p>Tetris</p>
                <button class="btn btn-primary" onclick="window.location.href = '../../components/Kids/games/Tetris.html'">Start</button>
            </div>
            
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-kDeHm1D8MxWtiXyfWlCklGHT0nRRaQ0R75RWFR+oGboz+53b3gdflC3pWq31OANa" crossorigin="anonymous"></script>
</body>
</html>