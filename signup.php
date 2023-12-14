<?php
    include("connection.php");
    if(isset($_POST['submit'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $password = $_POST['password'];

       
        $sql = "INSERT INTO `signupdetails` (`Fname`,`Lname`, `Email`, `Password`) VALUES ('$fname', '$lname','$email', '$password')";
        $result = mysqli_query($conn, $sql);
                

    }
?>