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
      <!-- Mos e fshij se spo bon sidebar tanaj for some reason -->
      <div class="search-bar">
        <input type="text" id="searchInput" placeholder="Search..." />
        <button type="submit" id="searchButton">Search</button>
      </div>

      <!-- <video id="myVideo" autoplay style="height: 300px; width: 300px;">
                    <source src="/videos/video1.mp4" type="video/mp4">
                </video> -->
      <div class="video-container" id="photoContainer">

        <div class="card">
          <a href="./components/videoPages/video1.php">
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
          <a href="./components/videoPages/video1.php">
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
          <a href="./components/videoPages/video1.php">
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
          <a href="./components/videoPages/video1.php">
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
          <a href="./components/videoPages/video1.php">
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
          <a href="./components/videoPages/video1.php">
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
          <a href="./components/videoPages/video1.php">
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
    document
      .getElementById("searchButton")
      .addEventListener("click", function() {
        var searchInput = document
          .getElementById("searchInput")
          .value.toLowerCase();
        var photoContainer = document.getElementById("photoContainer");
        var photoElements = photoContainer.getElementsByTagName("a");

        // Loop through each photo element
        for (var i = 0; i < photoElements.length; i++) {
          var photoElement = photoElements[i];
          var photoText = photoElement.textContent.toLowerCase();

          // Check if the search input is included in the photo text
          if (photoText.includes(searchInput)) {
            photoElement.style.display = "flex";
          } else {
            photoElement.style.display = "none";
          }
        }
      });
  </script>
</body>

</html>