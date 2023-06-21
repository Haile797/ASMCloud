<?php 
    // $conn = mysqli_connect('localhost','root','','asmcloud') 
    // or die("Cannot connect database".mysqli_connect_error());

    $conn = mysqli_connect("co28d739i4m2sb7j.cbetxkdyhwsb.us-east-1.rds.amazonaws.com","sp938v5zbjyowac9","i20714xloi0o3un7","q64olmavutpw3ztf") 
    or die("Cannot connect database".mysqli_connect_error());

    mysqli_query($conn, 'SET NAMES "utf8"')
?>