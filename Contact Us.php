

<!--Privacy Policy Page-->

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Contact Us || Store 2 Door</title>

    <link href="Stylesheets/Header and Footer.css" rel="stylesheet" type="text/css" />
    <link href="Stylesheets/Styles8.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <!--HEADER-->

    <?php

    require_once('Includes/header-signin.php');

    ?>

<form>

<h1 class="para">Contact Us</h1>
<br>
<br>

        <p class="para">If you have any questions about this Privacy Policy, please contact us: </p>
        <br>
        <br>

        <ul class="list">
            <li>By email: store2door@gmail.com </li>
            <li>By visiting this page on our website: 
                <a href= "Contact Us.html" target="_blank" id="contact">http://www.store2door.com/contact_us </a></li>
            <li>By phone number: 0119876543 </li>
        </ul>

        <br>
        <br>


	<input class="int" type="text" value="Name" s>
    	<input class="int" type="text" value="E-mail" >
	<textarea rows="5" cols="50" name="comments">Enter messege here....</textarea>

	<input class="int" type="submit" value="Send"><br>


</form>

<?php

    require_once('Includes/footer.php');

?>

</body>
</html>