<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>MeTube</title>
  <link rel="stylesheet" href="style.css" />

  <style>
    .video-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      margin-top: 100px;
    }
    * {box-sizing:border-box}

    /* Slideshow container */
    .slideshow-container {
      max-width: 1000px;
      position: relative;
      margin: auto;
    }

    /* Hide the images by default */
    .mySlides {
      display: none;
    }

    /* Next & previous buttons */
    .prev, .next {
      cursor: pointer;
      position: absolute;
      top: 50%;
      width: auto;
      margin-top: -22px;
      padding: 16px;
      color: white;
      font-weight: bold;
      font-size: 18px;
      transition: 0.6s ease;
      border-radius: 0 3px 3px 0;
      user-select: none;
    }

    /* Position the "next button" to the right */
    .next {
      right: 0;
      border-radius: 3px 0 0 3px;
    }

    /* On hover, add a black background color with a little bit see-through */
    .prev:hover, .next:hover {
      background-color: rgba(0,0,0,0.8);
    }

    /* Caption text */
    .text {
      color: #f2f2f2;
      font-size: 15px;
      padding: 8px 12px;
      position: absolute;
      bottom: 8px;
      width: 100%;
      text-align: center;
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
      cursor: pointer;
      height: 15px;
      width: 15px;
      margin: 0 2px;
      background-color: #bbb;
      border-radius: 50%;
      display: inline-block;
      transition: background-color 0.6s ease;
    }

    .active, .dot:hover {
      background-color: #717171;
    }

    /* Fading animation */
    .fade {
      animation-name: fade;
      animation-duration: 1.5s;
    }

    @keyframes fade {
      from {opacity: .4}
      to {opacity: 1}
    }
  </style>
</head>

