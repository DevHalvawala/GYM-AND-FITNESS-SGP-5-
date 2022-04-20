<?php
    session_start();
    include("connection.php");
    include("functions.php");
    $user_data = check_login($con);

    $sql = "select * from prices";
    $result = mysqli_query($con, $sql);
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
    

<!-- header section starts  -->
<div style="width: 100%;">
    <?php include_once 'header.php';?>  
</div>
<!-- header section ends  -->


<!-- home section starts  -->
<section class="home" id="home">

    <div class="swiper home-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide" style="background: url(images/home-bg-3.jpg) no-repeat;">
                <div class="content">
                    <span>Be fit, Be strong</span>
                    <h3>Make yourself stronger than your excuses.</h3>
                    <a href="#pricing" class="btn">Get started</a>
                </div>
            </div>

        </div>

        <div class="swiper-pagination"></div>

    </div>

</section>
<!-- home section ends -->


<!-- features section starts  -->
<section class="features" id="features">

    <h1 class="heading"> <span>Gym features</span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="images/f-img-1.jpg" alt="">
            </div>
            <div class="content">
                <img src="images/icon-1.png" alt="">
                <h3>Body building</h3>
                <p style="padding-bottom: 60px;">We offer affordable and professional equipments and trainers to our customers</p>
            </div>
        </div>

        <div class="box second">
            <div class="image">
                <img src="images/f-img-2.jpg" alt="">
            </div>
            <div class="content">
                <img src="images/icon-2.png" alt="">
                <h3>Gym for men</h3>
                <p>We offer gym and fitness exercises to all Men enthusiasts</p>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/f-img-3.jpg" alt="">
            </div>
            <div class="content">
                <img src="images/icon-3.png" alt="">
                <h3>Gym for women</h3>
                <p>We offer gym and fitness exercises to all Women enthusiasts</p>
            </div>
        </div>

    </div>

</section>
<!-- features section ends -->


<!-- pricing section starts  -->
<section class="pricing" id="pricing">

    <div class="information">
        <span>Pricing plan</span>
        <h3>Affordable pricing plans for you !</h3>
        <p>We offer all gym enthusiast 2 affordable gym plans at our gym, first is the Basic plan and the second is the Premium plan.</p>
        <p> <i class="fas fa-check"></i> Cardio exercise </p>
        <p> <i class="fas fa-check"></i> Weight lifting </p>
        <p> <i class="fas fa-check"></i> Diet plans </p>
    </div>

    <div class="plan">
        <h3><u>Basic plan</u></h3>
        <div class="price"><span>₹ </span><?php $row = mysqli_fetch_array($result); echo $row[2]; ?><span>/month</span></div>
       <div class="list">
        <p> <i class="fas fa-check"></i> Trainer </p>
        <p> <i class="fas fa-check"></i> Cardio exercise </p>
        <p> <i class="fas fa-check"></i> Weight lifting </p>
        <p> <i class="fas fa-check"></i> Diet plans </p>
       </div>
       <a href="classes.php" class="btn">Get started</a>
    </div>

    <div class="plan">
        <h3><u>Premium plan</u></h3>
        <div class="price"><span>₹ </span><?php $row = mysqli_fetch_array($result); echo $row[2]; ?><span>/month</span></div>
       <div class="list">
        <p> <i class="fas fa-check"></i> Personal training </p>
        <p> <i class="fas fa-check"></i> Cardio exercise </p>
        <p> <i class="fas fa-check"></i> Weight lifting </p>
        <p> <i class="fas fa-check"></i> Diet plans </p>
        <p> <i class="fas fa-check"></i> Equipment rental </p>
       </div>
       <a href="classes.php" class="btn">Get started</a>
    </div>

</section>
<!-- pricing section ends -->


<!-- trainers section starts  -->
<section class="trainers" id="trainers">

    <h1 class="heading"> <span>Our expert trainers</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/trainer-3.jpg" alt="">
            <div class="content">
                <span>Expert trainer</span>
                <h3>Mark Bertul</h3>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                </div>
            </div>
        </div>

        <div class="box">
            <img src="images/trainer-2.jpg" alt="">
            <div class="content">
                <span>Cardio expert</span>
                <h3>Serio Mike</h3>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <!-- <a href="#" class="fab fa-pinterest"></a>
                    <a href="#" class="fab fa-linkedin"></a> -->
                </div>
            </div>
        </div>

        <div class="box">
            <img src="images/trainer-1.jpg" alt="">
            <div class="content">
                <span>Expert trainer</span>
                <h3>John deo</h3>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                </div>
            </div>
        </div>

        <div class="box">
            <img src="images/trainer-4.jpg" alt="">
            <div class="content">
                <span>Fitness Coach</span>
                <h3>Todo sham</h3>
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

    <span>Join us Today</span>
    <h3>Get upto 30% discount</h3>
    <p>Buy our membership today and get flat 30% instant discount. Hurry up, offer valid till 30th April, 2022</p>
    <a href="#pricing" class="btn">Join now</a>

</section>
<!-- banner section ends -->


<!-- BMI section -->
    <section class="bmi-section spad">
        <div class="bmi-bg set-bg" data-setbg="img/bmi.jpg"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-7 ml-auto">
                    <div class="section-title mb-0">
                        <h2>Calculate your BMI</h2>
                        <p>Body Mass Index (BMI) Calculator indicates whether your body weight is appropriate for your height and tells you the associated risk factors and gives you suggestions to reduce your weight.</p>
                    </div>
                    <div class="bmi-calculator-warp">
                        <div class="bmi-calculator">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="text" placeholder="Weight (KG)" id="bmi-weight">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" placeholder="Height (M)" id="bmi-hight">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" id="bmi-result" readonly>
                                </div>
                                <div class="col-sm-6">
                                    <button onclick="computeBMI()" class="site-btn" id="bmi-submit">Calculate</button>
                                </div>
                            </div>
                            <p>Body Mass Index (BMI) Calculator indicates whether your body weight is appropriate for your height and tells you the associated risk factors and gives you suggestions to reduce your weight.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- BMI section end -->


<!-- footer section starts  -->
<div style="width: 100%;">
    <?php include_once 'footer.php';?>  
</div>
<!-- footer section ends -->

<script type="text/javascript">
    function computeBMI()
    {
        var height = Number(document.getElementById("bmi-hight").value);
        var weight = Number(document.getElementById("bmi-weight").value);
        var result = weight / (height * height);

        var output = Math.round(result * 100) / 100;
        if (output < 18.5)
            document.getElementById("bmi-result").value = output + " (Underweight)";
        else if (output >= 18.5 && output <= 25)
            document.getElementById("bmi-result").value = output + " (Normal)";
        else if (output >= 25 && output <= 30)
            document.getElementById("bmi-result").value = output + " (Obese)";
        else if (output > 30)
            document.getElementById("bmi-result").value = output + " (Overweight)";
        else
            document.getElementById("bmi-result").value = output; 
    }

    $('#bmi-submit').on('click', function(){
        computeBMI();

</script>

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>