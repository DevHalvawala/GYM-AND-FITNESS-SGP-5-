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
    

    <!-- header section starts -->
    <div style="width: 100%;">
        <?php include_once 'header.php';?>  
    </div>
    <!-- header section ends -->


    <!-- Start Classes -->
    <section class="classes" id="classes">
    	<div class="container">
    		 <div class="content">
    		 	  <div class="box img wow slideInLeft">
    		 	  	 <img src="images/class2.png" alt="classes" />
    		 	  </div>
    		 	  <div class="box text wow slideInRight">
    		 	  	 <h2>Our Classes</h2>
    		 	  	 <p>This class is designed to help shed that excess fat while building strength and endurance. This class includes circuit training, cardio exercise, body weight exercises and finishes with core training and stretching for a complete workout.</p>
    		 	  	<div class="class-items">
    		 	  	 <div class="item wow bounceInUp">
                         <div class="item-img">
                         	 <img src="images/class2.jpeg" alt="classes" />
                         	 <div class="price">
                         	 	 ₹ <?php $row = mysqli_fetch_array($result); echo $row[2]; ?>
                         	 </div>
                         </div>
                         <div class="item-text">
                         	  <h4>Basic plan</h4>
                         	  <p>Unlimited access to GYM with trainer during open GYM time, along with daily plans.</p>
                         	  <a href="">Get Details</a>
                         </div>
    		 	  	 </div>
    		 	  	 <div class="item wow bounceInUp">
                         <div class="item-text">
                         	  <h4>Premium plan</h4>
                         	  <p>Unlimited Access to Functional Fitness group classes. Along with a personal trainer during open hym time + Equipment rental services.</p>
                         	  <a href="">Get Details</a>
                         </div>
                         <div class="item-img">
                         	 <img src="images/class3.jpeg" alt="classes" />
                         	 <div class="price">
                         	 	 ₹ <?php $row = mysqli_fetch_array($result); echo $row[2]; ?>
                         	 </div>
                         </div>
    		 	  	 </div>
    		 	  	</div>
    		 	  </div>
    		 </div>
    	</div>
    </section>
    <!-- End Classes -->

    <style>
        /*Classes Section*/

        .classes{
        	padding:80px 0px 50px;
        	background-color: #ffffff;
        }

        .classes .content{
        	-webkit-display: flex;
        	display: flex;
        }

        .classes .content .box{
        	padding:15px;
        	flex:0 0 50%;
        	max-width: 50%;
        }

        .classes .content .img img{
        	width: 100%;
        	-webkit-transform: rotateY(180deg);
        	transform: rotateY(180deg);
        }

        .classes .content .text h2{
            font-size: 30px;
            font-weight: 500;
            color: #000000;
            padding: 0px 0px 20px;
        }

        .classes .content .text p{
        	font-size: 15px;
            line-height: 20px;
            color: #000000;
            margin: 0;
            padding: 0px 0px 30px;
            font-family: 'Open Sans', sans-serif;
        }


        .classes .content .class-items .item{
        	margin-bottom: 30px;
        	display: flex;
        }
        .classes .content .class-items .item:nth-child(1){
         background-color: #222222;
        }
        .classes .content .class-items .item:nth-child(2){
         background-color: #c11325;
        }
        .classes .content .class-items .item .item-text{
        	padding: 15px;
        	display: flex;
        	flex-direction: column;
        	justify-content: center;
        }
        .classes .content .class-items .item .item-text,
        .classes .content .class-items .item .item-img{
        	flex:0 0 50%;
        	max-width: 50%;
        	position: relative;
        }

        .classes .content .class-items .item .item-img img{
         width: 100%;
         display: block;
        }
        .classes .content .class-items .item .item-img .price{
        	position: absolute;
        	height: 50px;
        	width: 90px;
        	font-size:20px;
        	font-weight: 500; 
        	color:#ffffff;
        	text-align: center;
        	line-height: 50px;
        }
        .classes .content .class-items .item:nth-child(1) .item-img .price{
         background-color: #c11325;
         left:0;
         top:0;
        }
        .classes .content .class-items .item:nth-child(2) .item-img .price{
         background-color: #222222;
         right:0;
         top:0;
        }
        .classes .content .class-items .item .item-text h4{
        	font-size: 20px;
            margin: 0;
            padding: 0px 0px 15px;
            font-weight: 500;
            color: #ffffff;
            text-transform: capitalize;
            text-align: left;
        }

        .classes .content .class-items .item .item-text p{
        	font-size: 15px;
            line-height: 20px;
            color: #ffffff;
            text-align:left;
            margin: 0;
            padding:0 0 20px;
            font-family: 'Open Sans', sans-serif;
        }
        .classes .content .class-items .item .item-text a{
         font-size: 16px;
         text-decoration: none;
         display: inline-block;
        }

        .classes .content .class-items .item .item-text a{
        	color:#ffffff;
        }
    </style>


    <!-- footer section starts  -->
    <div style="width: 100%;">
        <?php include_once 'footer.php';?>  
    </div>
    <!-- footer section ends -->


</body>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>