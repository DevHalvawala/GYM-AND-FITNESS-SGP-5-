<?php
    session_start();
    include("connection.php");
    include("functions.php");
    $user_data = check_login($con);

    $sql = "select * from timetable";
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

    <style>
        .schedule{
            padding:80px 0px;
        }

        .schedule .content{
            -webkit-display: flex;
            display: flex;
        }

        .schedule .content .box{
            flex:0 0 50%;
            max-width: 100%;
            padding:15px;
        }

        .schedule .content .text h2{
            font-size: 30px;
            font-weight: 500;
            color: #ffffff;
            padding: 0px 0px 20px;
        }

        .schedule .content .text p{
            font-size: 15px;
            line-height: 20px;
            color: #ffffff;
            margin: 0;
            padding: 0px 0px 20px;
            font-family: 'Open Sans', sans-serif;
        }
        .schedule .content .text img{
            width: 70%;
            height: 515px;
            margin-left: 90px;
            transform: rotateY(180deg);
        }

        .schedule .content .timing .table{
            width: 100%;
            border-collapse: collapse;
        }

        .schedule .content .timing .table td{
            border:1px solid #dfdfdf;
            padding: 36px;
            font-size: 16px;
            text-align: center;
            color:#ffffff;
        }

        .schedule .content .timing .table tr:nth-child(even) td.day{
            background-color: #222222;
        }
        .schedule .content .timing .table tr:nth-child(odd) td.day{
            background-color: #444444;
        }
        .schedule .content .timing .table tr:nth-child(1) td.day{
            background-color: #9eed2f;
            color: black;
            border: 1.6px solid black;
            font-size: 18px;
        }
        .schedule .content .timing .table tr td.day{
            color:#ffffff;
            border: 0.2px solid wheat;
        }

        .gallery .content{
            -webkit-display: flex;
            display: flex;
            flex-wrap: wrap;
        }

        .gallery .content .box{
            flex:0 0 50%;
            max-width: 50%; 
        }
        .gallery .content .box img{
            display: block;
            width: 100%;
            padding:  12px 12px;
            -webkit-filter: grayscale(100%);
            filter: grayscale(100%);
            -webkit-transition: all .5s ease;
            transition: all .5s ease;
        }
        .gallery .content .box img:hover{
            -webkit-filter: grayscale(0%);
            filter: grayscale(0%);
        }

        .gallery h2{
            font-size: 30px;
            font-weight: 500;
            color: #000000;
            padding: 0px 0px 20px;
            text-align: center;
        }
    </style>

</head>
<body>
    
    <!-- header section starts  -->
    <div style="width: 100%;">
        <?php include_once 'header.php';?>  
    </div>
    <!-- header section ends -->


    <!-- Start Schedule -->
    <section class="schedule" id="schedule">
        <div class="container">
              <div class="content">
                     <div class="box text wow slideInLeft">
                            <h2>Classes Schedule</h2>
                            <p>
                                We provide daily 2 hour GYM session according to your packages. We provide schedule to be strictly followed to improve your health, fitness and reach your goal in a proper guided manner.
                            </p>
                            <img src="images/schedule1.png" alt="schedule" />
                     </div>
                     <div class="box timing wow slideInRight">
                    <table class="table">
                         <tbody>
                            <tr>
                                <td class="day"><strong>Days</strong></td>
                                <td class="day"><strong>Time</strong></td>
                                <td class="day"><strong>Excercises</strong></td>
                                <td class="day"><strong>Room Numbers</strong></td>
                            </tr>
                             <tr>
                                 <td class="day"><?php $row = mysqli_fetch_array($result); echo $row[1]; ?></td>
                                 <td><strong><?php echo $row[2]; ?></strong></td>
                                 <td><?php echo $row[3]; ?></td>
                                 <td><?php echo $row[4]; ?></td>
                             </tr>
                             <tr>
                                 <td class="day"><?php $row = mysqli_fetch_array($result); echo $row[1]; ?></td>
                                 <td><strong><?php echo $row[2]; ?></strong></td>
                                 <td><?php echo $row[3]; ?></td>
                                 <td><?php echo $row[4]; ?></td>
                             </tr>
                             <tr>
                                 <td class="day"><?php $row = mysqli_fetch_array($result); echo $row[1]; ?></td>
                                 <td><strong><?php echo $row[2]; ?></strong></td>
                                 <td><?php echo $row[3]; ?></td>
                                 <td><?php echo $row[4]; ?></td>
                             </tr>
                             <tr>
                                 <td class="day"><?php $row = mysqli_fetch_array($result); echo $row[1]; ?></td>
                                 <td><strong><?php echo $row[2]; ?></strong></td>
                                 <td><?php echo $row[3]; ?></td>
                                 <td><?php echo $row[4]; ?></td>
                             </tr>
                             <tr>
                                 <td class="day"><?php $row = mysqli_fetch_array($result); echo $row[1]; ?></td>
                                 <td><strong><?php echo $row[2]; ?></strong></td>
                                 <td><?php echo $row[3]; ?></td>
                                 <td><?php echo $row[4]; ?></td>
                             </tr>
                             <tr>
                                 <td class="day"><?php $row = mysqli_fetch_array($result); echo $row[1]; ?></td>
                                 <td><strong><?php echo $row[2]; ?></strong></td>
                                 <td><?php echo $row[3]; ?></td>
                                 <td><?php echo $row[4]; ?></td>
                             </tr>
                         </tbody>
                    </table>
                     </div>
              </div>
        </div>
    </section>
    <!-- End Schedule -->


    <h1 class="heading"> <span> Workout Gallery </span> </h1><br><br><br>


    <!-- Start Gallery -->
    <section class="gallery" id="gallery">
       <div class="content">
            <div class="box wow slideInLeft">
                 <img src="images/gallery1.jpg" alt="gallery" />
            </div>
            <div class="box wow slideInRight">
                 <img src="images/gallery2.jpg" alt="gallery" />
            </div>
            <div class="box wow slideInLeft">
                 <img src="images/gallery3.jpg" alt="gallery" />
            </div>
            <div class="box wow slideInRight">
                 <img src="images/gallery4.jpg" alt="gallery" />
            </div>
       </div>
    </section>
    <!-- End Gallery -->

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