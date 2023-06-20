<?php 
    // $conn = mysqli_connect('localhost','root','','asmcloud') 
    // or die("Cannot connect database".mysqli_connect_error());

    $conn = mysqli_connect("ckshdphy86qnz0bj.cbetxkdyhwsb.us-east-1.rds.amazonaws.com","o5icoe29sgf7n0u0","xszphbxw5i6tro82","erx6bbaiujv2q8r4") 
    or die("Cannot connect database".mysqli_connect_error());

    mysqli_query($conn, 'SET NAMES "utf8"')
?>