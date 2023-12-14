<?php
    include("connection.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tranquil Vista</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

        <link rel="stylesheet" type="text/css" href="quiz&nav.css">
        <link rel="stylesheet"
        href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@3.6.0/fonts/remixicon.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="banner">
            <img src="logo.png" height="170px">
            <header>
                <ul class="navlist">
                    <li><a href="#" id="home-nav">Home</a></li>
                    <li><a href="#quiz" id="goals-nav">My Goals</a></li>
                    <li><a href="#" id="fitness-nav">Fitness Tracking</a></li>
                    <li><a href="#" id="diet-nav">Diet Plan</a></li>
                </ul>
            </header>
            <div class="user-shenan">
                <div class="login_btn"><button id="show-login">Login</button></div>
                <div class="signup_btn"><button id="show-signup">Signup</button></div>
            </div>
            <h5></h5>
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
                <form>
                    <label for="email">Email</label>
                    <input type="text" id="email1" placeholder="Enter email">
                    <br>
       
                    <label for="password">Password</label>
                    <input type="password" id="password1" placeholder="Enter password">
                    <br>
       
                    <input type="checkbox" id="remember-me">
                    <label for="remember-me">Remember-me</label>
                    <br>
                    <br>
                    <button onclick="openlogin()">Submit</button>
                    <br>
       
                    <a href="#">Forgot password?</a>
                    <br>
                </form>
            </div>
            </div>
        </div>

        <div class="goals-container">
            <div class="goalsinfo-container">
                <div class="goalsinfo-img">
                    <img src="mygoalsimg.jpg" width="250px">
                </div>
                <div class="goalsinfo-text">
                    <h3>Welcome to our "My Goals" journey!</h3>
                    <p>Taking a few moments to answer these questions will help us tailor our services to your unique needs and goals. Understanding your objectives allows us to provide you with a more personalized and meaningful experience. Your input is valuable, and the information you provide will be kept confidential.</p>
                    <br>
                    <div class="getstarted">
                        <button id="show-quiz" class="start">Get started</button>
                        <span class="overlay"></span>
                    </div>

                </div>
            </div>
        </div>


        <div class="popquiz">
                       <div class="close_btn">&times;</div>
                        <div class="quiz-container" id="quiz">
                        <div class="quiz-header">
                          <h2 id="question">Question Text</h2>
                          <ul>
                            <li>
                              <input type="radio" name="answer" id="a" class="answer">
                              <label for="a" id="a_text"></label>
                            </li>
                            <li>
                              <input type="radio" name="answer" id="b" class="answer">
                              <label for="b" id="b_text"></label>
                            </li>
                            <li>
                              <input type="radio" name="answer" id="c" class="answer">
                              <label for="c" id="c_text"></label>
                            </li>
                            <li>
                              <input type="radio" name="answer" id="d" class="answer">
                              <label for="d" id="d_text"></label>
                            </li>
                          </ul>
                        </div class="formsubmit">
                        <button  id="submit">Submit</button>
                      </div>
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

            document.querySelector(".popquiz .close_btn").addEventListener("click",function(){
                document.querySelector(".popquiz").classList.remove("active");
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



            const quizData = [
  {
    question: "What's your biological sex?",
    a: "Male",
    b: "Female",
    c: "Transgender",
    d: "Rather not to say",
  },
  {
    question: "What's your age?",
    a: "15-20",
    b: "20-30",
    c: "30-40",
    d: "40 onwards",
  },
  {
    question: "How active are you?",
    a: "little or No Active",
    b: "Ligthly Active",
    c: "Moderatly Active",
    d: "Very Active",         
  },
  {
    question: "How tall are you? (in ft)",
    a: "1-2",
    b: "2-4",
    c: "4-6",
    d: "6 onwards"                  
  },
  {
    question: "Have you ever done Gym workout?",
    a: "Yes",
    b: "Never",  
    c: "4-6",
    d: "6 onwards" ,
  },
  {
    question: "Have you ever done Yoga?",
    a: "On daily basis",
    b: "On weekly basis", 
    c: "Not frequently",
    d: "Never" ,                    
  }];
  const quiz= document.getElementById('quiz')
  const answerEls = document.querySelectorAll('.answer')
  const questionEl = document.getElementById('question')
  const a_text = document.getElementById('a_text')
  const b_text = document.getElementById('b_text')
  const c_text = document.getElementById('c_text')
  const d_text = document.getElementById('d_text')
  const submitBtn = document.getElementById('submit')
  let currentQuiz = 0
  let score = 0
  loadQuiz()
  function loadQuiz() {
    deselectAnswers()
      const currentQuizData = quizData[currentQuiz]
      questionEl.innerText = currentQuizData.question
            a_text.innerText = currentQuizData.a
            b_text.innerText = currentQuizData.b
            c_text.innerText = currentQuizData.c
            d_text.innerText = currentQuizData.d
        }
        function deselectAnswers() {
            answerEls.forEach(answerEl => answerEl.checked = false)
        }
        submitBtn.addEventListener('click', () => {
            // const answer = getSelected()
               currentQuiz++
               if(currentQuiz < quizData.length) {
                   loadQuiz()}
              //  } else {
              //      quiz.innerHTML = `
              //      <h2>You answered ${score}/${quizData.length} questions correctly</h2>
              //      <button onclick="location.reload()">Reload</button>`
              // }
        });

        </script>
        <script type="text/javascript">
            //signup
            document.querySelector("#show-quiz").addEventListener("click",function(){
                document.querySelector(".popquiz").classList.add("active");
            });
            //  document.querySelector(".popquiz").addEventListener("click",function(){
            //     document.querySelector(".popquiz").classList.remove("active");
            // });



            overlay = document.querySelector(".overlay"),
            showBtn = document.querySelector(".start"),
            // closeBtn = document.querySelector(".close-btn");
            showBtn.addEventListener("click", () => section.classList.add("active"));
            overlay.addEventListener("click", () =>
                section.classList.remove("active")
            );
        </script>
        <script src="https://smtpjs.com/v3/smtp.js"></script>
    </body>
</html>