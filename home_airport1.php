<?php include('server.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Application for Developing English Language Skills.</title>
    <link rel="stylesheet" href="home_airport1.css">
</head>

<body>
    <h1><br>Presentation</h1>
    <form action="home_airport2.php">
        <div class="centering">
            <div class="articles">
                <article>
                    <figure>
                        <img src="airport.jpg" alt="Preview">
                    </figure>
                    <div class="article-preview">
                        <h2>1 : Presentation of conversation</h2>
                        <h3>Conversation : At the airport information desk</h3><br>
                        <table>
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
                            <!-- เพิ่มประโยคสนทนาและข้อมูลคนพูดตามที่คุณต้องการ -->
                        </table>
                        <audio id="myAudio" controls>
                            <source src="voice_1.mp3" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>

                        <div class="controls">
                            <button id="playButton">เล่น</button>
                            <button id="pauseButton">หยุด</button>
                            <button id="replayButton">เล่นซ้ำ</button>
                        </div>

                        <script src="home_airport1.js"></script>
                    </div>
                </article>


            </div>
        </div>

        <br><button>Next</button><br><br>
    </form>
</body>

</html>