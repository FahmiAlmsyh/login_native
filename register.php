<?php
include('config.php');

$sql = mysqli_query($connect, "SELECT COUNT(*) as total FROM users");
$result = $sql->fetch_object();
if ($result->total >= 1) {
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <h1 class="text-center my-5">Register</h1>

        <div class="card">
            <div class="card-body">
                <form action="register_action.php" method="post">
                    <input type="text" name="username" class="form-control mb-3" placeholder="Masukkan Username Anda">
                    <input type="email" name="email" class="form-control mb-3" placeholder="Masukkan Email Anda">
                    <input type="password" name="password" class="form-control" placeholder="Masukkan Password Anda">
                    <button type="submit" class="btn btn-outline-primary mt-3">Kirim</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>