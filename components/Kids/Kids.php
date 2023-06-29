<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (isset($_SESSION['username'])) {
    // Check the age value
    $age = $_SESSION['age'];
    if ($age < 6) {
        header('location: ../../index.php');
    }
}

$games = [
    [
        "imgSrc" => "../../components/Kids/images/quiz.png",
        "title" => "General Knowledge Quiz",
        "description" => "Test your knowledge with this fun quiz!",
        "onClick" => "../../components/Kids/games/Quiz/Quiz.html"
    ],
    [
        "imgSrc" => "../../components/Kids/images/sprite.png",
        "title" => "Game 2",
        "description" => "Description of Game 2",
        "onClick" => "../../components/Kids/games/game/game.html"
    ],
    [
        "imgSrc" => "../../components/Kids/images/tic.png",
        "title" => "Tic Tac Toe",
        "description" => "Play the classic game of Tic Tac Toe!",
        "onClick" => "../../components/Kids/games/TicTacToe/tictactoe.html"
    ],
    [
        "imgSrc" => "../../components/Kids/images/numbers.png",
        "title" => "Guess The Number",
        "description" => "Try to guess the secret number!",
        "onClick" => "../../components/Kids/games/guess/Guess.html"
    ],
    [
        "imgSrc" => "../../components/Kids/images/rock.png",
        "title" => "Rock Paper Scissors",
        "description" => "Play the classic game of Rock Paper Scissors!",
        "onClick" => "../../components/Kids/games/rock/Rock.html"
    ],
    [
        "imgSrc" => "../../components/Kids/images/blue-ball.png",
        "title" => "Ball Game",
        "description" => "Play the exciting ball game!",
        "onClick" => "../../components/Kids/games/ball.html"
    ],
    [
        "imgSrc" => "../../components/Kids/images/snake.png",
        "title" => "Snake",
        "description" => "Control the snake and eat the apples!",
        "onClick" => "../../components/Kids/games/Snake.html"
    ],
    [
        "imgSrc" => "../../components/Kids/images/tetris.png",
        "title" => "Tetris",
        "description" => "Play the classic game of Tetris!",
        "onClick" => "../../components/Kids/games/Tetris.html"
    ],
    [
        "imgSrc" => "../../components/Kids/images/run.png",
        "title" => "Run Pixie Run!",
        "description" => "Play the classic game of Run Pixie Run!",
        "onClick" => "../../components/Kids/games/run/Run.html"
    ],
    [
        "imgSrc" => "../../components/Kids/images/run.png",
        "title" => "Run Pixie Run!",
        "description" => "Play the classic game of Run Pixie Run!",
        "onClick" => "../../components/Kids/games/smth.html"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MeTube</title>
    <link rel="stylesheet" href="../../style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pixi.js/5.3.3/pixi.min.js"></script>

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
            <?php
            foreach ($games as $game) {
                echo '<div class="game-card">';
                echo '<img src="' . $game["imgSrc"] . '" alt="' . $game["title"] . '">';
                echo '<h3>' . $game["title"] . '</h3>';
                echo '<p>' . $game["description"] . '</p>';
                echo '<button class="btn" onclick="window.location.href = \'' . $game["onClick"] . '\'">Start</button>';
                echo '</div>';
            }
            ?>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/pixi.js/5.2.4/pixi.min.js"></script>
    <script>
        const app = new PIXI.Application({ antialias: true, backgroundColor: 0xF8F9FA });
        document.body.appendChild(app.view);

        const graphics = new PIXI.Graphics();

        // Draw star
        graphics.lineStyle(2, 0xFFFFFF);
        graphics.beginFill(0xFFCC5A, 1);
        graphics.drawStar(80, 510, 7, 50);
        graphics.endFill();

        
        // Create text
        const textStyle = new PIXI.TextStyle({
        fontFamily: 'Arial',
        fontSize: 16,
        fill: '#000000',
        });

        const text = new PIXI.Text('Made by Idea & Tali !', textStyle);
        text.x = 150; // Adjust the x-coordinate of the text
        text.y = 490; // Adjust the y-coordinate of the text

        app.stage.addChild(graphics, text);

    </script>
</body>

</html>