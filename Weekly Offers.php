<!--Weekly Offers Page-->

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Weekly Offers - Store 2 Door </title>

    <link href="Stylesheets/Header and Footer.css" rel="stylesheet" type="text/css" />
    <link href="Stylesheets/Weekly Offers.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <!--HEADER-->

   <?php

    require_once('Includes/header-signout.php');

    ?>

    <!--CONTENT-->

    <div class="content">

        <h1 class="heading">Weekly Offers & Special Promotions </h1>

        <div class="row1">

            <div class="first">

                <h2>Maliban Gold Marie (60g) </h2>
                <img src="Images/marie.jpg" alt="Maliban Gold Marie (60g)" class="photo" />

                <div class="info">

                    <p class="old"><del>LKR 40.00</del></p>
                    <p class="new">LKR 30.00</p>

                    <label>Quantity: </label>
                    <input type="number" class="myNumber" value="1">

                    <br />
                    <br />

                    <button type="button" onclick="alert('Added to the shopping cart!')">Add to Cart </button>

                </div>

            </div>

            <div class="second">

                <h2>Ice-Cream Vanilla (500g) </h2>
                <img src="Images/vanilla.jpg" alt="Magic Ice-Cream Vanilla (500g)" class="photo" />

                <div class="info">

                    <p class="old"><del>LKR 260.00</del></p>
                    <p class="new">LKR 230.00</p>

                    <label>Quantity: </label>
                    <input type="number" class="myNumber" value="1">

                    <br />
                    <br />

                    <button type="button" onclick="alert('Added to the shopping cart!')">Add to Cart </button>

                </div>

            </div>

            <div class="third">

                <h2>Khomba Baby Gift Pack </h2>
                <img src="Images/baby.jpg" alt="Khomba Baby Gift Pack 4PCS" class="photo" />

                <div class="info">

                    <p class="old"><del>LKR 560.00</del></p>
                    <p class="new">LKR 520.00</p>

                    <label>Quantity: </label>
                    <input type="number" class="myNumber" value="1">

                    <br />
                    <br />

                    <button type="button" onclick="alert('Added to the shopping cart!')">Add to Cart </button>

                </div>

            </div>
        </div>

        <div class="row2">

            <div class="first">

                <h2>Anchor Butter (227g) </h2>
                <img src="Images/butter.png" alt="Anchor Butter (227g)" class="photo" />

                <div class="info">

                    <p class="old"><del>LKR 640.00</del></p>
                    <p class="new">LKR 615.00</p>

                    <label>Quantity: </label>
                    <input type="number" class="myNumber" value="1">

                    <br />
                    <br />

                    <button type="button" onclick="alert('Added to the shopping cart!')">Add to Cart </button>

                </div>

            </div>

            <div class="second">

                <h2>Raigam Soya Meat (70g) </h2>
                <img src="Images/soya.jpg" alt="Raigam Soya Meat (70g)" class="photo" />

                <div class="info">

                    <p class="old"><del>LKR 65.00</del></p>
                    <p class="new">LKR 50.00</p>

                    <label>Quantity: </label>
                    <input type="number" class="myNumber" value="1">

                    <br />
                    <br />

                    <button type="button" onclick="alert('Added to the shopping cart!')">Add to Cart </button>

                </div>

            </div>

            <div class="third">

                <h2>Signal Toothpaste (125ml) </h2>
                <img src="Images/signal.jpg" alt="Signal Toothpaste (125ml)" class="photo" />

                <div class="info">

                    <p class="old"><del>LKR 460.00</del></p>
                    <p class="new">LKR 420.00</p>

                    <label>Quantity: </label>
                    <input type="number" class="myNumber" value="1">

                    <br />
                    <br />

                    <button type="button" onclick="alert('Added to the shopping cart!')">Add to Cart </button>

                </div>

            </div>

        </div>

    </div>

    <!--FOOTER-->


    <?php

    require_once('Includes/footer.php');

    ?>


</body>

</html>
