<!--Item Details - Cream Cracker-->

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Munchee Super Cream Cracker - Store 2 Door </title>

    <link href="Stylesheets/Header and Footer.css" rel="stylesheet" type="text/css" />
    <link href="Stylesheets/Item Details.css" rel="stylesheet" type="text/css" />

</head>

<body>

   <!--HEADER-->

    <?php

    require_once('Includes/header-signout.php');

    ?>

    <!--CONTENT-->

    <div class="content">

        <div class="headline">
            <h1>Munchee Super Cream Cracker (190g) </h1>
        </div>

        <div class="photo">
            <img src="Images/cream cracker.png" alt="Munchee Super Cream Cracker (190g)" />
        </div>

        <div class="info">

            <p class="availability">Availability: In-Stock </p>
            <p class="price">Price: LKR 100.00 </p>

            <label>Quantity: </label>
            <input type="number" id="myNumber" value="1">

            <br />
            <br />
            
            <button type="button" onclick="alert('Added to the shopping cart!')">Add to Cart </button>

        </div>

    </div>

    <br />
    <br />
    <br />

    <!--FOOTER-->

    <?php

    require_once('Includes/header-signout.php');

    ?>

</body>

</html>
