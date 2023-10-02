<?php include('server.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home_recreational3.css">
    <title>Web Application for Developing English Language Skills.</title>
</head>

<body>
    <br><br>
    <h1>Practice</h1>

    <div class="quiz-container">
        <h2>Comprehension Question (4 questions 4 multiple choices)</h2>
        <form id="quiz-form">
            <p>Question 1: What does the tourist need help with?</p>
            <label>
                <input type="radio" name="q1" value="1"> 1) He needs a tour-guide.
            </label>
            <label>
                <input type="radio" name="q1" value="2"> 2) He wants to rent a kayak and a SUP.
            </label>
            <label>
                <input type="radio" name="q1" value="3"> 3) wants to know about activities he can do in Chumphon.
            </label>
            <label>
                <input type="radio" name="q1" value="4"> 4) He wants to know about the prices of tour packages.
            </label>

            <p>Question 2: What does the tourist want to do?</p>
            <label>
                <input type="radio" name="q2" value="1"> 1) play sport.
            </label>
            <label>
                <input type="radio" name="q2" value="2"> 2) ask for information.
            </label>
            <label>
                <input type="radio" name="q2" value="3"> 3) ask for directions.
            </label>
            <label>
                <input type="radio" name="q1" value="4"> 4) buy a kayak ticket.
            </label>

            <p>Question 3: What kind of outdoor activities does the tour agent offer?</p>
            <label>
                <input type="radio" name="q3" value="1"> 1) bird watching.
            </label>
            <label>
                <input type="radio" name="q3" value="2"> 2) Kayaking and SUB board.
            </label>
            <label>
                <input type="radio" name="q3" value="3"> 3) sightseeing.
            </label>
            <label>
                <input type="radio" name="q1" value="4"> 4) Massage.
            </label>

            <p>Question 4: What does the tourist want to do first?</p>
            <label>
                <input type="radio" name="q4" value="1"> 1) bird watching.
            </label>
            <label>
                <input type="radio" name="q4" value="2"> 2) Kayaking and SUB board.
            </label>
            <label>
                <input type="radio" name="q4" value="3"> 3) sightseeing.
            </label>
            <label>
                <input type="radio" name="q4" value="4"> 4) Massage.
            </label>

            <br>
            <button type="submit">Submit</button>

        </form>
        <div id="result"></div>



    </div>
    <form action="home_recreational4.php">
        <button id="button1">Next</button>
    </form>
    <br>
    <script src="home_recreational3.js"></script>

</body>

</html>