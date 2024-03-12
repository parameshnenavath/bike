<?php

include("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";


    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        echo "<script>location.href='home.php';</script>";
    } else {
        echo "<script>alert('password or email wrong');location.href='login.php';</script>";
    }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
    .container{
        width: 50%;
        margin-top: 100px;
    }
</style>
<body>
    <div class="container">
        <form action="" class="form form-control" method="POST">
            <div class="mb-5">
                <h1>Login !</h1>
            </div>

            <div>
                <label for="">Email</label>
                <input type="email" class="form form-control mb-4" name="email" placeholder="Enter Email" required>
            </div>

            <div>
                <label for="">Password</label>
                <input type="password" class="form form-control mb-4" name="password" placeholder="Enter Password"
                    required>
            </div>
            <div>
                <button class="btn btn-primary mb-4">Submit</button>
            </div>
            <div>
                <p>You are not registared <a href="registration.php">Registar here!</a></p>
            </div>

        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

</html>