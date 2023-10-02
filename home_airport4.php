<?php include('server.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Application for Developing English Language Skills.</title>
    <link rel="stylesheet" href="home_airport4.css">
</head>

<body>
    <h1><br>Practice</h1>
    <!-- <form action="home_airport5.html"> -->
    <div class="centering">
        <div class="articles">
            <article>
                <figure>
                    <img src="airport.jpg" alt="Preview">
                </figure>
                <div class="article-preview">
                    <h2>Choose your practice partner.</h2>
                    <!-- <h3>Conversation : At the airport information desk</h3><br> -->
                    <!-- <button onclick="เลือกตำแหน่ง('Customer Service')">Customer Service</button><br><br>
                    <button onclick="เลือกตำแหน่ง('Tourist')">Tourist</button><br> -->

                    <button id="positionA">Customer Service</button><br><br>
                    <button id="positionB">Tourist</button>

                    <audio id="audioA" src="voice_1.mp3"></audio>
                    <audio id="audioB" src="voice_2.mp3"></audio>

                    <script src="home_airport4.js"></script>

                    <br>
                    <table id="conversationTable">

                        <!-- แสดงเนื้อหาสนทนาและข้อมูลตามตำแหน่งที่เลือก -->
                        <br>
                        <tr>
                            <td class="left">Customer Service :</td>
                            <td>Hello. How can I help you?</td>
                        </tr>
                        <tr>
                            <td class="left1">Tourist :</td>
                            <td>Excuse me. I would like to know how I can get to Chumphon city center.</td>
                        </tr>
                        <tr>
                            <td class="left">Customer Service :</td>
                            <td>Well, you can take the public bus or public minivan to the city.</td>
                        </tr>
                        <tr>
                            <td class="left1">Tourist :</td>
                            <td>Ok. How long does it take to get to the city.</td>
                        </tr>
                        <tr>
                            <td class="left">Customer Service :</td>
                            <td>The bus takes about an hour and a half, and the minivan takes about 40 minutes.</td>
                        </tr>
                        <tr>
                            <td class="left1">Tourist :</td>
                            <td>How much does do they cost?</td>
                        </tr>
                        <tr>
                            <td class="left">Customer Service :</td>
                            <td>The bus cost 100 Baht per person and the minivan costs 150 Baht per person.</td>
                        </tr>
                        <tr>
                            <td class="left1">Tourist :</td>
                            <td>Ok. Where can I get the ticket for the minivan.</td>
                        </tr>
                        <tr>
                            <td class="left">Customer Service :</td>
                            <td>There are ticket booths in front of the exit from the baggage claim area.</td>
                        </tr>
                        <tr>
                            <td class="left1">Tourist :</td>
                            <td>Which one do you recommend?</td>
                        </tr>
                        <tr>
                            <td class="left">Customer Service :</td>
                            <td>They offer good service, and the price are the same.</td>
                        </tr>
                        <tr>
                            <td class="left1">Tourist :</td>
                            <td>Thank you very much. </td>
                        </tr>
                        <tr>
                            <td class="left">Customer Service :</td>
                            <td>You’re welcome. Have a good day.</td>
                        </tr>

                    </table>

                    <!-- <script src="home_airport4.js"></script> -->

                </div>
            </article>

        </div>
    </div>
    <br>
    <form action="home_airport5.php">
        <button id="button1">Next</button><br><br>
    </form>
    <!-- </form> -->
</body>

</html>