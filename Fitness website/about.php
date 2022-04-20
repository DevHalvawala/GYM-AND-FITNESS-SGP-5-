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
</head>

<body>
    <!-- header section starts      -->
    <div style="width: 100%;">
        <?php include_once 'header.php';?>  
    </div>
    <!-- header section ends     -->


    <!-- about section starts  -->
    <section class="about" id="about">

        <div class="image">
            <img src="images/about_image.jpg" alt="">
        </div>

        <div class="content" style="padding-top: 25px;">
            <span>About us</span>
            <h3 class="title">Every day is a chance to become better</h3>
            <p>Gym and Fitness was founded as a family owned and operated business specialising in supplying high-quality gym equipment at great prices.

            Instead of being just another gym equipment retailer, we wanted to be the best in the industry and set their minds to doing so!</p>
            <div class="box-container">
                <div class="box">
                    <h3><i class="fas fa-check"></i>OUR PHILOSOPHY</h3>
                    <p>To offer the best equipment, range of classes, knowledgeable staff and personal advice in a welcoming environment.</p>
                </div>
                <div class="box">
                    <h3><i class="fas fa-check"></i>Communication</h3>
                    <p>Customers are why we exist and we’re passionate about delivering exceptional, personalised customer service to all.</p>
                </div>
                <div class="box">
                    <h3><i class="fas fa-check"></i>strategies</h3>
                    <p>We believe open, direct and supportive communication is the foundation of any successful organisation.</p>
                </div>
                <div class="box">
                    <h3><i class="fas fa-check"></i>Innovation</h3>
                    <p>To help turn our ideas into reality, we embrace a culture of creative innovation in our people, processes and products.</p>
                </div>
            </div>
        </div>

    </section>
    <!-- about section ends -->


    <!-- footer section starts  -->
    <div style="width: 100%;">
        <?php include_once 'footer.php';?>  
    </div>
    <!-- footer section ends -->


    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>
</html>