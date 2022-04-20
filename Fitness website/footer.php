<?php
    include("connection.php");  

    $sql = "select * from timing";
    $result = mysqli_query($con, $sql);


    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $email = $_POST['email'];
        $user_name = $user_data[7];
     
        if(!empty($email))
        {
            $query = "insert into newsletter(user_name, e_mail) values('$user_name', '$email')";
            mysqli_query($con, $query);
            echo "<script type='text/javascript'>alert('Thank you for Subscribing to our Newsletter!');</script>";
            die;
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F7 - Gym</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <!-- footer section starts  -->

    <section class="footer">
        <div class="box-container">

            <div class="box">
                <h3>Quick links</h3>
                <a class="links" href="#home">Home</a>
                <a class="links" href="#about">Classes</a>
                <a class="links" href="#pricing">Timetable</a>
                <a class="links" href="#trainers">Rental service</a>
                <a class="links" href="#blogs">About</a>
            </div>

            <div class="box">
                <h3>Opening hours</h3>
                <p> Monday : <i><?php $row = mysqli_fetch_array($result); echo $row[1]; ?> - <?php echo $row[2]; ?></i></p>
                <p> Tuesday : <i><?php $row = mysqli_fetch_array($result); echo $row[1]; ?> - <?php echo $row[2]; ?></i></p>
                <p> Wednesday : <i><?php $row = mysqli_fetch_array($result); echo $row[1]; ?> - <?php echo $row[2]; ?></i></p>
                <p> Thursday : <i><?php $row = mysqli_fetch_array($result); echo $row[1]; ?> - <?php echo $row[2]; ?></i></p>
                <p> Friday : <i><?php $row = mysqli_fetch_array($result); echo $row[1]; ?> - <?php echo $row[2]; ?></i></p>
                <p> Saturday : <i><?php $row = mysqli_fetch_array($result); echo $row[1]; ?> - <?php echo $row[2]; ?></i></p>
                <p> Sunday : <i>Closed</i></p>
            </div>

            <div class="box contact">
                <h3>Contact us</h3>
                <p> <i class="fas fa-phone"></i> +91-7016578910 </p>
                <p> <i class="fas fa-phone"></i> +91-9867587631 </p>
                <p> <i class="fas fa-envelope"></i> fgym@gmail.com </p>
            </div>

            <div class="box">
                <h3>Newsletter</h3>
                <p>Subscribe for our latest updates</p>
                <form method="POST">
                    <input type="email" name="email" id="email" class="email" placeholder="Enter your email" id="" required>
                    <input type="submit" value="Subscribe" class="btn">
                </form>
            </div>

        </div>
    </section>
    <div class="credit"> Designed by <span> SGP group - 5</span></div>
    <!-- footer section ends -->

    <style type="text/css">
        .credit {
            font-size: 2rem;
            text-align: center;
            padding: 9px;
            color: white;
            background: #111;
            line-height: 1.5;
        }

        .credit span {
            color: #c4ff14;
        }
    </style>

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>
</html>