<!--Fish Page-->

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Fish - Store 2 Door </title>

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

        <h1 class="heading">Fish </h1>

        <div class="row1">

            <div class="first">

                <h2>Tuna Fish 100g</h2>
                <img src="Images/tuna.jpg" alt="tunafish" class="photo" />

                <div class="info">

                    <p class="new">LKR 60.00 </p>

                    <label>Quantity: </label>
                    <input type="number" class="myNumber" value="1">

                    <br />
                    <br />

                    <button type="button" onclick="alert('Added to the shopping cart!')">Add to Cart </button>

                </div>

            </div>

            <div class="second">

                <h2>Thalapath Fish 100g</h2>
                <img src="Images/thalapath.jpg" alt="thalapathfish" class="photo" />


                <div class="info">

                    <p class="new">LKR 60.00</p>

                    <label>Quantity: </label>
                    <input type="number" class="myNumber" value="1">

                    <br />
                    <br />

                    <button type="button" onclick="alert('Added to the shopping cart!')">Add to Cart </button>

                </div>

            </div>

            <div class="third">

                <h2>Paraw Fish 100g</h2>
                <img src="Images/paraw.jpg" alt="parawfish" class="photo" />

                <div class="info">

                    <p class="new">LKR 180.00</p>

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
