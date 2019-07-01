<!--Credit Card Payment-->

<?php 

    require_once('Includes/connection.php'); 

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width initial-scale=1.0" />

    <title>Credit Card Payment || Store2Door</title>

    <link href="Stylesheets/Header and Footer.css" rel="stylesheet" type="text/css" />
    <link href="Stylesheets/Credit Card Payment.css" rel="stylesheet" type="text/css" />

    <script src="JavaScript/Credit Card.js"></script>

</head>

<body>

    <!--HEADER-->

<?php

require_once('Includes/header-signout.php');

?>

    <!--Content-->

    <div class="content">

        <h1 class="headline">Pay Invoice </h1>

        <img src="Images/card collection.jpg" alt="Card Collection" class="pic" />

        <div class="amount">
            <label class="amountText">Payment Amount: </label>
            <label class="amount">Rs. 4520.00 </label>
        </div>

        <form method="post" onsubmit="return invoice(this);" class="formStyle" action="Credit Card Payment - Insert.php">

            <input type="text" id="firstName" name="firstName" value="" placeholder="First Name" class="first" />

            <div class="last">
                <input type="text" id="lastName" name="lastName" value="" placeholder="Last Name" class="lastInput" />
            </div>

            <input type="text" id="cardNumber" name="cardNumber" placeholder="Card Number" maxlength="16" class="first">

            <br />
            <br />

            <div class="date-field">

                <div class="date">
                    <label class="expire">Expiry Date: </label>
                </div>

                <div class="month">
                    <select name="expiryMonth" id="Month">
                        <option value="">Month</option>
                        <option value="january">January</option>
                        <option value="february">February</option>
                        <option value="march">March</option>
                        <option value="april">April</option>
                        <option value="may">May</option>
                        <option value="june">June</option>
                        <option value="july">July</option>
                        <option value="august">August</option>
                        <option value="september">September</option>
                        <option value="october">October</option>
                        <option value="november">November</option>
                        <option value="december">December</option>
                    </select>
                </div>

                <div class="year">
                    <select name="expiryYear" id="Year">
                        <option value="">Year</option>
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                    </select>
                </div>

            </div>

            <div class="cvv-input">
                <input type="text" placeholder="CVV" maxlength="3" class="cvv" id="cvv" name="cvv">
            </div>

            <div class="re">
                <input type="reset" class="confirm" value="Reset">
             </div>

            <div class="submission">
                <input type="submit" class="confirm" value="Confirm and Pay">
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

