<?php
include('config.php');
session_start();

if (!isset($_SESSION['email'])) {
    echo "<script>
    alert('Anda belum login. Silakan login terlebih dahulu!');
    window.location.href = 'login.php';
</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HALAMAN INDEX</title>
</head>

<body>
    <h1>INDEX</h1>
    <p><?= $_SESSION['username'] ?></p>
    <a href="logout.php">Logout</a>
</body>

</html>