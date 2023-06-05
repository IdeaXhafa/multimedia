// Create a Pixi.js application
const app = new PIXI.Application({
    width: 800,
    height: 600,
    backgroundColor: 0xff0000,
});

// Add the Pixi.js canvas to the HTML body
document.body.appendChild(app.view);

// Load the sprite image
PIXI.Loader.shared.add('sprite', './sprite.png').load(setup);

function setup() {
    // Create a sprite from the loaded image
    const sprite = new PIXI.Sprite(PIXI.Loader.shared.resources['sprite'].texture);

    // Set the initial position and velocity of the sprite
    sprite.x = 200;
    sprite.y = 200;
    sprite.vx = 1;
    sprite.vy = 1;

    // Add the sprite to the stage
    app.stage.addChild(sprite);

    // Start the game loop
    app.ticker.add(gameLoop);
}

function gameLoop(delta) {
    // Move the sprite
    const sprite = app.stage.children[0];
    sprite.x += sprite.vx * delta;
    sprite.y += sprite.vy * delta;

    // Reverse the sprite's direction if it reaches the screen boundaries
    if (sprite.x <= 0 || sprite.x >= app.renderer.width - sprite.width) {
        sprite.vx *= -1;
    }
    if (sprite.y <= 0 || sprite.y >= app.renderer.height - sprite.height) {
        sprite.vy *= -1;
    }
}
