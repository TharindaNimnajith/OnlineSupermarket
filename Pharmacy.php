<!--Pharmacy Page-->

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Pharmacy - Store 2 Door </title>

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

        <h1 class="heading">Pharmacy Products </h1>

        <div class="row1">

            <div class="first">

                <h2>Link Samahan Sachets</h2>
                <img src="Images/samahan.jpg" alt="Maliban Gold Marie (60g)" class="photo" />

                <div class="info">

                    <p class="new">LKR 2000.00</p>

                    <label>Quantity: </label>
                    <input type="number" class="myNumber" value="1">

                    <br />
                    <br />

                    <button type="button" onclick="alert('Added to the shopping cart!')">Add to Cart </button>

                </div>

            </div>

            <div class="second">

                <h2>First Aid Kit
                </h2>

                <img src="Images/aid.jpg" alt="First Aid Kit" class="photo" />

                <div class="info">

                    <p class="new">LKR 1000.00</p>

                    <label>Quantity: </label>
                    <input type="number" class="myNumber" value="1">

                    <br />
                    <br />

                    <button type="button" onclick="alert('Added to the shopping cart!')">Add to Cart </button>

                </div>

            </div>

            <div class="third">

                <h2>Mosquito Spray (80 ml) </h2>
                <img src="Images/mosquito.jpg" alt="Soffel Mosquito Repelent Spray (80 ml)" class="photo" />

                <div class="info">

                    <p class="new">LKR 650.00</p>

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

                <h2>Baraka Virega Plus 60S </h2>
                <img src="Images/baraka.jpg" alt="Baraka Virega Plus 60S" class="photo" />

                <div class="info">

                    <p class="new">LKR 750.00</p>

                    <label>Quantity: </label>
                    <input type="number" class="myNumber" value="1">

                    <br />
                    <br />

                    <button type="button" onclick="alert('Added to the shopping cart!')">Add to Cart </button>

                </div>

            </div>

            <div class="second">

                <h2>Baraka Slimexol Caps </h2>
                <img src="Images/caps.jpg" alt="Baraka Slimexol Caps" class="photo" />

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

                <h2>Panadol Pack </h2>
                <img src="Images/panadol.jpg" alt="Panadol Pack" class="photo" />

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
