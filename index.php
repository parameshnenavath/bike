<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container" id="bikes">
        <nav>
            <img src="images/logo.png" class="logo">
            <a href="registration.html" class="btn">SignUp</a>
        </nav>
    </div>
    <div class="color-section">
        <div id="black"></div>
        <div id="green"></div>
        <div id="red"></div>
        <div id="blue"></div>
        <div id="gray"></div>
    </div>

    <div class="contant">
        <div>
            <h2>HONDA</h2>
            <h1>SP 125</h1>
            <p>The Honda SP 125 is powered by 124cc BS6 engine which develops a power of 10.72 bhp and a torque of
                10.9
                Nm. With both front and rear drum brakes, Honda SP 125 comes up with combined braking system of both
                wheels. This SP 125 bike weighs 116 kg and has a fuel tank capacity of 11.2 liters.</p>
        </div>
        <div>
            <a href="login.html" class="btn">LogIn</a>
        </div>
    </div>
    <script>
        let blackbtn = document.getElementById("black");
        let greenbtn = document.getElementById("green");
        let redbtn = document.getElementById("red");
        let bluebtn = document.getElementById("blue");
        let graybtn = document.getElementById("gray");
        let bikes = document.getElementById("bikes");

        blackbtn.onclick = function () {
            bikes.style.backgroundImage = "url(images/black1.png)";
        }
        greenbtn.onclick = function () {
            bikes.style.backgroundImage = "url(images/img1.jpeg)";
        }
        redbtn.onclick = function () {
            bikes.style.backgroundImage = "url(images/red.png)";
        }
        bluebtn.onclick = function () {
            bikes.style.backgroundImage = "url(images/blue1.jpeg)";
        }
        graybtn.onclick = function () {
            bikes.style.backgroundImage = "url(images/gray.png)";
        }
    </script>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

</html>