<?php
session_start();
$pageTitle = "Edit Admin table";
// include 'inc/my_header.php';
?>

<div class="table-edit">
    <table>
        <tr>
            <th>Admin ID</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Date of Birth</th>
            <th>Gender</th>
            <th>Email address</th>
            <th>Phone number</th>
            <th>Username</th>
            <!-- <th>Password</th> -->
        </tr>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "realestatewebsite");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            if (isset($_POST["update"])) {
                // Update operation
                $adminid = $_POST["adminid"];
                $firstName = $_POST["first_name"];
                $lastName = $_POST["last_name"];
                $dob = $_POST["dob"];
                $gender = $_POST["gender"];
                $email = $_POST["email"];
                $phone = $_POST["phone"];
                $username = $_POST["username"];
                $updateQuery = "UPDATE admins SET fname='$firstName', lname='$lastName', DOB='$dob', gender='$gender', email='$email', phone='$phone', username='$username' WHERE adminid='$adminid'";
                $conn->query($updateQuery);
            } elseif (isset($_POST["delete"])) {
                // Delete operation
                $adminid = $_POST["adminid"];

                $deleteQuery = "DELETE FROM admins WHERE adminid='$adminid'";
                $conn->query($deleteQuery);
            }
        }

        $sql = "SELECT adminid, fname, lname, DOB, gender, email, phone, username FROM admins";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["adminid"] . "</td>";
                echo "<td>" . $row["fname"] . "</td>";
                echo "<td>" . $row["lname"] . "</td>";
                echo "<td>" . $row["DOB"] . "</td>";
                echo "<td>" . $row["gender"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["phone"] . "</td>";
                echo "<td>" . $row["username"] . "</td>";
                echo "<td>";
                echo "<form method='POST' action='" . $_SERVER["PHP_SELF"] . "' onsubmit='return confirmDelete()'>";
                echo "<input type='hidden' name='doctor_id' class='action-input' value='" . $row["adminid"] . "'>";
                echo "<input type='text' name='first_name' class='action-input' value='" . $row["fname"] . "'>";
                echo "<input type='text' name='last_name' class='action-input' value='" . $row["lname"] . "'>";
                echo "<input type='date' name='dob' class='action-input' value='" . $row["DOB"] . "'>";
                echo "<input type='text' name='gender' class='action-input' value='" . $row["gender"] . "'>";
                echo "<input type='email' name='email' class='action-input' value='" . $row["email"] . "'>";
                echo "<input type='text' name='phone' class='action-input' value='" . $row["phone"] . "'>";
                echo "<input type='text' name='experience' class='action-input' value='" . $row["username"] . "'>";
                echo "<input type='submit' name='update' value='Save' class='save-btn'>";
                echo "<input type='submit' name='delete' value='Delete' class='delete-btn'>";
                echo "</form>";
                echo "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<tr><td colspan='9'>0 results</td></tr>";
        }

        $conn->close();
        ?>
    </table>
</div>
<script src="user_homepage.js"></script>
<?php //include 'inc/footer.php'    ?>