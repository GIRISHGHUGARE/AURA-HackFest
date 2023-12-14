<?php

include("radioconnection.php");

if(isset($_POST['submit']))

{
    $a = $_POST['a_text'];
    $b = $_POST['b_text'];
    $c = $_POST['c_text'];
    $d = $_POST['d_text'];

    echo "$a";
    echo "$b";
    echo "$c";
    echo "$d";
    
    $query = "INSERT INTO `radiobuttons` (`A`, `B`, `C`, `D`) VALUES ('$a', '$b', '$c', '$d')";
    $query_run = mysqli_query($con, $query);

}
?>
