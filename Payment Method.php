<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Payment Method - Store 2 Door</title>

    <link href="Stylesheets/Header and Footer.css" rel="stylesheet" type="text/css" />
    <link href="Stylesheets/Styles6.css" rel="stylesheet" type="text/css" />
    

</head>

<body>

    <!--HEADER-->

    <?php

    require_once('Includes/header-signout.php');

    ?>

    <br />
    

    <div class="content">

        <form class="pay" action="Credit Card Payment.php" method="post">
        <h1 class="para" > Choose a payment method</h1>

        <input type="radio" class="int" name="payment" value="paypal" style="margin-left:-150px"> 
            <label style="margin-left: -150px">PayPal</label> 
            <img src="images/IMG2.jpg" width="50px" height="50px"><br><br><br>

        <input type="radio" class="int" name="payment" value="card" style="margin-left:-150px">
            <label style="margin-left: -150px">Credit Card/Debit Card</label>
             <img src="images/IMG1.jpg" width="200px" height="50px"><br><br><br>

        <input type="submit" class="int" name="submit" value="Confirm and contiune" /><br>
        </form>

    </div>

    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />

    <!--FOOTER-->

    <?php

    require_once('Includes/footer.php');

    ?>

</body>
</html>
