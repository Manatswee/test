<?php include('server.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Web Application for Developing English Language Skills.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish&display=swap" rel="stylesheet" type='text/css'> -->
    <link rel="stylesheet" href="home.css">

    <header class="header">
        <nav class="navbar">
            <br><br>
            <a href="home.php">Home</a>
            <a href="test1.php">Test</a>
            <a href="link.php">Link</a>
            <a href="about.php">About</a>
            <a href="login.php">Logout</a>
        </nav>
    </header>

</head>

<body>
    <div class="background">
        <div class="centering">
            <br><br>
            <div class="articles">

                <article>
                    <figure>
                        <img src="airport.jpg" alt="Preview">
                    </figure>
                    <div class="article-preview">
                        <h2>At the <br> Airport</h2>
                        <p>
                            - Transportation to Chumphon city center. <br> - Price of transportation.<br><br>
                            <center>
                                <a href="home_airport.php" class="read-more" title="เรียนรู้เพิ่มเติม">
                                    <form action="home_airport.php">
                                        <button id="button1">Learn more</button>
                                    </form>
                                </a>
                            </center>
                        </p>
                    </div>
                </article>
                <article>
                    <figure>
                        <img src="recreational activities.jpg" alt="Preview">
                    </figure>
                    <div class="article-preview">
                        <h2>Recreational Activities</h2>
                        <p>
                            Recommend outdoor activities.<br><br><br>
                            <center>
                                <a href="home_recreational.php" class="read-more" title="เรียนรู้เพิ่มเติม">
                                    <form action="home_recreational.php">
                                        <button id="button1">Learn more</button>
                                    </form>
                                </a>
                            </center>
                        </p>
                    </div>
                </article>
                <article>
                    <figure>
                        <img src="tourist attractions.jpg" alt="Preview">
                    </figure>
                    <div class="article-preview">
                        <h2>Tourist Attractions</h2>
                        <p>
                            Recommend places.<br><br><br><br>
                            <center>
                                <a href="home_tourist.php" class="read-more" title="เรียนรู้เพิ่มเติม">
                                    <form action="home_tourist.php">
                                        <button id="button1">Learn more</button>
                                    </form>
                                </a>
                            </center>
                        </p>
                    </div>
                </article>
                <article>
                    <figure>
                        <img src="shopping.jpg" alt="Preview">
                    </figure>
                    <div class="article-preview">
                        <h2>Shopping for Souvenirs</h2>
                        <p>
                            Recommend souvenirs.<br><br><br><br>
                            <center>
                                <a href="home_shopping.php" class="read-more" title="เรียนรู้เพิ่มเติม">
                                    <form action="home_shopping.php">
                                        <button id="button1">Learn more</button>
                                    </form>
                                </a>
                            </center>
                        </p>
                    </div>
                </article>
                <article>
                    <figure>
                        <img src="restaurant.jpg" alt="Preview">
                    </figure>
                    <div class="article-preview">
                        <h2>At the Restaurant</h2>
                        <p>
                            Recommend food and Beverages.<br><br><br>
                            <center>
                                <a href="home_restaurant.php" class="read-more" title="เรียนรู้เพิ่มเติม">
                                    <form action="home_restaurant.php">
                                        <button id="button1">Learn more</button>
                                    </form>
                                </a>
                            </center>
                        </p>
                    </div>
                </article>
            </div>
        </div>
    </div>
    <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button> -->



</body>

</html>