<!-- php connection -->

<?php
    include("connection.php");
?>

<!-- Start of HTML -->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Well Lyf</title>
        <link rel="stylesheet" type="text/css" href="WellLyf.css">
        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@3.6.0/fonts/remixicon.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <link rel="icon" type="image/x-icon" href="WellLyffavicon.png">
    </head>
    <body>

        <!-- banner image and nav list -->

        <div class="banner">
            <img src="final logo.png" height="160px">
            <div class="header">
                <ul class="navlist">
                    <li><a href="WellLyf.php" id="home-nav">Home</a></li>
                    <li><a href="MyGoals.php" id="goals-nav">My Goals</a></li>
                    <li><a href="FitnessTracking.php" id="fitness-nav">Fitness Tracking</a></li>
                    <li><a href="diet.php" id="diet-nav">Diet Plan</a></li>
                </ul>
            </div>
            <div class="user-shenan">
                <div class="login_btn">
                    <button id="show-login">Login</button>
                </div>
                <div class="signup_btn">
                    <button id="show-signup">Signup</button>
                </div>
            </div>
            
        </div>

        <!-- signup form -->

        <div class="popsignup">
            <div class="close-btn">&times;</div>
            <div class="form">
                <h2>Sign Up</h2>
                <div class="form-element">
                    <form name="form" action="signup.php" method="POST">
                        <label for="fname">First Name</label>
                        <input type="text" id="fname" name="fname" placeholder="Enter first name">
                        <br>
                        <label for="lname">Last Name</label>
                        <input type="text" id="lname" name="lname" placeholder="Enter last name">
                        <br>
                        <label for="email">Email</label>
                        <input type="text" id="email" name="email" placeholder="Enter email">
                        <br>
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="Enter password">
                        <br>
                        <input type="checkbox" id="remember-me">
                        <label for="remember-me">Remember-me</label>
                        <br>
                        <br>
                        <button id="submit" name="submit" onclick="sendEmail()">Submit</button>
                        <br>
                    </form>
                </div>
            </div>
        </div>

        <!--login form-->

        <div class="poplogin">
            <div class="closelogin">&times;</div>
            <div class="loginform">
                <h2>login</h2>
                <div class="loginform-element">
                    <form name="form" action="login.php" method="POST">
                        <label for="email">Email</label>
                        <input type="text" id="email1" name="email1" placeholder="Enter email">
                        <br>
                        <label for="password">Password</label>
                        <input type="password" id="password1" name="password1" placeholder="Enter password">
                        <br>
                        <input type="checkbox" id="remember-me">
                        <label for="remember-me">Remember-me</label>
                        <br>
                        <br>
                        <button id="submit_login" name="submit_login" onclick="openlogin()">Submit</button>
                        <br>  
                        <a href="#">Forgot password?</a>
                        <br>
                    </form>
                </div>
            </div>
        </div>

        <!-- App details -->

        <div class="main-container">
            <div class="info-container">
                <div class="info-img">
                    <img src="fitness man.png" width="250px">
                </div>
                <div class="info-text">
                    <h3>About Our App</h3>
                    <p>Experience a fitter you with our user-friendly fitness app. Tailored workouts, easy progress tracking, and personalized nutrition guidance make achieving your health goals a breeze. Elevate your fitness journey effortlessly!</p>
                    <button class="get-app">Get App</button>
                </div>
            </div>
            

            <div class="goals-container">
                <div class="goals-img">
                    <div class="img-yoga"><img src="yoga pic.jpg" height="200px"></div>
                    <div class="img-running"><img src="running.jpg" height="200px"></div>
                    <div class="img-workout"><img src="workout pic.jpg" height="200px"></div>
                    <div class="img-hiking"><img src="hiking pic.jpg" height="200px"></div>
                </div>
                <div class="goals-text">
                    <h3>Find Your Goals</h3>
                    <p>Input your details in the form below, and our intelligent algorithm will analyze your information to provide personalized recommendations for your fitness and diet goals.</p>
                    <button class="get-app">Fill Form</button>
                </div>
            </div>

            <div class="fitness-container">
                <div class="fitness-img">
                    <img src="circle-watch.png" width="250px">
                    <img src="band-watch.png" width="200px">
                    <img src="square-watch.png" width="220px">
                </div>
                    <div class="fitness-text">
                        <h3>Our Products</h3>
                        <p>Experience peak performance and comprehensive health tracking with our cutting-edge fitness watch – your ultimate companion for achieving and surpassing your wellness goals</p>
                        <button class="get-app">Check Out</button>
                    </div>
                </div>

            <!-- nutrition deit -->

            <div class="diet-container">
                <div class="diet-img">
                    <img src="foodplate.png " width="430px">
                </div>
                <div class="diet-text">
                    <h3>Health On Your Plate</h3>
                    <p>input your preferences, get a personalized meal plan, and savor the taste of wellness!</p>
                    <button class="get-app">Create Meal Plan</button>
                </div>
            </div>
        </div>
    
        <!-- Page Footer -->

        <div class="footer">
            <div class="logo">
                <a href="#"><i class="ri-facebook-circle-fill"></i></a>
                <a href="#"><i class="ri-instagram-line"></i></a>
                <a href="#"><i class="ri-twitter-x-fill"></i></a>
                <a href="#"><i class="ri-youtube-fill"></i></a>
            </div>
            <div class="copyright-text">
                <h2>Copyright &copy;2023; Desgined by TechDynamos</h2>
            </div>
        </div>

        <script type="text/javascript" >
            //signup js 
            document.querySelector("#show-signup").addEventListener("click",function(){
                document.querySelector(".popsignup").classList.add("active");
            });
            document.querySelector(".popsignup .close-btn").addEventListener("click",function(){
                document.querySelector(".popsignup").classList.remove("active");
            });

            //login js
            document.querySelector("#show-login").addEventListener("click",function(){
                document.querySelector(".poplogin").classList.add("active");
            });
            document.querySelector(".poplogin .closelogin").addEventListener("click",function(){
                document.querySelector(".poplogin").classList.remove("active");
            });
            
            //signup 
            
            function openlogin(){
                //to check whether entered all values
                let email = document.getElementById("email1");
                let password = document.getElementById("password1");
                if (email.value == "" || password.value == "") {
                    alert("Ensure you input a value in all fields!");
                }
                else{
                    window.open('file:///C:/Users/Akshay/Desktop/akshay%20college/VSCode/website/dashboard.html',"_blank")
                }
            }

            function sendEmail(){
                //to check whether entered all values
                let loginForm = document.getElementById("form");
                let fname = document.getElementById("fname");
                let lname = document.getElementById("lname");
                let email = document.getElementById("email");
                let password = document.getElementById("password");
                if (fname.value == "" || lname.value == "" || email.value == "" || password.value == "") {
                    alert("Ensure you input a value in all fields!");
                }
                else
                {              
                // to send emails
                    Email.send({
                        Host: "smtp.elasticemail.com",
                        Username: "kanagaltanish02@gmail.com",
                        Password: "5B761C72B0CF056A2A21DBBB2F40AB1527EE",
                        To: 'girishghugare19@gmail.com',
                        From: "kanagaltanish02@gmail.com",
                        Subject: "Hello Akshaya",
                        Body: "You have successfully created an account on" + fname + lname + email,
                    })
                    .then(function (message) {
                        alert("mail sent successfully")
                    });
                }
            }
        </script>
        <script src="https://smtpjs.com/v3/smtp.js"></script>
    </body>
</html>