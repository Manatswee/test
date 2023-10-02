<?php include('server.php'); ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home_tourist3.css">
    <title>Web Application for Developing English Language Skills.</title>
</head>

<body>
    <br><br>
    <h1>Practice</h1>

    <div class="quiz-container">
        <h2>Comprehension Question (4 questions 4 multiple choices)</h2>
        <form id="quiz-form">
            <p>Question 1: What the information does the tourist need?</p>
            <label>
                <input type="radio" name="q1" value="1"> 1) recreational activities.
            </label>
            <label>
                <input type="radio" name="q1" value="2"> 2) recommended food.
            <label>
                <input type="radio" name="q1" value="3"> 3) recommended places to visit.
            </label>
            <label>
                <input type="radio" name="q1" value="4"> 4) how to get a public transportation.
            </label>

            <p>Question 2: Which cultural attractions recommended by the tourist information staff?</p>
            <label>
                <input type="radio" name="q2" value="1"> 1) Thung Wua laen.
            </label>
            <label>
                <input type="radio" name="q2" value="2"> 2) Had Sai Ri.
            </label>
            <label>
                <input type="radio" name="q2" value="3"> 3) Chumphon national museum.
            </label>
            <label>
                <input type="radio" name="q1" value="4"> 4) Khao Din Sor
            </label>

            <p>Question 3: How long does the tourist want to stay?</p>
            <label>
                <input type="radio" name="q3" value="1"> 1) one day.
            </label>
            <label>
                <input type="radio" name="q3" value="2"> 2) one month.
            </label>
            <label>
                <input type="radio" name="q3" value="3"> 3) one month and one day.
            </label>
            <label>
                <input type="radio" name="q1" value="4"> 4) two months.
            </label>

            <p>Question 4: what does the tourist want to do?</p>
            <label>
                <input type="radio" name="q4" value="1"> 1) Visit only natural attractions.
            </label>
            <label>
                <input type="radio" name="q4" value="2"> 2) Visit only cultural attractions.
            </label>
            <label>
                <input type="radio" name="q4" value="3"> 3) Visit both natural and cultural attractions.
            </label>
            <label>
                <input type="radio" name="q4" value="4"> 4) Visit some places that he can swim and eat.
            </label>

            <br>
            <button type="submit">Submit</button>

        </form>
        <div id="result"></div>



    </div>
    <form action="home_tourist4.php">
        <button id="button1">Next</button>
    </form>
    <br>
    <script src="home_tourist3.js"></script>

</body>

</html>