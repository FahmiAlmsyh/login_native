<?php

include('config.php');

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = $connect->query($sql);

    $row = $result->fetch_object();
    
        $_SESSION['email'] = $email;
        
        $_SESSION['username'] = $row->username;
        header("location: index.php");
 

}

?>