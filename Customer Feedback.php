<?php require_once('Includes/connection.php'); ?>
<!DOCTYPE html>

<html lang="en">
<body>
<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Customer Feedback || Store2Door </title>

    <!-- <link href="Stylesheets/Styles10.css" rel="stylesheet" type="text/css" /> -->
    <link href="Stylesheets/Styles6.css" rel="stylesheet" type="text/css" />
    <link href="Stylesheets/Header and Footer.css" rel="stylesheet" type="text/css" />

</head>
<body>

    <!--HEADER-->

     <?php

    require_once('Includes/header-signout.php');

    ?>
	
	<div class="content">

    <h1 class="para">Your Comments !</h1>
    <h3 class="para">We are always looking for ways to improve your on-line shopping experience.</h3>
    <h3 class="para">What is your opinion of this web site...!</h3>

    

    <p class="para">We are here to help with any quastion or comments from you </p>
    <br>
    <br>

    <p class="para">Please leave your comments below :</p>

 
		<form action="Customer Feedback - Insert.php" method="post">
	
        <label>Name :</label> <br>
        <input class="int" type="text" name="name"><br>

        <label>email :</label><br>
        <input class="int" type="text" name="email"><br>

        <label>Subject :</label><br>
        <input class="int" type="text" name="subject"><br>

        <label>Comment :</label><br>
        <textarea rows="5" cols="50" name="comment">Enter comments here....</textarea>

        <input type="submit" value="submit" na,e="submit">

    </div>

	<br>
    <br>
    <br>
	
    <!--Footer-->

     <?php

    require_once('Includes/footer.php');

    ?>

</body>

</html>

<?php mysqli_close($connection); ?>