<?php include('server.php'); ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Application for Developing English Language Skills.</title>
    <link rel="stylesheet" href="home_shopping4.css">
</head>

<body>
    <h1><br>Practice</h1>
    <!-- <form action="home_airport5.html"> -->
    <div class="centering">
        <div class="articles">
            <article>
                <figure>
                    <img src="shopping.jpg" alt="Preview">
                </figure>
                <div class="article-preview">
                    <h2>Choose your practice partner.</h2>
                    <!-- <h3>Conversation : At the airport information desk</h3><br> -->
                    <!-- <button onclick="เลือกตำแหน่ง('Shopkeeper')">Shopkeeper</button><br><br>
                    <button onclick="เลือกตำแหน่ง('Tourist')">Tourist</button><br> -->
                    <button id="positionA">Shopkeeper</button><br><br>
                    <button id="positionB">Tourist</button>

                    <audio id="audioA" src="voice_1.mp3"></audio>
                    <audio id="audioB" src="voice_2.mp3"></audio>

                    <script src="home_shopping4.js"></script>

                    <br>
                    <table id="conversationTable">

                        <!-- แสดงเนื้อหาสนทนาและข้อมูลตามตำแหน่งที่เลือก -->
                        <br>
                        <tr>
                            <td class="left">Shopkeeper : </td>
                            <td>Sawatdee kha (Hello)! Welcome to our souvenir shop. How can I assist you today?</td>
                        </tr>
                        <tr>
                            <td class="left1">Tourist : </td>
                            <td> I am looking for some souvenirs to bring back home. What do you have that's special for Chumphon?</td>
                        </tr>
                        <tr>
                            <td class="left">Shopkeeper : </td>
                            <td>We have a variety of Chumphon souvenirs. We have traditional handicrafts, batik painting, T-shirts, local snacks, and some beautiful seashell jewelry. Is there any specific you are interested in?</td>
                        </tr>
                        <tr>
                            <td class="left1">Tourist : </td>
                            <td> I would like to see the batik painting and maybe some local snacks.</td>
                        </tr>
                        <tr>
                            <td class="left">Shopkeeper : </td>
                            <td> Certainly. Please have a look around and if you see anything you like, you can call me.</td>
                        </tr>
                        <tr>
                            <td class="left1">Tourist : </td>
                            <td> I will take Batik T-shirts. What sizes do you have? Do you have XXL?</td>
                        </tr>
                        <tr>
                            <td class="left">Shopkeeper : </td>
                            <td> Sorry, we have only XL, L and S. It is only 200 Baht each.</td>
                        </tr>
                        <tr>
                            <td class="left1">Tourist : </td>
                            <td>Well, I will take 2 of XL and 1 of L.</td>
                        </tr>
                        <tr>
                            <td class="left">Shopkeeper : </td>
                            <td> Is there anything else you would like?</td>
                        </tr>
                        <tr>
                            <td class="left1">Tourist : </td>
                            <td>Yes, I will take 2 boxes of dried durian chips. How much is it altogether?</td>
                        </tr>
                        <tr>
                            <td class="left">Shopkeeper : </td>
                            <td>OK. That will be 900 Baht in total. How would you like to pay?</td>
                        </tr>
                        <tr>
                            <td class="left1">Tourist : </td>
                            <td> I will pay in cash please.</td>
                        </tr>
                        <tr>
                            <td class="left">Shopkeeper : </td>
                            <td>Thank you. Here's your change and your items. Have a wonderful day and please visit us again.</td>
                        </tr>
                        <tr>
                            <td class="left1">Tourist : </td>
                            <td>Goodbye!</td>
                        </tr>

                    </table>

                    <script src="home_shopping4.js"></script>

                </div>
            </article>

        </div>
    </div>
    <br>
    <form action="home_shopping5.php">
        <button id="button1">Next</button><br><br>
    </form>
    <!-- </form> -->
</body>

</html>