<?php include('server.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home_restaurant3.css">
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
                <input type="radio" name="q1" value="1"> 1) At the train station.
            </label>
            <label>
                <input type="radio" name="q1" value="2"> 2) At the airport.
            </label>
            <label>
                <input type="radio" name="q1" value="3"> 3) At a restaurant.
            </label>
            <label>
                <input type="radio" name="q1" value="4"> 4) At a souvenir shop.
            </label>

            <p>Question 2: What does the customer get for drinks?</p>
            <label>
                <input type="radio" name="q2" value="1"> 1) a bottle of water, a glass of ice, and a Thai iced tea.
            </label>
            <label>
                <input type="radio" name="q2" value="2"> 2) two bottles of water, and ice, and a Thai iced tea.
            </label>
            <label>
                <input type="radio" name="q2" value="3"> 3) a bottle of water, a glass of ice, and a glass of wine.
            </label>
            <label>
                <input type="radio" name="q1" value="4"> 4) a bottle of wine and a Thai icad tea.
            </label>

            <p>Question 3: What does the customer get for meals?</p>
            <label>
                <input type="radio" name="q3" value="1"> 1) Pad Thai with shrimp, and a rice with Chicken soup.
            </label>
            <label>
                <input type="radio" name="q3" value="2"> 2) Pad Thai with chicken, and a rice with Chicken soup.
            </label>
            <label>
                <input type="radio" name="q3" value="3"> 3) Pad Thai with shrimp, and a rice with Chicken soup green curry.
            </label>
            <label>
                <input type="radio" name="q1" value="4"> 4) Pad Thai with chicken, and a rice with Chicken soup green curry.
            </label>

            <p>Question 4: How does the customer pay?</p>
            <label>
                <input type="radio" name="q4" value="1"> 1) cash
            </label>
            <label>
                <input type="radio" name="q4" value="2"> 2) credit card
            </label>
            <label>
                <input type="radio" name="q4" value="3"> 3) QR code
            </label>
            <label>
                <input type="radio" name="q4" value="4"> 4) bill
            </label>

            <br>
            <button type="submit">Submit</button>

        </form>
        <div id="result"></div>



    </div>
    <form action="home_restaurant4.php">
        <button id="button1">Next</button>
    </form>
    <br>
    <script src="home_restaurant3.js"></script>

</body>

</html>