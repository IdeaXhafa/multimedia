<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video1</title>

    <link rel="stylesheet" href="./css/video1.css">

    <style>
        .search-bar {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
        }

        .search-bar input[type="text"] {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 300px;
        }

        .search-bar button {
            padding: 8px 12px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            margin-left: 10px;
            cursor: pointer;
        }

        .comment-section {
            margin-top: 20px;
        }

        .comment-section textarea {
            width: 700px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .comment-section button {
            padding: 8px 12px;
            background-color: pink;
            color: white;
            border: none;
            border-radius: 4px;
            margin-top: 10px;
            cursor: pointer;
        }

        .video-container {
            display: flex;
        }

        .video-info {
            margin-left: 20px;
            flex-grow: 1;
            margin-bottom: 20px;
            margin-top: -330px;
            position: relative;
            top: -40px;
        }

        .related-videos {
            display: flex;
            flex-direction: column;
            margin-top: 20px;
        }

        .related-video {
            margin-bottom: 20px;
        }

        .related-video video {
            height: 300px;
            width: 400px;
        }

        video {
            margin-right: 100px;
        }

        .video-info-higher {
            margin-bottom: 400px;
        }
    </style>
</head>

<body>

    <div class="search-bar">
        <input type="text" placeholder="Search...">
        <button type="submit">Search</button>
    </div>

    <div class="video-container">

        <video src="../../videos/video5.mp4" controls style="height: 600px; width: 900px; right: 20px;"></video>

        <div class="related-videos">
            <strong>
                <p>Related Content:</p>
            </strong>
            <div class="related-video">
                <video src="../../videos/video1.mp4" controls></video>
            </div>
            <div class="related-video">
                <video src="../../videos/video2.mp4" controls></video>
            </div>
            <div class="related-video">
                <video src="../../videos/video3.mp4" controls></video>
            </div>
        </div>
    </div>

    <div class="video-info video-info-higher">
        <div class="video-info">
            <h1 class="video-title">Light rain for Sleeping, Relax, Study, Insomnia, Reduce Stress.</h1>
            <div class="video-description">
                <p>Rain sounds can help ease anxiety & reduce stress. Heavy rain for relaxing and studying and to help
                    block
                    noises and Noise Cancelling. Use Heavy Rain for Focus, Study, Concentrate, Working, Block Sounds,
                    Block
                    Noises, Meditation, Prayer, Thinking, Mindfulness, Verpasna, Calm, Relax, Peace, Quiet Mind, Sooth
                    baby,
                    relax child, relax pets, relax dog, relax cat, reduce stress, lower anxiety, PTSD, Sleep instantly,
                    Sleep in 3 minutes, stop insomnia, have a good nights sleep, sleep fast, sleep deep, sleep without
                    waking, sleep immediately, sleep in 60 seconds, insomnia relief, insomnia cure, ambience, spa,
                    massage.
                    Share with family & friends to help them feel better too. Enjoy the Heavy Rain...</p>
            </div>
            <div class="video-details">
                <span>Posted by: John Doe</span>
                <span>Views: 100,000</span>
                <span>Posted on: May 21, 2023</span>
            </div>
            <button class="subscribe-button">Subscribe</button>
            <button class="watch-later-button" onclick="saveToWatchLater()">Watch Later</button>
            <div class="like-dislike-buttons">
                <button class="like-button">Like</button>
                <button class="dislike-button">Dislike</button>
            </div>

            <div class="comment-section">
                <textarea placeholder="Add a comment"></textarea>
                <button class="comment-button">Comment</button>
            </div>
        </div>
    </div>

    <script src="./js/videojs.js"></script>
    <script>
        function saveToWatchLater() {
        // Get the video source URL
        var videoSrc = '../../videos/video5.mp4';

        // Create a new XMLHttpRequest object
        var xhr = new XMLHttpRequest();

        // Set up the request
        xhr.open('POST', '../WatchLater/watchlater.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        // Set up the callback function
        xhr.onload = function() {
            if (xhr.status === 200) {
            // Request succeeded, handle the response here if needed
            console.log(xhr.responseText);
            } else {
            // Request failed, handle the error here if needed
            console.error('Request failed. Status:', xhr.status);
            }
        };

        // Send the request with the video source URL in the request body
        xhr.send('videoSrc=' + encodeURIComponent(videoSrc));
        }
    </script>


</body>

</html>