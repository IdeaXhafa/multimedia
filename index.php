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

      </div>
    </main>
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

</body>

</html>