<?php 
    // $conn = mysqli_connect('localhost','root','','asmcloud') 
    // or die("Cannot connect database".mysqli_connect_error());

    $conn = mysqli_connect("s465z7sj4pwhp7fn.cbetxkdyhwsb.us-east-1.rds.amazonaws.com","fwghmmsbjw0gu1pw","j0n3jnwfd58o894m","a1c2nuj5oycrm237") 
    or die("Cannot connect database".mysqli_connect_error());

    mysqli_query($conn, 'SET NAMES "utf8"')
?>