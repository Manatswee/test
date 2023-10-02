<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Application for Developing English Language Skills.</title>
    <link rel="stylesheet" href="home_recreational4.css">
</head>

<body>
    <h1><br>Practice</h1>
    <!-- <form action="home_airport5.html"> -->
    <div class="centering">
        <div class="articles">
            <article>
                <figure>
                    <img src="recreational activities.jpg" alt="Preview">
                </figure>
                <div class="article-preview">
                    <h2>Choose your practice partner.</h2>
                    <!-- <h3>Conversation : At the airport information desk</h3><br> -->
                    <!-- <button onclick="เลือกตำแหน่ง('Tour agent')">Tour agent</button><br><br>
                    <button onclick="เลือกตำแหน่ง('Tourist')">Tourist</button><br> -->

                    <button id="positionA">Tour agent</button><br><br>
                    <button id="positionB">Tourist</button>

                    <audio id="audioA" src="voice_1.mp3"></audio>
                    <audio id="audioB" src="voice_2.mp3"></audio>

                    <script src="home_recreational3.js"></script>

                    <br>
                    <table id="conversationTable">

                        <!-- แสดงเนื้อหาสนทนาและข้อมูลตามตำแหน่งที่เลือก -->
                        <br>
                        <tr>
                            <td class="left">Tour agent : </td>
                            <td>Good morning. How can I help you?</td>
                        </tr>
                        <tr>
                            <td class="left1">Tourist : </td>
                            <td>Yes, I would like to know more about what I can do in Chumphon.</td>
                        </tr>
                        <tr>
                            <td class="left">Tour agent :</td>
                            <td>What kinf of activities you would like to do?</td>
                        </tr>
                        <tr>
                            <td class="left1">Tourist : </td>
                            <td>I prefer an outdoor activity. Do you have any recommendations?</td>
                        </tr>
                        <tr>
                            <td class="left">Tour agent :</td>
                            <td>Well, There are many activities you can do. If you like beach activities, you can visit Thung Wua Laen beach or Sai-ri beach. You can go swimming, sunbathing, or kayaking.</td>
                        </tr>
                        <tr>
                            <td class="left1">Tourist : </td>
                            <td>Wow! Are there any hotels around there?</td>
                        </tr>
                        <tr>
                            <td class="left">Tour agent :</td>
                            <td>Yes, there are many that you can chose from, a standard one or a luxurious one. It depends on what you would like.</td>
                        </tr>
                        <tr>
                            <td class="left1">Tourist : </td>
                            <td>That's great. I am also interested in kayaking.
                            </td>
                        </tr>
                        <tr>
                            <td class="left">Tour agent :</td>
                            <td>Our tour offers one-day package of kayaking or a SUP (stand-up paddle boarding) package at Koh Prao which is known for its beautiful coastline, crystal-clear water, and coral reef. The package includes equipment rental prices
                                such as a kayak, a paddle, and a lifejacket. If you are not experienced or prefer a guided experience, we also have this offer.</td>
                        </tr>
                        <tr>
                            <td class="left1">Tourist : </td>
                            <td>How much does the kayaking package cost?</td>
                        </tr>
                        <tr>
                            <td class="left">Tour agent : </td>
                            <td>It starts from 1,000 Baht per person. It depends on what activities you want in the package. We also have a package for additional activities like snorkeling or exploring nearby islands with our speedboat.</td>
                        </tr>
                        <tr>
                            <td class="left1">Tourist : </td>
                            <td>Ok. This sounds interesting. Are there any other activities?</td>
                        </tr>
                        <tr>
                            <td class="left">Tour agent :</td>
                            <td>Thung Wualaen beach is a good place for windsurfing. Lessons and equipment rentals are often available at the beachfront restaurant there.</td>
                        </tr>
                        <tr>
                            <td class="left1">Tourist : </td>
                            <td>Are there any good places to eat around the beaches?</td>
                        </tr>
                        <tr>
                            <td class="left1">Tourist : </td>
                            <td>Yes, there are beach front bars and restaurants that you can enjoy fresh seafood and Thai cuisine with local flavors.</td>
                        </tr>
                        <tr>
                            <td class="left">Tour agent :</td>
                            <td>Wow! There are many things I can do. As I have just arrived, I will relax and think about the activities that I want to do. I will get back to you later if I decide.</td>
                        </tr>
                        <tr>
                            <td class="left1">Tourist : </td>
                            <td>No problem. Here is our name card and a brochure. You can call us for more information. Have a good day.</td>
                        </tr>
                        <tr>
                            <td class="left">Tour agent : </td>
                            <td>You too. Good bye.</td>
                        </tr>

                    </table>

                    <script src="home_recreational4.js"></script>

                </div>
            </article>

        </div>
    </div>
    <br>
    <form action="home_recreational5.php">
        <button id="button1">Next</button><br><br>
    </form>
    <!-- </form> -->
</body>

</html>