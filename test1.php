<?php include('server.php'); ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Application for Developing English Language Skills.</title>
    <link rel="stylesheet" href="test1.css">
</head>

<body>
    <h1><br>Test</h1>
    <form action="home.php">
        <div class="centering">
            <div class="articles">
                <article>
                    <figure>
                        <img src="test.jpg" alt="Preview">
                    </figure>
                    <div class="article-preview">
                        <h2>Pre-Test</h2>
                        <p>
                            Praesent in mauris eu tortor porttitor accumsan. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent in mauris eu tortor porttitor accumsan.
                            <a href="test2.php" class="read-more" title="แบบทดสอบก่อนเรียน">
                                Test
                                </a>
                        </p>
                    </div>
                </article>
                <article>
                    <figure>
                        <img src="test.jpg" alt="Preview">
                    </figure>
                    <div class="article-preview">
                        <h2>Post-Test</h2>
                        <p>
                            Praesent in mauris eu tortor porttitor accumsan. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent in mauris eu tortor porttitor accumsan.
                            <a href="test3.php" class="read-more" title="แบบทดสอบหลังเรียน">
                                Test
                                </a>
                        </p>
                    </div>
                </article>

            </div>
        </div>
        <br><button>Back</button>
    </form>
</body>

</html>