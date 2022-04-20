<?php
    session_start();
    include("connection.php");
    include("functions.php");
    $user_data = check_login($con);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F7 - Gym</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

    <style>
        .info {
            color: skyblue;
            margin-top: 300px;
            margin-bottom: 230px;
            font-size: 30px;
        }

        .info h1 {
            margin-bottom: 30px;
        }

        .info .pay-btn {
            display: inline-block;
            border: none;
            padding: 7px 38px;
            padding-left: 95px;
            padding-right: 95px;
            background: linear-gradient(130deg, #9eed2f 93%, transparent 90%);
            color: black;
            font-weight: 1000;
            text-decoration: bolder;
            cursor: pointer;
            font-size: 20px;
        }

    </style>

</head>
<body>
    <div style="width: 100%;">
        <?php include_once 'header.php';?>  
    </div>


    <div class="info">
        <center>
            <h1>Proceed to Checkout</h1>
            <a href="index.php" class="pay-btn">Pay now -></a>
    </div>


    <div style="width: 100%;">
        <?php include_once 'footer.php';?>  
    </div>
</body>


<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>