<body>
  <div class="container">
    <!-- Sidebar -->
    <?php include './components/includeParts/NavBar.php' ?>

    <!-- Main content -->
    <main class="main-content">
      <div class="video-container" id="photoContainer">
        <div class="card">
          <a href="./components/videoPages/video.php?file=video1.mp4">
            <div class="card-image">
              <img src="./images/photo1.png">
            </div>
            <div class="category"> Illustration </div>
            <div class="heading"> Light rain for Sleeping, Relax, Study, Insomnia, Reduce Stress
              <div class="author"> 10M views 5 years ago</div>
            </div>
          </a>
        </div>


        <div class="card">
          <a href="./components/videoPages/video.php?file=video2.mp4">
            <div class="card-image">
              <img src="./images/photo2.png">
            </div>
            <div class="category"> Illustration </div>
            <div class="heading"> Calming nature sounds
              <div class="author"> 10M views 5 years ago</div>
            </div>
          </a>
        </div>

        <div class="card">
          <a href="./components/videoPages/video.php?file=video3.mp4">
            <div class="card-image">
              <img src="./images/photo3.png">
            </div>
            <div class="category"> Illustration </div>
            <div class="heading"> Calming ocean waves for sleeping
              <div class="author"> 10M views 5 years ago</div>
            </div>
          </a>
        </div>

        <div class="card">
          <a href="./components/videoPages/video.php?file=video4.mp4">
            <div class="card-image">
              <img src="./images/photo4.png">
            </div>
            <div class="category"> Illustration </div>
            <div class="heading"> Guitar sounds for 20 minutes
              <div class="author"> 10M views 5 years ago</div>
            </div>
          </a>
        </div>

        <div class="card">
          <a href="./components/videoPages/video.php?file=video5.mp4">
            <div class="card-image">
              <img src="./images/photo5.png">
            </div>
            <div class="category"> Illustration </div>
            <div class="heading"> Guitar Mozart Play Canon 8d
              <div class="author"> 10M views 5 years ago</div>
            </div>
          </a>
        </div>

        <div class="card">
          <a href="./components/videoPages/video.php?file=video6.mp4">
            <div class="card-image">
              <img src="./images/photo6.png">
            </div>
            <div class="category"> Illustration </div>
            <div class="heading"> Calming vinyl sounds
              <div class="author"> 10M views 5 years ago</div>
            </div>
          </a>
        </div>

        <div class="card">
          <a href="./components/videoPages/video.php?file=cat.mp4">
            <div class="card-image">
              <img src="./images/cat.png">
            </div>
            <div class="category"> Illustration </div>
            <div class="heading"> Cute Cat Video
              <div class="author"> 10M views 5 years ago</div>
            </div>
          </a>
        </div>

        <div class="card">
          <a href="./components/videoPages/video.php?file=sleep.mp4">
            <div class="card-image">
              <img src="./images/sleep.png">
            </div>
            <div class="category"> Illustration </div>
            <div class="heading"> Cat Sleeping
              <div class="author"> 10M views 5 years ago</div>
            </div>
          </a>
        </div>

        <div class="card">
          <a href="./components/videoPages/video.php?file=city.mp4">
            <div class="card-image">
              <img src="./images/night.png">
            </div>
            <div class="category"> Illustration </div>
            <div class="heading"> City night life
              <div class="author"> 10M views 5 years ago</div>
            </div>
          </a>
        </div>

        <div class="card">
          <a href="./components/videoPages/video.php?file=clothing.mp4">
            <div class="card-image">
              <img src="./images/clothes.png">
            </div>
            <div class="category"> Illustration </div>
            <div class="heading"> Looking for clothes
              <div class="author"> 10M views 5 years ago</div>
            </div>
          </a>
        </div>

        <div class="card">
          <a href="./components/videoPages/video.php?file=paris.mp4">
            <div class="card-image">
              <img src="./images/paris.png">
            </div>
            <div class="category"> Illustration </div>
            <div class="heading"> Paris Eifel Tower lights
              <div class="author"> 10M views 5 years ago</div>
            </div>
          </a>
        </div>

        <div class="card">
          <a href="./components/videoPages/video.php?file=vienna.mp4">
            <div class="card-image">
              <img src="./images/vienna.png">
            </div>
            <div class="category"> Illustration </div>
            <div class="heading"> Vienna, Austria
              <div class="author"> 10M views 5 years ago</div>
            </div>
          </a>
        </div>

      </div>
    </main>
  </div>

    <!-- Slideshow container -->
    <div class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
      <div class="numbertext">1 / 3</div>
      <img src="./images/vienna.png" style="width:100%">
    </div>

    <div class="mySlides fade">
      <div class="numbertext">2 / 3</div>
      <img src="./images/photo2.png" style="width:100%">
    </div>

    <div class="mySlides fade">
      <div class="numbertext">3 / 3</div>
      <img src="./images/photo3.png" style="width:100%">
    </div>

    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>

    <!-- The dots/circles -->
    <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
    </div>

  <script src="https://unpkg.com/page/page.js"></script>
  <script src="node_modules/pixi.js/dist/pixi.min.js"></script>
  <script>
    document.getElementById("searchInput").addEventListener("input", function() {
      var searchInput = this.value.toLowerCase();
      var photoContainer = document.getElementById("photoContainer");
      var cardElements = photoContainer.getElementsByClassName("card");

      // Loop through each card element
      for (var i = 0; i < cardElements.length; i++) {
        var cardElement = cardElements[i];
        var headingElement = cardElement.querySelector(".heading");
        var headingText = headingElement.textContent.toLowerCase();

        // Check if the search input is included in the heading text
        if (headingText.includes(searchInput)) {
          cardElement.style.display = "block";
        } else {
          cardElement.style.display = "none";
        }
      }
    });
  </script>

  <script>
    let slideIndex = 1;
    showSlides(slideIndex);

    // Next/previous controls
    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    // Thumbnail image controls
    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("dot");
      if (n > slides.length) {slideIndex = 1}
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " active";
    }
  </script>

</body>

</html>