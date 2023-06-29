// Create the Pixi application
const app = new PIXI.Application({
    width: 800,
    height: 600,
    backgroundColor: 0x1099bb,
});

// Add the canvas to the HTML document
document.body.appendChild(app.view);

// Load the game assets
//PIXI.Loader.shared.add('pixie', '../../images/cupcake.jpeg').load(setup);

// Define the setup function
function setup() {
    // Create the Pixie sprite from the sprite sheet
    const pixieTextures = PIXI.Loader.shared.resources.pixie.spritesheet.textures;
    const pixie = new PIXI.AnimatedSprite(Object.values(pixieTextures));
    pixie.animationSpeed = 0.1;
    pixie.play();

    // Set the initial position of the Pixie
    pixie.position.set(100, app.screen.height / 2);

    // Add the Pixie to the stage
    app.stage.addChild(pixie);

    // Initialize game variables
    let score = 0;
    let gameOver = false;

    // Game Over text style
    const gameOverStyle = new PIXI.TextStyle({
        fontFamily: 'Arial',
        fontSize: 36,
        fill: 'white',
    });

    // Handle player input
    function handlePlayerInput() {
        const jumpKey = ['Space', 'ArrowUp', 'KeyW'];

        window.addEventListener('keydown', (e) => {
            if (jumpKey.includes(e.code) && !gameOver) {
                // Implement jump logic here
            }
        });
    }

    // Update game state
    function updateGameState() {
        // Update Pixie position and animation

        // Update obstacle and power-up positions

        // Check for collisions with obstacles
        if (!gameOver) {
            // Implement collision detection logic with obstacles
        }

        // Check for collisions with power-ups
        if (!gameOver) {
            // Implement collision detection logic with power-ups
        }

        // Increase score

        // Check for game over condition
        if (gameOver) {
            triggerGameOver();
        }
    }

    // Trigger game over event
    function triggerGameOver() {
        gameOver = true;

        const gameOverText = new PIXI.Text('Game Over', gameOverStyle);
        gameOverText.anchor.set(0.5);
        gameOverText.position.set(app.screen.width / 2, app.screen.height / 2);
        app.stage.addChild(gameOverText);
    }

    // Add game logic and events to the game loop
    function gameLoop() {
        handlePlayerInput();
        updateGameState();

        if (!gameOver) {
            requestAnimationFrame(gameLoop);
        }
    }

    // Call the game loop to start the game
    gameLoop();
}
