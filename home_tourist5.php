<?php include('server.php'); ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Application for Developing English Language Skills.</title>
    <link rel="stylesheet" href="home_tourist5.css">
</head>

<body>
    <h1><br>Production</h1>
    <!-- <form action="#"> -->
    <div class="centering">
        <div class="articles">
            <article>
                <figure>
                    <img src="tourist attractions.jpg" alt="Preview">
                </figure>
                <div class="article-preview">
                    <h2>Please response to the question.</h2>
                    <h3>Record speech immediate response to check confidence.</h3><br>
                    <table>

                        <tr>
                            <td class="left">
                                <h4>Question1:</h4> Where does this conversation take place?
                                <br><br>
                                <div class="controls">
                                    <button id="positionA">Play</button>
                                    <audio id="audioA" src="voice_1.mp3"></audio>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="left1">Answer1 :
                                <div class="controls">
                                    <button id="recordButton1">บันทึกเสียง 1</button>
                                    <div id="output1"></div><br>
                                    <!-- <button class="" id="startRecord1">บันทึก 1</button>
                                    <button class="stopButton" id="stopRecord1" disabled>หยุด 1</button> -->
                                </div>

                            </td>

                        </tr>

                        <tr>
                            <td class="left">
                                <h4>Question2:</h4> What are the activities a tourist information staff mentioned about Khao Dinsor viewpoint?
                                <br><br>
                                <div class="controls">
                                    <button id="positionB">Play</button>
                                    <audio id="audioB" src="voice_2.mp3"></audio>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="left1">Answer2 :
                                <div class="controls">
                                    <button id="recordButton2">บันทึกเสียง 2</button>
                                    <div id="output2"></div><br>
                                    <!-- <button class="recordButton" id="startRecord2">บันทึก 2</button>
                                    <button class="stopButton" id="stopRecord2" disabled>หยุด 2</button> -->
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="left">
                                <h4>Question3:</h4> Does he interested in going to Khao Dinsor?
                                <br><br>
                                <div class="controls">
                                    <button id="positionC">Play</button>
                                    <audio id="audioC" src="voice_3.mp3"></audio>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="left1">Answer3 :
                                <div class="controls">
                                    <button id="recordButton3">บันทึกเสียง 3</button>
                                    <div id="output3"></div><br>
                                    <!-- <button class="recordButton" id="startRecord3">บันทึก 3</button>
                                    <button class="stopButton" id="stopRecord3" disabled>หยุด 3</button> -->
                                </div>
                            </td>

                        </tr>

                        <tr>
                            <td class="left">
                                <h4>Question4:</h4> What are the public transportation mentioned by the staff?
                                <br><br>
                                <div class="controls">
                                    <button id="positionD">Play</button>
                                    <audio id="audioD" src="voice_4.mp3"></audio>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="left1">Answer4 :
                                <div class="controls">
                                    <button id="recordButton4">บันทึกเสียง 4</button>
                                    <div id="output4"></div><br>
                                    <!-- <button class="recordButton" id="startRecord4">บันทึก 4</button>
                                    <button class="stopButton" id="stopRecord4" disabled>หยุด 4</button> -->
                                </div>
                            </td>

                        </tr>


                        <!-- เพิ่มประโยคสนทนาและข้อมูลคนพูดตามที่คุณต้องการ -->
                    </table>

                    <!-- เพิ่มปุ่ม "Submit" -->
                    <br><button id="submitButton">Submit</button>

                    <!-- ส่วนที่จะแสดงคะแนน -->
                    <div id="scoreDisplay">คะแนน: 0</div>

                    <script src="home_tourist5.js"></script>
                </div>
            </article>


        </div>
    </div>

    <form action="home.php">
        <button id="button1">Finish</button><br><br>
    </form>
    <!-- </form> -->
</body>

</html>