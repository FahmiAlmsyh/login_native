<?php
include('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $username = $_POST['username'];

    $sql = "INSERT INTO users (email, password, username) VALUES ('$email', '$password', '$username')";

    if ($connect->query($sql) === TRUE) {
        header("location: login.php");
        exit();
    } else {
        $error = "Error: " . $sql . "<br>" . $connect->error;
    }
}
?>