<?php
include("connection.php");
$error = "";
$msg = "";
if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    if (!empty($name) && !empty($email) && !empty($phone) && !empty($subject) && !empty($message)) {

        $sql = "INSERT INTO contact (name,email,phone,subject,message) VALUES ('$name','$email','$phone','$subject','$message')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            
            $msg = "<p class='alert alert-success'>Message Send Successfully</p> ";
        } else {
            $error = "<p class='alert alert-warning'>Message Not Send Successfully</p> ";
        }
    } else {
        $error = "<p class='alert alert-warning'>Please Fill all the fields</p>";
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta Tags -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="images/favicon.ico">

    <!--	Fonts
    ========================================================-->
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">
    <!-- FOR MORE PROJECTS visit: codeastro.com -->
    <!--	Css Link
    ========================================================-->
    <link rel="stylesheet" type="text/css" href="css/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/css/bootstrap-slider.css">
    <link rel="stylesheet" type="text/css" href="css/css/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="css/css/layerslider.css">
    <link rel="stylesheet" type="text/css" href="css/css/color.css" id="color-change">
    <link rel="stylesheet" type="text/css" href="css/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css">
    <link rel="stylesheet" type="text/css" href="css/css/style.css">

    <!--	Title
    =========================================================-->
    <title>DreamScape</title>
</head>

<body>

    
    <div id="page-wrapper">
        <div class="row">
            <?php 
            // include ("inc/my_header.php");
            ?>
            <div class="full-row">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 mb-5 bg-secondary">
                            <div class="contact-info">
                                <h3 class="mb-4 mt-4 text-white">Contacts</h3>

                                <ul>
                                    <li class="d-flex mb-4"> <i
                                            class="fas fa-map-marker-alt text-white mr-2 font-13 mt-1"></i>
                                        <div class="contact-address">
                                            <h5 class="text-white">Address</h5>
                                            <span class="text-white">27 Ingram Street, Kahawa Sukari</span> <br>
                                            <span class="text-white">27 Ingram Street, Kahawa Sukari</span>
                                        </div>
                                    </li>
                                    <li class="d-flex mb-4"> <i
                                            class="fas fa-phone-alt text-white mr-2 font-13 mt-1"></i>
                                        <div class="contact-address">
                                            <h5 class="text-white">Call Us</h5>
                                            <span class="d-table text-white">+1 234-567-8910</span>
                                            <span class="text-white">+1 243-765-4321 </span>
                                        </div>
                                    </li>
                                    <li class="d-flex mb-4"> <i
                                            class="fas fa-envelope text-white mr-2 font-13 mt-1"></i>
                                        <div class="contact-address">
                                            <h5 class="text-white">Email Address</h5>
                                            <span class="d-table text-white">dreamscape@realestatest.com</span>
                                            <span class="text-white">dreamscape@realestatest.com</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-1"></div>
                        <div class="col-md-12 col-lg-7">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h2 class="text-secondary double-down-line text-center mb-5">Get In Touch</h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <form class="w-100" action="#" method="post">
                                            <div class="row">
                                                <div class="row mb-4">
                                                    <div class="form-group col-lg-6">
                                                        <input type="text" name="name" class="form-control"
                                                            placeholder="Your Name*">
                                                    </div>
                                                    <div class="form-group col-lg-6">
                                                        <input type="text" name="email" class="form-control"
                                                            placeholder="Email Address*">
                                                    </div>
                                                    <div class="form-group col-lg-6">
                                                        <input type="text" name="phone" class="form-control"
                                                            placeholder="Phone" maxlength="10">
                                                    </div>
                                                    <div class="form-group col-lg-6">
                                                        <input type="text" name="subject" class="form-control"
                                                            placeholder="Subject">
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <textarea name="message" class="form-control" rows="5"
                                                                placeholder="Type Comments..."></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" value="send message" name="send"
                                                    class="btn btn-success">Send Message</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
            <!--	Footer   start-->

            <?php
            include 'inc/footer.php';

            ?>
            
            <!-- Scroll to top -->
            <a href="#" class="bg-secondary text-white hover-text-secondary" id="scroll"><i
                    class="fas fa-angle-up"></i></a>
            <!-- End Scroll To top -->
        </div>
    </div>
    <!-- Wrapper End -->

    <!--	Js Link
============================================================-->
    <script src="js/jquery.min.js"></script>
    <!--jQuery Layer Slider -->
    <script src="js/greensock.js"></script>
    <script src="js/layerslider.transitions.js"></script>
    <script src="js/layerslider.kreaturamedia.jquery.js"></script>
    <!--jQuery Layer Slider -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/tmpl.js"></script>
    <script src="js/jquery.dependClass-0.1.js"></script>
    <script src="js/draggable-0.1.js"></script>
    <script src="js/jquery.slider.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>