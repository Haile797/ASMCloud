<?php 
    // $conn = mysqli_connect('localhost','root','','asmcloud') 
    // or die("Cannot connect database".mysqli_connect_error());

    $conn = mysqli_connect("s465z7sj4pwhp7fn.cbetxkdyhwsb.us-east-1.rds.amazonaws.com","q438pn5sh6k1ffgq","amp1d4fangrnb25n","xc1206mcl8v7lh2v") 
    or die("Cannot connect database".mysqli_connect_error());

    mysqli_query($conn, 'SET NAMES "utf8"')
?>