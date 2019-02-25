<?php
$diff = strtotime('2019-04-25 01:01:01') - strtotime('now');

?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>JHAKI.com</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">


    <!-- Font -->

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700%7CPoppins:400,500" rel="stylesheet">

    <!-- Stylesheets -->

    <link href="common-css/bootstrap.css" rel="stylesheet">


    <link href="common-css/ionicons.css" rel="stylesheet">


    <link rel="stylesheet" href="common-css/jquery.classycountdown.css"/>

    <link href="01-comming-soon/css/styles.css" rel="stylesheet">

    <link href="01-comming-soon/css/responsive.css" rel="stylesheet">

</head>
<body>

<div class="main-area">
    <div class="container full-height position-static">

        <section class="left-section full-height">

            <a class="logo" href="#"><img src="images/jhaki.jpeg" alt="Logo"></a>

            <div class="display-table">
                <div class="display-table-cell">
                    <div class="main-content">
                        <h1 class="title"><b>Coming Soon!</b></h1>
                        <p><strong>TheJHAKI's</strong> are working hard to finish the development of prime intermodal
                            logistics platform. Our target
                            launch date is
                            <strong>April 25 2019</strong></p>

                        <div class="email-input-area">
                            <form method="post">
                                <input class="email-input" name="email" type="text" placeholder="Enter your email"/>
                                <button class="submit-btn" name="submit" type="submit"><b>NOTIFY US</b></button>
                            </form>
                        </div><!-- email-input-area -->

                        <p class="post-desc">Sign up now to get early notification of our launch date!</p>
                    </div><!-- main-content -->
                </div><!-- display-table-cell -->
            </div><!-- display-table -->

            <ul class="footer-icons">
                <li>Stay in touch :</li>
                <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                <li><a href="#"><i class="ion-social-pinterest"></i></a></li>
            </ul>

        </section><!-- left-section -->

        <section class="right-section" style="background-image: url(images/shipper.jpg)">

            <div class="display-table center-text">
                <div class="display-table-cell">


                    <div id="rounded-countdown">
                        <div class="countdown" data-remaining-sec="<?php echo $diff; ?>"></div>
                    </div>

                </div><!-- display-table-cell -->
            </div><!-- display-table -->

        </section><!-- right-section -->

    </div><!-- container -->
</div><!-- main-area -->

<!-- SCIPTS -->

<script src="common-js/jquery-3.1.1.min.js"></script>

<script src="common-js/tether.min.js"></script>

<script src="common-js/bootstrap.js"></script>

<script src="common-js/jquery.classycountdown.js"></script>

<script src="common-js/jquery.knob.js"></script>

<script src="common-js/jquery.throttle.js"></script>

<script src="common-js/scripts.js"></script>

</body>
</html>