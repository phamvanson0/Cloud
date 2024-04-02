<?php
    $conn = mysqli_connect("jsftj8ez0cevjz8v.cbetxkdyhwsb.us-east-1.rds.amazonaws.com", "k5s4tlcae6rkxopr", "ristiteyev9lcwqs", "xk8oibhzbbmbykmk") 
    or die("Cannot connect database".mysqli_connect_error());     
    //mysql://k5s4tlcae6rkxopr:ristiteyev9lcwqs@jsftj8ez0cevjz8v.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306/xk8oibhzbbmbykmk
    mysqli_query($conn,'SET NAMES "utf8"');
    //mysql_close($conn);
?>
