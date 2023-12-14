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
        <title>WelLyf</title>
        <link rel="stylesheet" type="text/css" href="FitnessTracking.css">
        <link rel="stylesheet"
        href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
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
        <div class="banner">
            <img src="final logo.png" height="160px" width="200px">
            <div class="header">
                <ul class="navlist">
                <li><a href="WellLyf.php" id="home-nav">Home</a></li>
                    <li><a href="MyGoals.php" id="goals-nav">My Goals</a></li>
                    <li><a href="FitnessTracking.php" id="fitness-nav">Fitness Tracking</a></li>
                    <li><a href="diet.php" id="diet-nav">Diet Plan</a></li>
                </ul>
            </div>
            <div class="user-shenan">
                <div class="login_btn"><button id="show-login">Login</button></div>
                <div class="signup_btn"><button id="show-signup">Signup</button></div>
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


        <div class="flip-card-container">
    <!-- First Flip Card -->
    <div class="flip-card1">
      <div class="flip-card1-inner">
        <div class="flip-card1-front">
          <img src="circle-watch.png" alt="watch 1" style="width:300px;height:300px;">
        </div>
        <div class="flip-card1-back">
          <h1>WelLyf Cyclic</h1>
            <br>
                <p>Smart Hydration Reminder</p>
                <br>
                <p>Biofeedback meditation</p>
                <br>
                <p>Sleep Architecture Monitoring</p>
            <h1 class="price">For &#x20b9; 1199</h1>
        </div>
      </div>
    </div>

    <!-- Second Flip Card -->
    <div class="flip-card1">
      <div class="flip-card1-inner">
        <div class="flip-card1-front">
          <img src="band-watch.png" alt="watch 2" style="width:300px;height:300px;">
        </div>
        <div class="flip-card1-back">
          <h1> WelLyf StrapSync</h1>
            <br>
          <p>Posture Correction Coach</p>
            <br>
          <p>Nutrient Absorption Tracker</p>
            <br>
            <p>Pulse Rate Indicator</p>
            <br>
            <p>Meal Time Reminder</p>
            <h1 class="price">For &#x20b9; 1999</h1>
        </div>
      </div>
    </div>

    <!-- Third Flip Card -->
    <div class="flip-card1">
      <div class="flip-card1-inner">
        <div class="flip-card1-front">
          <img src="square-watch.png" alt="watch 3" style="width:300px;height:300px;">
        </div>
        <div class="flip-card1-back">
          <h1>WelLyf CortexSquare</h1>
            <br>
          <p>Hormone Harmony Tracker</p>
            <br>
          <p>Nutrient Absorption Tracker</p>
            <br>
            <p>Workout Tracker</p>
            <br>
            <p>Sleep Architecture Monitoring</p>
            <br>
            <p>Smart Hydration Reminder</p>
            <h1 class="price">For &#x20b9; 2599</h1>
        </div>
      </div>
    </div>
  </div>
       
        <div class="app-info-text">
        <h2>To get the benefits of following advanced health tracking features,
            <br> Install WelLyf App</h2>
            <br>
            <button class="install-button">Install</button>
            </div>
       

    <script type="text/javascript" >
            //signup
            document.querySelector("#show-signup").addEventListener("click",function(){
                document.querySelector(".popsignup").classList.add("active");
            });
            document.querySelector(".popsignup .close-btn").addEventListener("click",function(){
                document.querySelector(".popsignup").classList.remove("active");
            });

//login
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