<?php include('server.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home_airport3.css">
    <title>Web Application for Developing English Language Skills.</title>
</head>

<body>
    <br><br>
    <h1>Practice</h1>

    <div class="quiz-container">
        <h2>Comprehension Question (4 questions 4 multiple choices)</h2>
        <form id="quiz-form">
            <p>Question 1: Where does thhr tourist need help with?</p>
            <label>
                <input type="radio" name="q1" value="1"> 1) He looks for his bachages.
            </label>
            <label>
                <input type="radio" name="q1" value="2"> 2) He looks for a van or bus to the city.
            </label>
            <label>
                <input type="radio" name="q1" value="3"> 3) He wants to  know how to get to the city center.
            </label>
            <label>
                <input type="radio" name="q1" value="4"> 4) He wants to  know ahat he can do in the city center.
            </label>

            <p>Question 2: What are the recommendations from the customer service for getting to the city?</p>
            <label>
                <input type="radio" name="q2" value="1"> 1) The tourist can take a public bus..
            </label>
            <label>
                <input type="radio" name="q2" value="2"> 2) The tourist can take a public minivan.
            </label>
            <label>
                <input type="radio" name="q2" value="3"> 3) The tourist can take a public bus or public minivan.
            </label>
            <label>
                <input type="radio" name="q1" value="4"> 4) The tourist can either walk or take a bus.
            </label>

            <p>Question 3: Where is the ticket booth for the minivan to the city center?</p>
            <label>
                <input type="radio" name="q3" value="1"> 1) Next to the baggage claim area.
            </label>
            <label>
                <input type="radio" name="q3" value="2"> 2) In front of the exit from the baggage claim area.
            </label>
            <label>
                <input type="radio" name="q3" value="3"> 3) Next to the information counter.
            </label>
            <label>
                <input type="radio" name="q1" value="4"> 4) Infront of the information counter.
            </label>

            <p>Question 4: Which choice does the tourist take to get to the city center?</p>
            <label>
                <input type="radio" name="q4" value="1"> 1) train
            </label>
            <label>
                <input type="radio" name="q4" value="2"> 2) bus
            </label>
            <label>
                <input type="radio" name="q4" value="3"> 3) minivan
            </label>
            <label>
                <input type="radio" name="q4" value="4"> 4) motorcycle taxi
            </label>

            <br>
            <button type="submit">Submit</button>

        </form>
        <div id="result"></div>



    </div>
    <form action="home_airport4.php">
        <button id="button1">Next</button>
    </form>
    <br>
    <script src="home_airport3.js"></script>

</body>

</html>