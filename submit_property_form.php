<?php
session_start();
include 'inc/my_header.php';
$pagetitle = "Submit Property";
?>


<!--	Submit property   -->
<div class="full-row">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="text-secondary double-down-line text-center">Submit Property</h2>
            </div>
        </div>
        <div class="row p-5 bg-white">
            <form method="post" enctype="multipart/form-data">
                <div class="description">
                    <h5 class="text-secondary">Basic Information</h5>
                    <hr>

                    <form action="submit_property_form_reg.php" method="POST">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label">Property Title</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" name="propertytitle" required
                                            placeholder="Enter Property Title">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label">Content</label>
                                    <div class="col-lg-9">
                                        <textarea class="tinymce form-control" name="propertycontent" rows="10"
                                            cols="30"></textarea>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xl-6">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Property Type</label>
                                    <div class="col-lg-9">
                                        <select class="form-control" required name="propertytype">
                                            <option value="">Select Type</option>
                                            <option value="apartment">Apartment</option>
                                            <option value="flat">Flat</option>
                                            <option value="building">Building</option>
                                            <option value="house">House</option>
                                            <option value="villa">Villa</option>
                                            <option value="office">Office</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Selling Type</label>
                                    <div class="col-lg-9">
                                        <select class="form-control" required name="statetype">
                                            <option value="">Select Status</option>
                                            <option value="rent">Rent</option>
                                            <option value="sale">Sale</option>
                                        </select>
                                    </div>
                                </div><!-- FOR MORE PROJECTS visit: codeastro.com -->
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Bathroom</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" name="bathroom" required
                                            placeholder="Enter Bathroom (only no 1 to 10)">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Kitchen</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" name="kitchen" required
                                            placeholder="Enter Kitchen (only no 1 to 10)">
                                    </div>
                                </div>

                            </div>
                            <div class="col-xl-6">
                                <div class="form-group row mb-3">
                                    <label class="col-lg-3 col-form-label">BHK</label>
                                    <div class="col-lg-9">
                                        <select class="form-control" required name="bhk">
                                            <option value="">Select BHK</option>
                                            <option value="1 BHK">1 BHK</option>
                                            <option value="2 BHK">2 BHK</option>
                                            <option value="3 BHK">3 BHK</option>
                                            <option value="4 BHK">4 BHK</option>
                                            <option value="5 BHK">5 BHK</option>
                                            <option value="1,2 BHK">1,2 BHK</option>
                                            <option value="2,3 BHK">2,3 BHK</option>
                                            <option value="2,3,4 BHK">2,3,4 BHK</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Bedroom</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" name="bedroom" required
                                            placeholder="Enter Bedroom  (only no 1 to 10)">
                                    </div>
                                </div><!-- FOR MORE PROJECTS visit: codeastro.com -->
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Balcony</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" name="balcony" required
                                            placeholder="Enter Balcony  (only no 1 to 10)">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Hall</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" name="hall" required
                                            placeholder="Enter Hall  (only no 1 to 10)">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <h5 class="text-secondary">Price & Location</h5>
                        <hr>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Floor</label>
                                    <div class="col-lg-9">
                                        <select class="form-control" required name="floor">
                                            <option value="">Select Floor</option>
                                            <option value="1st Floor">1st Floor</option>
                                            <option value="2nd Floor">2nd Floor</option>
                                            <option value="3rd Floor">3rd Floor</option>
                                            <option value="4th Floor">4th Floor</option>
                                            <option value="5th Floor">5th Floor</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Price</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" name="price" required
                                            placeholder="Enter Price">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">City</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" name="city" required
                                            placeholder="Enter City">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">County</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" name="county" required
                                            placeholder="Enter county">
                                    </div>
                                </div>
                            </div><!-- FOR MORE PROJECTS visit: codeastro.com -->
                            <div class="col-xl-6">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Total Floor</label>
                                    <div class="col-lg-9">
                                        <select class="form-control" required name="totalfl">
                                            <option value="">Select Floor</option>
                                            <option value="1 Floor">1 Floor</option>
                                            <option value="2 Floor">2 Floor</option>
                                            <option value="3 Floor">3 Floor</option>
                                            <option value="4 Floor">4 Floor</option>
                                            <option value="5 Floor">5 Floor</option>
                                            <option value="6 Floor">6 Floor</option>
                                            <option value="7 Floor">7 Floor</option>
                                            <option value="8 Floor">8 Floor</option>
                                            <option value="9 Floor">9 Floor</option>
                                            <option value="10 Floor">10 Floor</option>
                                            <option value="11 Floor">11 Floor</option>
                                            <option value="12 Floor">12 Floor</option>
                                            <option value="13 Floor">13 Floor</option>
                                            <option value="14 Floor">14 Floor</option>
                                            <option value="15 Floor">15 Floor</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Area Size</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" name="sizesqft" required
                                            placeholder="Enter Area Size (in sqrt)">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Address</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" name="loc" required
                                            placeholder="Enter Address">
                                    </div>
                                </div>

                            </div><!-- FOR MORE PROJECTS visit: codeastro.com -->
                        </div>

                        <div class="form-group row">
                            <!-- <label class="col-lg-2 col-form-label">Feature</label>
                                            <div class="col-lg-9">
                                            <p class="alert alert-danger">* Important Please Do Not Remove Below Content Only Change <b>Yes</b> Or <b>No</b> or Details and Do Not Add More Details</p>
                                            
                                            <textarea class="tinymce form-control" name="feature" rows="10" cols="30"> -->
                            <!---feature area start--->
                            <!-- <div class="col-md-4">
                                                        <ul>
                                                        <li class="mb-3"><span class="text-secondary font-weight-bold">Property Age : </span>10 Years</li>
                                                        <li class="mb-3"><span class="text-secondary font-weight-bold">Swiming Pool : </span>Yes</li>
                                                        <li class="mb-3"><span class="text-secondary font-weight-bold">Parking : </span>Yes</li>
                                                        <li class="mb-3"><span class="text-secondary font-weight-bold">GYM : </span>Yes</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <ul>
                                                        <li class="mb-3"><span class="text-secondary font-weight-bold">Type : </span>Apartment</li>
                                                        <li class="mb-3"><span class="text-secondary font-weight-bold">Security : </span>Yes</li>
                                                        <li class="mb-3"><span class="text-secondary font-weight-bold">Dining Capacity : </span>10 People</li>
                                                        <li class="mb-3"><span class="text-secondary font-weight-bold">Church/Temple  : </span>No</li>
                                                        
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <ul>
                                                        <li class="mb-3"><span class="text-secondary font-weight-bold">3rd Party : </span>No</li>
                                                        <li class="mb-3"><span class="text-secondary font-weight-bold">Elevator : </span>Yes</li>
                                                        <li class="mb-3"><span class="text-secondary font-weight-bold">CCTV : </span>Yes</li>
                                                        <li class="mb-3"><span class="text-secondary font-weight-bold">Water Supply : </span>Ground Water / Tank</li>
                                                        </ul>
                                                    </div> -->
                            <!-- -feature area end-- -->
                            <!-- </textarea> -->
                            <!-- </div> -->
                        </div>

                        <h5 class="text-secondary">Image & Status</h5>
                        <hr>
                        <div class="row">
                            <div class="col-xl-6">

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Image</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" name="pimage" type="file" required="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Image 2</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" name="pimage2" type="file" required="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Image 4</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" name="pimage4" type="file" required="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Status</label>
                                    <div class="col-lg-9">
                                        <select class="form-control" required name="availability">
                                            <option value="">Select Status</option>
                                            <option value="available">Available</option>
                                            <option value="sold out">Sold Out</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Basement Floor Plan Image</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" name="fimage1" type="file">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Image 1</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" name="pimage1" type="file" required="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">image 3</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" name="pimage3" type="file" required="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Floor Plan Image</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" name="fimage" type="file">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Ground Floor Plan Image</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" name="fimage2" type="file">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label"><b>Is Featured?</b></label>
                                    <div class="col-lg-9">
                                        <select class="form-control" required name="isFeatured">
                                            <option value="">Select...</option>
                                            <option value="0">No</option>
                                            <option value="1">Yes</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <input formaction="submit_property_form_reg.php" type="submit" value="Submit Property"
                            class="btn btn-info" name="add" style="margin-left:200px;">

                </div>
            </form>
        </div>
    </div>
</div>
<!--	Submit property   -->


<!--	Footer   start-->
<?php include("inc/footer.php"); ?>
<!--	Footer   start-->

<!-- Scroll to top -->
<a href="#" class="bg-secondary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a>
<!-- End Scroll To top -->
</div>
</div>
<!-- Wrapper End -->
<!-- ============================================================-->
<script src="js/jquery.min.js"></script>
<script src="js/tinymce/tinymce.min.js"></script>
<script src="js/tinymce/init-tinymce.min.js"></script>
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
<script src="js/custom.js"></script>
</body>

</html>
</body>

</html>










<!--	Header end  -->

<!--	Banner   --->
<!-- <div class="banner-full-row page-banner" style="background-image:url('images/breadcromb.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0"><b>Submit Property</b></h2>
                    </div>
                    <div class="col-md-6">
                        <nav aria-label="breadcrumb" class="float-left float-md-right">
                            <ol class="breadcrumb bg-transparent m-0 p-0">
                                <li class="breadcrumb-item text-white"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Submit Property</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div> -->
<!--	Banner   --->