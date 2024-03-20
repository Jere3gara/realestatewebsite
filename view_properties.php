<?php
session_start();
include("connection.php");
include 'inc/my_header.php';
?>

<link rel="stylesheet" type="text/css" href="css/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/css/bootstrap-slider.css">
<link rel="stylesheet" type="text/css" href="css/css/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="css/css/layerslider.css">
<link rel="stylesheet" type="text/css" href="css/css/color.css" id="color-change">
<link rel="stylesheet" type="text/css" href="css/css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="css/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css">
<link rel="stylesheet" type="text/css" href="css/css/style.css">


<!--	Property Grid
        ===============================================================-->
<div class="full-row">

    <div class="container">
        <div class="row">

            <div class="col-lg-8">
                <div class="row">
<!-- fetching information from the database using $row -->
                    <?php
                    $query = mysqli_query($conn, "SELECT * FROM properties ");
                    while ($row = mysqli_fetch_array($query)) {

                        ($query);
                        ?>

                        <div class="col-md-6">
                            <div class="featured-thumb hover-zoomer mb-4">
                                <div class="overlay-black overflow-hidden position-relative"> <img
                                        src="propertyimages/<?php echo $row['20']; ?>" alt="pimage">

                                    <div class="sale bg-success text-white">For
                                        <?php echo $row['4']; ?>
                                    </div>
                                    <div class="price text-primary text-capitalize">Ksh
                                        <?php echo $row['12']; ?> <span class="text-white">
                                            <?php echo $row['16']; ?> Sqft
                                        </span>
                                    </div>

                                </div>
                                <div class="featured-thumb-data shadow-one">
                                    <div class="p-4">
                                        <h5 class="text-secondary hover-text-success mb-2 text-capitalize"><a
                                                href="property_detail.php?pid=<?php echo $row['0']; ?>">
                                                <?php echo $row['1']; ?>
                                            </a></h5>
                                        <span class="location text-capitalize"><i
                                                class="fas fa-map-marker-alt text-success"></i>
                                            <?php echo $row['14']; ?>
                                        </span>
                                    </div>
                                    <div class="px-4 pb-4 d-inline-block w-100">
                                        <div class="float-right"><i class="far fa-calendar-alt text-success mr-1"></i>
                                            <?php echo date('d-m-Y', strtotime($row['date'])); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                    <div class="col-lg-4">

                            </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>