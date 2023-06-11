<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MeTube</title>
    <link rel="stylesheet" href="../../style.css">

    <style>
        .game-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 100px;
        }

        .game-card {
            width: 300px;
            height: 200px;
            margin: 20px;
            padding: 20px;
            border: 1px solid pink;
            border-radius: 8px;
            background-color: #ffe2e6;
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
                <img src="../../components/Kids/images/quiz.png" alt="Game 1" style="width: 100px;height: 100px;">
                <p>General Knowledge Quiz</p>
                <button class="btn btn-primary" onclick="window.location.href = '../../components/Kids/games/Quiz/Quiz.html'">Start</button>
            </div>
            <div class="game-card">
                <img src="../../components/Kids/images/sprite.png" alt="Game 2" style="width: 100px;height: 50px;">
                <p>Description of Game 2</p>
                <button class="btn btn-primary" onclick="window.location.href = '../../components/Kids/games/game/game.html'">Start</button>
            </div>
            <div class="game-card">
                <img src="../../components/Kids/images/tic.png" alt="Game 3" style="width: 100px;height: 50px;">
                <p>Tic Tac Toe</p>
                <button class="btn btn-primary" onclick="window.location.href = '../../components/Kids/games/TicTacToe/tictactoe.html'">Start</button>
            </div>
            <div class="game-card">
                <img src="../../components/Kids/images/numbers.jpeg" alt="Game 3" style="width: 100px;height: 50px;">
                <p>Guess The number</p>
                <button class="btn btn-primary" onclick="window.location.href = '../../components/Kids/games/guess/Guess.html'">Start</button>
            </div>
            <div class="game-card">
                <img src="../../components/Kids/images/rock.jpeg" alt="Game 3" style="width: 100px;height: 50px;">
                <p>Rock Paper Scissors</p>
                <button class="btn btn-primary" onclick="window.location.href = '../../components/Kids/games/rock/Rock.html'">Start</button>
            </div>
            <div class="game-card">
                <img src="../../components/Kids/images/numbers.jpeg" alt="Game 3" style="width: 100px;height: 50px;">
                <p>Ball game</p>
                <button class="btn btn-primary" onclick="window.location.href = '../../components/Kids/games/ball.html'">Start</button>
            </div>
            <div class="game-card">
                <img src="../../components/Kids/images/numbers.jpeg" alt="Game 3" style="width: 100px;height: 50px;">
                <p>idk</p>
                <button class="btn btn-primary" onclick="window.location.href = '../../components/Kids/games/ball.html'">Start</button>
            </div>
            <!-- Add more game cards here -->
        </div>
    </div>


</body>
</html>