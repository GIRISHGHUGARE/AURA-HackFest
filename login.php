<?php
    include("connection.php");

    if(isset($_POST['submit_login'])){
        $email = $_POST['email1'];
        $password = $_POST['password1'];
        $sql = "SELECT * FROM `signupdetails` WHERE `Email`='$email' AND `Password`='$password'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['Email'] === $email && $row['Password'] === $password) {
                echo "Logged in!";
                header("Location: welcome.php");
                exit();
            }else{
                
            }
        }else{
            header("Location: welcome1.php");
            exit();
        }
    }
?>