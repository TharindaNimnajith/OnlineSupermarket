<!--Frozen Food Page-->

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Frozen Food - Store 2 Door </title>

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

        <h1 class="heading">Frozen Food Products </h1>

        <div class="row1">

            <div class="first">

                <h2>Ice-Cream Vanilla (500g) </h2>
                <img src="Images/vanilla.jpg" alt="Magic Ice-Cream Vanilla (500g)" class="photo" />

                <div class="info">

                    <p class="new">LKR 230.00</p>

                    <label>Quantity: </label>
                    <input type="number" class="myNumber" value="1">

                    <br />
                    <br />

                    <button type="button" onclick="alert('Added to the shopping cart!')">Add to Cart </button>

                </div>

            </div>

            <div class="second">

                <h2>Bacon </h2>

                <img src="Images/bacon.jpg" alt="Bacon (150g)" class="photo" />

                <div class="info">

                    <p class="new">LKR 510.00 </p>

                    <label>Quantity: </label>
                    <input type="number" class="myNumber" value="1">

                    <br />
                    <br />

                    <button type="button" onclick="alert('Added to the shopping cart!')">Add to Cart </button>

                </div>

            </div>

            <div class="third">

                <h2>Pork sausages </h2>
                <img src="Images/pork.jpg" alt="Pork sausages" class="photo" />

                <div class="info">

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

                <h2>Farm french fries </h2>
                <img src="Images/fries.jpg" alt="Farm french fries" class="photo" />

                <div class="info">

                    <p class="new">LKR 330.00</p>

                    <label>Quantity: </label>
                    <input type="number" class="myNumber" value="1">

                    <br />
                    <br />

                    <button type="button" onclick="alert('Added to the shopping cart!')">Add to Cart </button>

                </div>

            </div>

            <div class="second">

                <h2>Kotmale mozzarella cheese</h2>
                <img src="Images/kotmale.jpg" alt="Kotmale mozzarella cheese (500G)" class="photo" />

                <div class="info">

                    <p class="new">LKR 800.00</p>

                    <label>Quantity: </label>
                    <input type="number" class="myNumber" value="1">

                    <br />
                    <br />

                    <button type="button" onclick="alert('Added to the shopping cart!')">Add to Cart </button>

                </div>

            </div>

            <div class="third">

                <h2>Chicken nuggets </h2>
                <img src="Images/nuggets.jpg" alt="Chicken nuggets " class="photo" />

                <div class="info">

                    <p class="new">LKR 1220.00</p>

                    <label>Quantity: </label>
                    <input type="number" class="myNumber" value="1">

                    <br />
                    <br />

                    <button type="button" onclick="alert('Added to the shopping cart!')">Add to Cart </button>

                </div>

            </div>

        </div>

        <div class="row3">

            <div class="first">

                <h2>Krest fish finger </h2>
                <img src="Images/krest.jpg" alt="Krest fish finger" class="photo" />

                <div class="info">

                    <p class="new">LKR 1150.00</p>

                    <label>Quantity: </label>
                    <input type="number" class="myNumber" value="1">

                    <br />
                    <br />

                    <button type="button" onclick="alert('Added to the shopping cart!')">Add to Cart </button>

                </div>

            </div>

            <div class="second">

                <h2>Buon arabic breads </h2>
                <img src="Images/buon.jpg" alt="Buon arabic breads" class="photo" />

                <div class="info">

                    <p class="new">LKR 450.00</p>

                    <label>Quantity: </label>
                    <input type="number" class="myNumber" value="1">

                    <br />
                    <br />

                    <button type="button" onclick="alert('Added to the shopping cart!')">Add to Cart </button>

                </div>

            </div>

            <div class="third">

                <h2>Golden star green peas </h2>
                <img src="Images/peas.jpg" alt="Golden star green peas" class="photo" />

                <div class="info">

                    <p class="new">LKR 70.00</p>

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
