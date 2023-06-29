<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../../style.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pixi.js/5.3.3/pixi.min.js"></script>
  
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      font-family: Verdana, sans-serif;
    }

    .mySlides {
      display: none;
    }

    img {
      vertical-align: middle;
    }

    /* Slideshow container */
    .slideshow-container {
      max-width: 1000px;
      position: relative;
      margin: auto;
      margin-top: 100px;
      margin-left: 300px;
    }

    /* Number text (1/3 etc) */
    .numbertext {
      color: #f2f2f2;
      font-size: 12px;
      padding: 8px 12px;
      position: absolute;
      top: 0;
    }

    /* The dots/bullets/indicators */
    .dot {
      height: 15px;
      width: 15px;
      margin: 0 2px;
      background-color: #bbb;
      border-radius: 50%;
      display: inline-block;
      transition: background-color 0.6s ease;
    }

    .active {
      background-color: #717171;
    }

    /* Fading animation */
    .fade {
      animation-name: fade;
      animation-duration: 1.5s;
    }

    .related-videos {
      display: flex;
      flex-direction: column;
      margin-top: -620px;
      margin-right: 400px;
    }

    @keyframes fade {
      from {
        opacity: .4
      }

      to {
        opacity: 1
      }
    }

    /* On smaller screens, decrease text size */
    @media only screen and (max-width: 300px) {
      .text {
        font-size: 11px
      }
    }
  </style>
</head>

<body>
  <div class="slideshow-container">
    <?php include '../../components/includeParts/NavBar.php' ?>
    <div class="mySlides fade">
      <div class="numbertext">1 / 3</div>
      <img src="ocean1.jpeg" style="width: 400px; height: 600px;">
    </div>

    <div class="mySlides fade">
      <div class="numbertext">2 / 3</div>
      <img src="ocean2.jpeg" style="width: 400px; height: 600px;">
    </div>

    <div class="mySlides fade">
      <div class="numbertext">3 / 3</div>
      <img src="ocean3.jpeg" style="width: 400px; height: 600px;">
    </div>

  </div>
  <br>

  <div style="text-align:center;margin-left: -400px;">
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
  </div>

  <div class="related-videos">
    <strong>
      <p style="text-align: right;">Your watch later list:</p>
    </strong>
  </div>

  <script src="slider.js"></script>

  <!-- <script>
    const app = new PIXI.Application({ antialias: true, backgroundColor: 0xFFFFFF });
    document.body.insertBefore(app.view, document.body.firstChild);

    const graphics = new PIXI.Graphics();

    graphics.lineStyle(2, 0xFFFFFF);
    graphics.beginFill(0x35CC5A, 1);
    graphics.drawStar(0, 50, 5, 50);
    graphics.endFill();

    graphics.x = 60;
    graphics.y = 90;

    app.stage.addChild(graphics);
  </script> -->
</body>

</html>
