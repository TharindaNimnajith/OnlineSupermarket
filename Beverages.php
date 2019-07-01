<!--Beverages Page-->

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Beverages - Store 2 Door </title>

    <link href="Stylesheets/Header and Footer.css" rel="stylesheet" type="text/css" />
    <link href="Stylesheets/Products Pages.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <!--HEADER-->

    <?php

    require_once('Includes/header-signout.php');

    ?>
    <!--CONTENT-->

    <div class="content">

        <h1 class="heading">Beverages </h1>

        <div class="row1">

            <div class="first">

                <h2>Sustagen Chocolate (440g) </h2>
                <img src="Images/choc.jpg" alt="Sustagen Chocolate (440g)" class="photo" />

                <div class="info">

                    <p class="new">LKR 1850.00</p>

                    <label>Quantity: </label>
                    <input type="number" class="myNumber" value="1">

                    <br />
                    <br />

                    <button type="button" onclick="alert('Added to the shopping cart!')">Add to Cart </button>

                </div>

            </div>

            <div class="second">

                <h2>Sustagen Vanilla (440g) </h2>

                <img src="Images/vani.jpg" alt="Sustagen Vanilla (440g)" class="photo" />

                <div class="info">

                    <p class="new">LKR 1850.00</p>

                    <label>Quantity: </label>
                    <input type="number" class="myNumber" value="1">

                    <br />
                    <br />

                    <button type="button" onclick="alert('Added to the shopping cart!')">Add to Cart </button>

                </div>

            </div>

            <div class="third">

                <h2>Orange Juice (2L) </h2>
                <img src="Images/orange.jpg" alt="Orange Juice (2L)" class="photo" />

                <div class="info">

                    <p class="new">LKR 1650.00</p>

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

                <h2>Redbull Energy Drink </h2>
                <img src="Images/redbull.jpg" alt="Redbull Energy Drink" class="photo" />

                <div class="info">

                    <p class="new">LKR 450.00</p>

                    <label>Quantity: </label>
                    <input type="number" class="myNumber" value="1">

                    <br />
                    <br />

                    <button type="button" onclick="alert('Added to the shopping cart!')">Add to Cart </button>

                </div>

            </div>

            <div class="second">

                <h2>Nescafe Classic (200g) </h2>
                <img src="Images/nescafe.jpg" alt="Nescafe Classic (200g)" class="photo" />

                <div class="info">

                    <p class="new">LKR 650.00</p>

                    <label>Quantity: </label>
                    <input type="number" class="myNumber" value="1">

                    <br />
                    <br />

                    <button type="button" onclick="alert('Added to the shopping cart!')">Add to Cart </button>

                </div>

            </div>

            <div class="third">

                <h2>Pfanner Orange Juice </h2>
                <img src="Images/pfanner.jpg" alt="Panadol Pack" class="photo" />

                <div class="info">

                    <p class="new">LKR 350.00</p>

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
