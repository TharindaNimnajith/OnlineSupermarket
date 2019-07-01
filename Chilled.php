<!--Chilled Page-->

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Chilled - Store 2 Door </title>

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

        <h1 class="heading">Chilled Products </h1>

        <div class="row1">

            <div class="first">

                <h2>Anchor Butter (227g) </h2>
                <img src="Images/butter.png" alt="Anchor Butter (227g)" class="photo" />

                <div class="info">

                    <p class="new">LKR 615.00 </p>

                    <label>Quantity: </label>
                    <input type="number" class="myNumber" value="1">

                    <br />
                    <br />

                    <button type="button" onclick="alert('Added to the shopping cart!')">Add to Cart </button>

                </div>

            </div>

            <div class="second">

                <h2>Melbourne Cheese
                </h2>

                <img src="Images/mlbrn_cheese.jpg" alt="Melbourne cheese(250g)" class="photo" />


                <div class="info">

                    <p class="new">LKR 815.00</p>

                    <label>Quantity: </label>
                    <input type="number" class="myNumber" value="1">

                    <br />
                    <br />

                    <button type="button" onclick="alert('Added to the shopping cart!')">Add to Cart </button>

                </div>

            </div>

            <div class="third">

                <h2>Kotmale fresh milk </h2>
                <img src="Images/fresh_milk.jpg" alt="Kotmale fresh milk (1L)" class="photo" />

                <div class="info">

                    <p class="new">LKR 220.00</p>

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

                <h2>Highland butter (200g) </h2>
                <img src="Images/highland.jpg" alt="Highland butter (200g)" class="photo" />

                <div class="info">

                    <p class="new">LKR 510.00</p>

                    <label>Quantity: </label>
                    <input type="number" class="myNumber" value="1">

                    <br />
                    <br />

                    <button type="button" onclick="alert('Added to the shopping cart!')">Add to Cart </button>

                </div>

            </div>

            <div class="second">

                <h2>Meadowlea fat spread </h2>
                <img src="Images/fat_spread.jpg" alt="Meadowlea fat spread (500g)" class="photo" />

                <div class="info">

                    <p class="new">LKR 420.00</p>

                    <label>Quantity: </label>
                    <input type="number" class="myNumber" value="1">

                    <br />
                    <br />

                    <button type="button" onclick="alert('Added to the shopping cart!')">Add to Cart </button>

                </div>

            </div>

            <div class="third">

                <h2>Ambewela cheese spread </h2>
                <img src="Images/cheese.jpg" alt="Ambewela cheese spread (100g)" class="photo" />

                <div class="info">

                    <p class="new">LKR 270.00</p>

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

                <h2>Biscuit pudding</h2>
                <img src="Images/biscuit_pudding.jpg" alt="Biscuit pudding" class="photo" />

                <div class="info">

                    <p class="new">LKR 90.00</p>

                    <label>Quantity: </label>
                    <input type="number" class="myNumber" value="1">

                    <br />
                    <br />

                    <button type="button" onclick="alert('Added to the shopping cart!')">Add to Cart </button>

                </div>

            </div>

            <div class="second">

                <h2>Richlife set yoghurt</h2>
                <img src="Images/yoghurt.jpg" alt="Richlife set yoghurt" class="photo" />

                <div class="info">

                    <p class="new">LKR 155.00</p>

                    <label>Quantity: </label>
                    <input type="number" class="myNumber" value="1">

                    <br />
                    <br />

                    <button type="button" onclick="alert('Added to the shopping cart!')">Add to Cart </button>

                </div>

            </div>

            <div class="third">

                <h2>CIC creamoo yoghurt </h2>
                <img src="Images/cic.jpg" alt="CIC creamoo yoghurt" class="photo" />

                <div class="info">

                    <p class="new">LKR 160.00</p>

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
