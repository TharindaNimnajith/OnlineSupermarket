<!--Delivery Details Page-->

<?php 

    require_once('Includes/connection.php'); 

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Delivery Details || Store2Door</title>

    <link href="Stylesheets/Header and Footer.css" rel="stylesheet" type="text/css" />
    <link href="Stylesheets/Delivery Details.css" rel="stylesheet" type="text/css" />

    <script src="JavaScript/Delivery Details.js"></script>

</head>

<body>

    <!--HEADER-->

<?php

require_once('Includes/header-signout.php');

?>

    <div class="content">

        <h1>Delivery Details</h1>

        <form class="box" name="Delivery" action="Delivery Details - Insert.php" onsubmit="return delivery(this);" method="post">

            <div class="district">

                <label>Select Delivery Area</label>
                <br />

                <div class="drop">

                    <select name="district">

                        <option value="">Select District</option>
                        <option value="aluthgama">Aluthgama</option>
                        <option value="athurugiriya">Athurugiriya</option>
                        <option value="battaramulla">Battaramulla</option>
                        <option value="bentota">Benthota</option>
                        <option value="biyagama">Biyagama</option>
                        <option value="colombo01">Colombo 01</option>
                        <option value="colombo07">Colombo 07</option>
                        <option value="colombo10">Colombo 10</option>
                        <option value="dehiwala">Dehiwala</option>
                        <option value="kalutara">Kalutara</option>
                        <option value="gampaha">Gampaha</option>
                        <option value="horana">Horana</option>
                        <option value="jaela">Ja-Ela</option>
                        <option value="kotte">Kotte</option>
                        <option value="kadawatha">Kadawatha</option>
                        <option value="maharagama">Maharagama</option>

                    </select>

                </div>

            </div>

            <br />
            <br />
         
            <div class="inputBox">
                <label>First Name</label>
                <br /><br />
                <input type="text" name="firstName" />
                <br />
                <br />
            </div>

            <div class="inputBox">

                <label>Last Name</label>
                <br /> <br />
                <input type="text" name="lastName" />
                <br />
                <br />
            </div>

            <div class="inputBox">

                <label>NIC</label>
                <br /><br />
                <input type="text" name="nic" />
                <br />
                <br />
            </div>

            <div class="inputBox">

                <label>E-mail</label>
                <br /><br />
                <input type="text" name="email" />
                <br />
                <br />
            </div>

            <div class="inputBox">

                <label>Contact Number</label>
                <br /><br />
                <input type="text" name="contactNumber" />
                <br />
                <br />
            </div>

            <div class="inputBox">

                <label>Delivery Address</label>
                <br /><br />
                <input type="text" name="address" />
                <br />
                <br />
            </div>

            <br />

           <div class="re">
                <input type="reset" class="confirm" value="Reset">
            </div>

            <div class="submission">
                <input type="submit" name="submit" class="confirm" value="Proceed to Payment">
            </div>

        </form>

    </div>

    <br />
    <br />

    <!--FOOTER-->

<?php

    require_once('Includes/footer.php');

?>

</body>

</html>

<?php

    mysqli_close($connection);

?>