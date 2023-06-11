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
        <a href="./components/videoPages/video1.php">
          <img src="./images/photo1.png" alt="Video 1" style="height: 300px; width: 400px" />
          <p style="text-decoration: none; color: black">
            Light rain for Sleeping, Relax, Study, Insomnia, Reduce Stress
          </p>
          <h6>10M views 5 years ago</h6>
        </a>
        <a href="./components/videoPages/video2.php">
          <img src="./images/photo2.png" alt="Video 2" style="height: 300px; width: 400px" />
          <p>Calming nature sounds</p>
        </a>
        <a href="./components/videoPages/video2.php">
          <img src="./images/photo3.png" alt="Video 3" style="height: 300px; width: 400px" />
          <p>Calming ocean waves for sleeping</p>
        </a>
        <a href="./components/videoPages/video2.php">
          <img src="./images/photo4.png" alt="Video 4" style="height: 300px; width: 400px" />
          <p>Guitar sounds for 20 minutes</p>
        </a>
        <a href="./components/videoPages/video2.php">
          <img src="./images/photo5.png" alt="Video 5" style="height: 300px; width: 400px" />
          <p>Guitar Mozart Play Canon 8d</p>
        </a>
        <a href="./components/videoPages/video2.php">
          <img src="./images/photo6.png" alt="Video 6" style="height: 300px; width: 400px" />
          <p>Calming vinyl sounds</p>
        </a>
      </div>
      <!-- <div class="video-container">
                    <video src="/videos/video1.mp4" controls style="height: 400px; width: 400px;"></video>
                    <video src="/videos/video2.mp4" controls style="height: 400px; width: 400px;"></video>
                    <video src="/videos/video3.mp4" controls style="height: 400px; width: 400px;"></video>
                    <video src="/videos/video4.mp4" controls style="height: 400px; width: 400px;"></video>
                    <video src="/videos/video5.mp4" controls style="height: 400px; width: 400px;"></video>
                    <video src="/videos/video6.mp4" controls style="height: 400px; width: 400px;"></video>
                </div> -->
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