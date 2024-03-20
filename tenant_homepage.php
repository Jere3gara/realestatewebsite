<?php
session_start();
include 'inc/my_header.php'
    ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <section class="homepage" id="homepage">
                <div class="content text-center text-md-left">
                    <h3>Building Dreams, Creating Homes</h3>
                    <p>Begin your journey to homeownership by exploring a diverse range of properties that suit your
                        needs and desires. Our website offers a user-friendly platform to help you find your dream
                        home
                        quickly and effortlessly. Start your search now and turn your homeownership dreams into
                        reality.
                    </p>

                    <div class="directions">


                        <a href="view_properties.php"><button type="button">Buy/Rent Properties</button></a>
                        <a href="contact.php"><button type="button">Chat with Us</button></a>


                    </div>
                </div>
            </section>
        </div>
        <div class="col-md-6">
            <div class="tenant-background-image">
                <img src="img/transactionsupport.jpg" alt="image not available">
            </div>
        </div>
    </div>
</div>

<script src="user_homepage.js"></script>
</body>

</html>