<?php include('server.php'); ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Web Application for Developing English Language Skills.</title>
    <link rel="stylesheet" href="register.css">
    <!-- <link rel="stylesheet" type="text/css" href="register.css" /> -->

</head>

<body>

    <div class="background"></div>
    <div class="container">
        <div class="item">
            <h1>Web Application for Developing English Language Skills.</h1>
            <div class="text-item">
                <h2>WELCOME!!!! <br><span>
                To ......        
                </span></h2>
                <p>Attractions in Chumphon</p>
            </div>
        </div>

        <div class="login-section">
            <div class="form-box register">

                <form action="">

                    <h2>Sign Up</h2>

                    <div class="input-box">
                        <input type="text" name="Name_Surname" required>
                        <label>Name_Surname</label>
                    </div>
                    <div class="input-box">
                        <input type="text" name="Tel" required>
                        <label>Tel</label>
                    </div>
                    <div class="input-box">
                        <input type="text" name="Email" required>
                        <label>Email</label>
                    </div>
                    <div class="input-box">
                        <input type="password" name="Passwords" required>
                        <label>Passwords</label>
                    </div>
                    <div class="input-box">
                        <input type="password" name="Confirm_Password" required>
                        <label>Confirm_Password</label>
                    </div>


                    <center><select id="occupation">
                        <option value="Education Background">Education Background</option>
                        <option value="Highschool">Highschool</option>
                        <option value="Vocational">Vocational</option>
                        <option value="Higher vocational">Higher vocational</option>
                        <option value="Bachelor degree">Bachelor degree</option>
                        <option value="Higher than bachelor degree">Higher than bachelor degree</option>
                    </select>
                        <select id="occupation1">
                        <option value="Student">Student</option>
                        <option value="Employee ">Employee </option>
                        <option value="Business owner">Business owner</option>
                        <option value="Other">Others</option>
                    </select></center>


                    <!-- <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Student 
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Tourist
                        </label>
                    </div> -->

                    <br><button type="submit" name="user" class="btn">Login In</button>
                    <div class="creater-account"></div>
                    <p><br>Already Have An Account?
                        <a href="login.php" class="login-link">Sign In</a>
                    </p>



                </form>
            </div>
        </div>
    </div>


    <style>
    /* CSS ของคุณ */
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    height: 100vh;
    width: 100%;
    background: #fff;
}

.background {
    background: url(sky.jpg) no-repeat;
    background-position: center;
    background-size: cover;
    height: 100vh;
    width: 100%;
}

.header {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    padding: 25px 13%;
    background: transparent;
    display: flex;
    justify-content: space-between;
    align-items: center;
    z-index: 100;
}


/* .navbar a {
    position: relative;
    font-size: 16px;
    color: #fff;
    margin-right: 30px;
    text-decoration: none;
} */


/* .navbar a::after {
    content: "";
    position: absolute;
    left: 0;
    width: 100%;
    height: 2px;
    background: #fff;
    bottom: -5px;
    transform: translateY(10px);
    opacity: 0;
    transition: .5s ease;
}

.navbar a:hover:after {
    transform: translateY(0);
    opacity: 1;
} */

.container {
    position: absolute;
    left: 12%;
    top: 5%;
    transform: translateY(-50%, -50%);
    width: 75%;
    height: 650px;
    margin-top: 20px;
    background: url(sky.jpg) no-repeat;
    background-position: center;
    background-size: cover;
    border-radius: 20px;
    overflow: hidden;
}

.item {
    position: absolute;
    top: 0;
    left: 0;
    width: 58%;
    height: 100%;
    color: #fff;
    background: transparent;
    padding: 80px;
    display: flex;
    justify-content: space-between;
    flex-direction: column;
}

.text-item h2 {
    font-size: 40px;
    line-height: 1;
}

.text-item p {
    font-size: 16px;
    margin: 20px 0;
}

.container .login-section {
    position: absolute;
    top: 0;
    right: 250px;
    width: calc(100% - 58);
    height: 100%;
    color: #fff;
}

.login-section .form-box {
    position: absolute;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 100%;
}


/* .login-section .form-box.register {
    transform: translateX(430px);
    transition: transform .6s ease;
    transition-delay: 0s;
}

.login-section.active .form-box.register {
    transform: translateX(0px);
    transition-delay: .7s;
} */

.login-section .form-box.login {
    transform: translateX(0px);
    transition: transform .6s ease;
    transition-delay: 0.7s;
}

.login-section.active .form-box.login {
    transform: translateX(430px);
    transition-delay: 0s;
}

.login-section .form-box h2 {
    text-align: center;
    font-size: 25px;
}

.form-box .input-box {
    width: 340px;
    height: 50px;
    border-bottom: 2px solid #fff;
    margin: 30px 0;
    position: relative;
}

.input-box input {
    width: 100%;
    height: 100%;
    background: transparent;
    border: none;
    outline: none;
    font-size: 16px;
    padding-right: 28px;
}

.input-box label {
    position: absolute;
    top: 50%;
    left: 0;
    transform: translateY(-50%);
    font-size: 16px;
    font-weight: 600px;
    pointer-events: none;
    transition: .5s ease;
}

.remember-password {
    margin: -15px 0 15px;
    font-size: .9em;
    color: #fff;
    display: flex;
    justify-content: left;
}

#occupation {
    background-color: #f2f2f2;
    color: #000000;
    padding: 10px;
    border: none;
    border-radius: 5px;
    width: 100px;
}


/* CSS สำหรับตัวเลือกรายการในเมนูดรอปดาวน์ */

#occupation option {
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #fff;
    /* กำหนดสีพื้นหลัง */
    color: #333;
    /* กำหนดสีข้อความ */
}

#occupation1 {
    background-color: #f2f2f2;
    color: #000000;
    padding: 10px;
    border: none;
    border-radius: 5px;
    width: 100px;
}


/* CSS สำหรับตัวเลือกรายการในเมนูดรอปดาวน์ */

#occupation1 option {
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #fff;
    /* กำหนดสีพื้นหลัง */
    color: #333;
    /* กำหนดสีข้อความ */
}

#occupation,
#occupation1 {
    justify-content: center;
    margin: 10px;
    /* กำหนดระยะห่างของ select elements */
}

.centered-container {
    text-align: center;
    /* ทำให้เนื้อหาอยู่ตรงกลาง */
}


/* .form-check {
    margin: -15px 0 15px;
    font-size: .9em;
    color: #fff;
    display: flex;
    justify-content: center;
} */

.input-box input:focus~label,
.input-box input:valid~label {
    top: -5px;
}

.btn {
    background: #fff;
    width: 100%;
    height: 45px;
    outline: none;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    background: #000000;
    font-size: 16px;
    color: #fff;
    box-shadow: rgba(0, 0, 0, 0.4);
}

.create-account {
    font-size: 14.5px;
    text-align: center;
    margin: 25px;
}

.create-account p a {
    color: #fff;
    font-weight: 600px;
    text-decoration: none;
}

.create-account p a:hover {
    text-decoration: underline;
}
</style>

</body>

</html>