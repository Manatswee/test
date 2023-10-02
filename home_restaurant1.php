<?php include('server.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Application for Developing English Language Skills.</title>
    <link rel="stylesheet" href="home_restaurant1.css">
</head>

<body>
    <h1><br>Presentation</h1>
    <form action="home_restaurant2.php">
        <div class="centering">
            <div class="articles">
                <article>
                    <figure>
                        <img src="restaurant.jpg" alt="Preview">
                    </figure>
                    <div class="article-preview">
                        <h2>1 : Presentation of conversation</h2>
                        <h3>Conversation : At a restaurant</h3><br>
                        <!-- <p> -->
                        <table>
                            <tr>
                                <td class="left">Customer : </td>
                                <td>Hello.</td>
                            </tr>
                            <tr>
                                <td class="left1">Staff : </td>
                                <td> Hello. Welcome to our restaurant. Do you have a reservation?</td>
                            </tr>
                            <tr>
                                <td class="left">Customer : </td>
                                <td>No. Do you have a table available?</td>
                            </tr>
                            <tr>
                                <td class="left1">Staff : </td>
                                <td>For how many people?</td>
                            </tr>
                            <tr>
                                <td class="left">Customer : </td>
                                <td>Only two.</td>
                            </tr>
                            <tr>
                                <td class="left1">Staff : </td>
                                <td> Sure, right this way. Please have a seat. Here is the menu. Can I get you somnething to drink? </td>
                            </tr>
                            <tr>
                                <td class="left">Customer : </td>
                                <td>I'd like a bottle of water and a glass of ice, and a Thai iced tea for my friend.</td>
                            </tr>
                            <tr>
                                <td class="left1">Staff : </td>
                                <td>Thai iced tea and a bottle of water with ice. I'll be right back with your drinks.</td>
                            </tr>
                            <tr>
                                <td class="left">Customer : </td>
                                <td>Thank you.</td>
                            </tr>
                            <tr>
                                <td class="left1">Staff : </td>
                                <td>(One moment later.) Here are your drinks. Are you ready to order, or would you like some more time with the menu?</td>
                            </tr>
                            <tr>
                                <td class="left">Customer : </td>
                                <td> We are ready to order. I'll have Pad Thai with shrimp, and a rice with Chicken green curry.
                                </td>
                            </tr>
                            <tr>
                                <td class="left1">Staff : </td>
                                <td>Noted. Are there anything else you'd like, like appetizers or dessert?</td>
                            </tr>
                            <tr>
                                <td class="left">Customer : </td>
                                <td> No, that should be all for now.</td>
                            </tr>
                            <tr>
                                <td class="left1">Staff : </td>
                                <td>Alright, your order will be out shortly. Enjoy your drinks and if you need anything, please let us know.</td>
                            </tr>
                            <tr>
                                <td class="left1">Staff : </td>
                                <td> (One moment later.) Here are your dishes, Pad Thai and rice with green curry. Here are the condiment, just in case you need more flovour in your food.</td>
                            </tr>
                            <tr>
                                <td class="left">Customer : </td>
                                <td>Thank you. It looks delicious. After a moment, a customer call staff for bill checking.</td>
                            </tr>
                            <tr>
                                <td class="left">Customer : </td>
                                <td>Check please?</td>
                            </tr>
                            <tr>
                                <td class="left1">Staff : </td>
                                <td>How was your meal?</td>
                            </tr>
                            <tr>
                                <td class="left">Customer : </td>
                                <td>It was fantastic.</td>
                            </tr>
                            <tr>
                                <td class="left1">Staff : </td>
                                <td>Thank you very much. Here's your bill. How do you want to pay?</td>
                            </tr>
                            <tr>
                                <td class="left">Customer : </td>
                                <td>Cash please. Here you are.</td>
                            </tr>
                            <tr>
                                <td class="left1">Staff : </td>
                                <td>Here are your changes. Thank you for dinning with us. Have a wonderful day.</td>
                            </tr>
                            <tr>
                                <td class="left">Customer : </td>
                                <td>You too. Goodbye.</td>
                            </tr>


                            <!-- เพิ่มประโยคสนทนาและข้อมูลคนพูดตามที่คุณต้องการ -->
                        </table>
                        <!-- </p> -->
                        <audio id="myAudio" controls>
                            <source src="voice_1.mp3" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>

                        <div class="controls">
                            <button id="playButton">เล่น</button>
                            <button id="pauseButton">หยุด</button>
                            <button id="replayButton">เล่นซ้ำ</button>
                        </div>

                        <script src="home_tourist1.js"></script>
                    </div>
                </article>


            </div>
        </div>

        <br><button>Next</button><br><br>
    </form>
</body>

</html>