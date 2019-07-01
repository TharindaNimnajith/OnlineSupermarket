<!--Header and Footer-->

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Pay Pal</title>

    <link href="Stylesheets/Header and Footer.css" rel="stylesheet" type="text/css" />
    <link href="Stylesheets/Styles6.css" rel="stylesheet" type="text/css" />


</head>

<body>

    <!--HEADER-->

    <?php

    require_once('Includes/header-signout.php');

    ?>

    <h1 class="para">Pay Pal</h1>

<div class="container">
  <form action="/action_page.php">
    <label for="usrname">Username/E-mail</label><br>
    <input type="text" id="usrname" name="usrname" required>

    <label for="psw">Password</label><br>
    <input type="password" id="psw" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required><br> 
    
    <input class="new" type="submit" value="Log In">
  </form>
</div>

<div id="message">
  <h3 class="para">Password must contain the following:</h3>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div>

<script>
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");


myInput.onfocus = function() {
    document.getElementById("message").style.display = "block";
}


myInput.onblur = function() {
    document.getElementById("message").style.display = "none";
}


myInput.onkeyup = function() {
  // lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  //  numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>

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
