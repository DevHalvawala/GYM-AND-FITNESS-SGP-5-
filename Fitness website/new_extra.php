<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F Gym</title>

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


<!-- home section starts  -->

<section class="home" id="home">

    <div class="swiper home-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide" style="background: url(images/home-bg-1.jpg) no-repeat;">
                <div class="content">
                    <span>be fit, be strong</span>
                    <h3>Make yourself stronger than your excuses.</h3>
                    <a href="#" class="btn">get started</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background: url(images/home-bg-2.jpg) no-repeat;">
                <div class="content">
                    <span>be strong, be fit</span>
                    <h3>Make yourself stronger than your excuses.</h3>
                    <a href="#" class="btn">get started</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background: url(images/home-bg-3.jpg) no-repeat;">
                <div class="content">
                    <span>be strong, be fit</span>
                    <h3>Make yourself stronger than your excuses.</h3>
                    <a href="#" class="btn">get started</a>
                </div>
            </div>

        </div>

        <div class="swiper-pagination"></div>

    </div>

</section>

<!-- home section ends -->


<!-- about section  -->


<!-- features section starts  -->

<section class="features" id="features">

    <h1 class="heading"> <span>gym features</span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="images/f-img-1.jpg" alt="">
            </div>
            <div class="content">
                <img src="images/icon-1.png" alt="">
                <h3>body building</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, atque.</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>

        <div class="box second">
            <div class="image">
                <img src="images/f-img-2.jpg" alt="">
            </div>
            <div class="content">
                <img src="images/icon-2.png" alt="">
                <h3>gym for men</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, atque.</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/f-img-3.jpg" alt="">
            </div>
            <div class="content">
                <img src="images/icon-3.png" alt="">
                <h3>gym for women</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, atque.</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>

    </div>

</section>

<!-- features section ends -->

<!-- pricing section starts  -->

<section class="pricing" id="pricing">

    <div class="information">
        <span>pricing plan</span>
        <h3>affordable pricing plan for your</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam dolore excepturi ea suscipit fugiat cum quae, rerum optio mollitia! Tempora?</p>
        <p> <i class="fas fa-check"></i> cardio exercise </p>
        <p> <i class="fas fa-check"></i> weight lifting </p>
        <p> <i class="fas fa-check"></i> diet plans </p>
        <p> <i class="fas fa-check"></i> overall results </p>
        <a href="#" class="btn">all pricing</a>
    </div>

    <div class="plan basic">
        <h3>basic plan</h3>
        <div class="price"><span>$</span>30<span>/mo</span></div>
       <div class="list">
        <p> <i class="fas fa-check"></i> personal training </p>
        <p> <i class="fas fa-check"></i> cardio exercise </p>
        <p> <i class="fas fa-check"></i> weight lifting </p>
        <p> <i class="fas fa-check"></i> diet plans </p>
        <p> <i class="fas fa-check"></i> overall results </p>
       </div>
       <a href="#" class="btn">get started</a>
    </div>

    <div class="plan">
        <h3>premium plan</h3>
        <div class="price"><span>$</span>90<span>/mo</span></div>
       <div class="list">
        <p> <i class="fas fa-check"></i> personal training </p>
        <p> <i class="fas fa-check"></i> cardio exercise </p>
        <p> <i class="fas fa-check"></i> weight lifting </p>
        <p> <i class="fas fa-check"></i> diet plans </p>
        <p> <i class="fas fa-check"></i> overall results </p>
       </div>
       <a href="#" class="btn">get started</a>
    </div>

</section>

<!-- pricing section ends -->

<!-- trainers section starts  -->

<section class="trainers" id="trainers">

    <h1 class="heading"> <span>expert trainers</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/trainer-1.jpg" alt="">
            <div class="content">
                <span>expert trainer</span>
                <h3>john deo</h3>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                </div>
            </div>
        </div>

        <div class="box">
            <img src="images/trainer-2.jpg" alt="">
            <div class="content">
                <span>expert trainer</span>
                <h3>john deo</h3>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <!-- <a href="#" class="fab fa-pinterest"></a>
                    <a href="#" class="fab fa-linkedin"></a> -->
                </div>
            </div>
        </div>

        <div class="box">
            <img src="images/trainer-3.jpg" alt="">
            <div class="content">
                <span>expert trainer</span>
                <h3>john deo</h3>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                </div>
            </div>
        </div>

        <div class="box">
            <img src="images/trainer-4.jpg" alt="">
            <div class="content">
                <span>expert trainer</span>
                <h3>john deo</h3>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>

                </div>
            </div>
        </div>

    </div>

</section>

<!-- trainers section ends -->

<!-- banner section starts  -->

<section class="banner">

    <span>join us today</span>
    <h3>get upto 30% discount</h3>
    <p>Buy our membership today and get flat 30% instant discount. Hurry up, offer valid till 30th April, 2022</p>
    <a href="#" class="btn">get discount</a>

</section>

<!-- banner section ends -->


<!--  review section  -->



<!-- blogs section  -->



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