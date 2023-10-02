<?php include('server.php'); ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home_shopping3.css">
    <title>Web Application for Developing English Language Skills.</title>
</head>

<body>
    <br><br>
    <h1>Practice</h1>

    <div class="quiz-container">
        <h2>Comprehension Question (4 questions 4 multiple choices)</h2>
        <form id="quiz-form">
            <p>Question 1: Where does this conversation take place?</p>
            <label>
                <input type="radio" name="q1" value="1"> 1) At a souvenir shop.
            </label>
            <label>
                <input type="radio" name="q1" value="2"> 2) At the tourist information.
            </label>
            <label>
                <input type="radio" name="q1" value="3"> 3) At a restaurant.
            </label>
            <label>
                <input type="radio" name="q1" value="4"> 4) At a Batik shop.
            </label>

            <p>Question 2: What does the tourist need?</p>
            <label>
                <input type="radio" name="q2" value="1"> 1) recreational activities.
            </label>
            <label>
                <input type="radio" name="q2" value="2"> 2) recommended food.
            </label>
            <label>
                <input type="radio" name="q2" value="3"> 3) souvenirs to bring home.
            </label>
            <label>
                <input type="radio" name="q1" value="4"> 4) a new T-shirt.
            </label>

            <p>Question 3: What are the souvenirs the tourist looking for?</p>
            <label>
                <input type="radio" name="q3" value="1"> 1) Batik painting and seashell jewelry.
            </label>
            <label>
                <input type="radio" name="q3" value="2"> 2) Batik painting and local snacks.
            </label>
            <label>
                <input type="radio" name="q3" value="3"> 3) Local snacks and handicraft.
            </label>
            <label>
                <input type="radio" name="q1" value="4"> 4) Local snacks and seashell jewelry.
            </label>

            <p>Question 4: How much does the souvenirs cost in total?</p>
            <label>
                <input type="radio" name="q4" value="1"> 1) 600 Baht.
            </label>
            <label>
                <input type="radio" name="q4" value="2"> 2) 700 Baht.
            </label>
            <label>
                <input type="radio" name="q4" value="3"> 3) 800 Baht.
            </label>
            <label>
                <input type="radio" name="q4" value="4"> 4) 900 Baht.
            </label>

            <br>
            <button type="submit">Submit</button>

        </form>
        <div id="result"></div>



    </div>
    <form action="home_shopping4.php">
        <button id="button1">Next</button>
    </form>
    <br>
    <script src="home_shopping3.js"></script>

</body>

</html>