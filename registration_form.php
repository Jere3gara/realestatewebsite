<?php
include("connection.php");

include 'inc/registration_header.php';

?>
<!DOCTYPE html>
<html>

<head>
    <!-- style link -->
    <link rel="stylesheet" href="css/registration_form.css">
    <title>User Signup</title>

</head>

<!-- form of registration -->
<body>
    < <div class="reg-form">
        <form action="register_reg.php" method="POST">

            <h2> Registration form</h2>

            <label for="fname">First name:</label>
            <input type="text" placeholder="Enter First Name" id="txtfname" name="txtfname"><br><br>

            <label for="lname">Last name:</label>
            <input type="text" placeholder="Enter Last Name" id="txtlname" name="txtlname"><br><br>

            <label for="DOB">Date of Birth:</label>
            <input type="date" id="DOB" name="DOB"><br><br>

            <label id="gender" for="gender">Gender:</label>
            <input type="checkbox" id="female" name="gender" value="female">
            <label id="gender" for="female">female</label>
            <input type="checkbox" id="male" name="gender" value="male">
            <label id="gender" for="male">male</label><br><br>

            <label for="email">Email address:</label>
            <input type="email" placeholder="enter E-mail Address" id="txtEmail" name="txtEmail"><br><br>

            <label for="phone">Phone number:</label>
            <input type="tel" placeholder="Enter Phone Number" id="txtPhone" name="txtPhone"><br><br>

            <div class="form-check-inline">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="utype" value="tenant" checked>Tenant
                </label>
            </div>
            <div class="form-check-inline">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="utype" value="agent">Agent
                </label>
            </div>
            <div class="form-group">
                <label class="col-form-label"><b>User Image</b></label>
                <input class="form-control" name="uimage" type="file">
            </div>

            <label for="username">Create username:</label>
            <input type="text" placeholder="Enter a Unique Username" id="txtusername" name="txtusername"><br><br>

            <label for="pass1">New Password:</label><br>
            <input type="password" placeholder="Enter a Unique Password" name="pass1"><br>

            <label for="pass2">Confirm Password:</label><br>
            <input type="password" placeholder="Confirm your Password" name="pass2"><br>

            <input formaction="register_reg.php" type="submit" name="submit">

        </form>
        </div>

</body>

</html>