<?php 
    $username= $_POST["user_name"];
    $password= $_POST["user_password"];

    $conn = mysqli_connect("localhost","root","","test");
    if(!$conn){
        echo'connection error :'.mysqli_connect_error();
    }
    
    $result = mysqli_query("select * from login where username= '$username' and password = '$password'") or die("Failed to query database".mysql_error());
    $row =mysqli_fetch_array($result,MYSQL_ASSOC);
    if($row['username'] == $username && $row['password']==$password){
        echo("LOGIN SUCCESS");
    }
    else{
        echo("LOGIN FAILED");   
    }
    mysqli_free_result($result);
    mysqli_close($conn)
?>