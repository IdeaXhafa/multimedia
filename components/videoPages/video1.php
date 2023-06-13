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
            <button class="like-button">Watch Later</button>
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
        // Get the subscribe button
        const subscribeButton = document.querySelector('.subscribe-button');

        // Add event listener to the subscribe button
        subscribeButton.addEventListener('click', function () {
            // Get the video source
            const videoSource = document.querySelector('video').src;

            // Make an AJAX request or perform any other necessary action to save the video information
            // to your subscription list, e.g., using fetch or sending a POST request to your server

            // Example AJAX request using fetch
            fetch('./Subscriptions/subscription.php', {
                method: 'POST',
                body: JSON.stringify({ videoSource }),
                headers: {
                    'Content-Type': 'application/json'
                }
            })
                .then(response => response.json())
                .then(data => {
                    console.log('Video added to subscription list:', data);
                    // You can handle the response from the server here
                })
                .catch(error => {
                    console.error('Error:', error);
                    // Handle the error case
                });
        });
    </script>

</body>

</html>