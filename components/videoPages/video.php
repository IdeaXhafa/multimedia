<?php $file = $_GET['file'];
// Use the value of $file in your PHP code
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video1</title>
    <link rel="stylesheet" href="./css/video1.css">
    <link rel="stylesheet" href="../../style.css">

    <style>
        .comment-section {
            margin-top: 20px;
            display: flex;
            align-self: center;
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
            cursor: pointer;
        }

        .video-container {
            display: flex;
            margin-top: 100px;
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

        .main-video {
            display: flex;
            flex-direction: column;
            width: 100%;
            max-width: 850px;
        }

        .main-video video {
            height: 100%;
            width: 900px;
            right: 20px;
        }

        .video-content {
            margin-top: 40px;
        }

        /* Fonts */
        body {
            font-family: Arial, sans-serif;
        }

        h1,
        p,
        span {
            font-family: "Times New Roman", serif;
        }

        /* Background */
        body {
            background-color: #f5f5f5;
        }

        /* Media queries for responsiveness */
        @media (max-width: 768px) {
            .video-container {
                flex-direction: column;
                align-items: center;
            }

            .main-video {
                margin-bottom: 20px;
            }

            .main-video video {
                width: 100%;
            }

            .related-videos {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <!-- Sidebar -->
    <?php include '../includeParts/NavBar.php' ?>

    <div class="video-container">
        <div class="main-video">
            <video src="../../videos/<?php echo $file; ?>" controls></video>
            <div class="video-content">
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
                <video src="../../videos/video4.mp4" controls></video>
            </div>
        </div>
    </div>

    <script src="./js/videojs.js"></script>
</body>

</html>