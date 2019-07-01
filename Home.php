<?php require_once('Includes/connection.php'); ?>
<!DOCTYPE html>

<html lang="en">
<body background="img/backpic.jpeg" width="100%" height="100%">
<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Home page</title>

    <link href="style/Styles10.css" rel="stylesheet" type="text/css" />
	<link href="style/Styles5.css" rel="stylesheet" type="text/css" />
	<link href="style/Styles2.css" rel="stylesheet" type="text/css" />
	<link href="style/Styles5.css" rel="stylesheet" type="text/css" />

</head>
<body>


    <!--HEADER-->

    <header>

        <div class="main_head">
            <div class="upperline">
                <div class="b1">

                    <button><a href="Shopping Cart.php">
                        <img src="img/cart.png" width="20px" height="14px">My Shopping Cart</a></button>
                    <button><a href="Home.php">Home</a></button>
                    <button><a href="Sign In.php">Login</a></button>
                    <button><a href="Registration.php">Register</a></button>
                </div>
                <div class="b4">
                    <button><a href="Deliveryareas.php">Your City</a></button>
                </div>
            </div>

            <div class="logo">
                <a href="Home.php">
                    <img src="img/logo.jpg" alt="logo" />
                </a>
            </div>

            <div class="name">
                <a href="Home.php">
                    <h1>Store 2 Door </h1>
                </a>
            </div>

            <div class="topics">
                <a href="About Us.php" target="_blank">About Us </a>
                <a href="Customer Feedback.php" target="_blank">Customer Feedback </a>
                <a href="Contact Us.php" target="_blank">Contact Us </a>
                <a href="Privacy Policy.php" target="_blank">Privacy Policy </a>
            </div>





        </div>

        <div class="ofrs">

            <div class="offers">
                <a href="Weekly Offers.php" target="_blank">Weekly Offers</a>
            </div>

            <div class="search">
                <input type="text" placeholder=" Search Items Here..." name="search">
            </div>

        </div>

        <div class="navigation">
            <button><a href="Household.php">Household</a></button>
            <button><a href="Grocery.php">Grocery</a></button>
            <button><a href="Chilled.php">Chilled</a></button>
            <button><a href="Pharmacy.php">Pharmacy</a></button>
            <button><a href="Liquor.php">Liquor</a></button>
            <button><a href="Beverages.php">Beverages</a></button>
            <button><a href="Frozen Food.php">Frozen Food</a></button>
            <button><a href="Meat.php">Meat</a></button>
            <button><a href="Fish.php">Fish</a></button>
            <button><a href="Vegetables.php">Vegetables</a></button>
            <button><a href="Fruits.php">Fruits</a></button>
        </div>

    </header>

	<br>
	<br>
	<br>
	<br>
	<br>
   	
	<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="img/p1.jpg" width="1000px" height="550px">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="img/p2.jpg" width="1000px" height="550px">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="img/p3.jpg" width="1000px" height="550px"">
  <div class="text">Caption Three</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>




<div class="btn-group">
  <button>Delivery Info</button>
  <button>Home Delivery</button>
  <button>Shopping List</button>
  <button>Tracking Info</button>
</div>


	 <h1 class="heading">PRICE OF THE WEEK </h1>
<div class="midl">
        <div class="row1">

            <div class="first">
<a  href="broccoli.html">
                <h2>Broccoli</br> 
						(1kg) </h2>
                <img  src="img/Broccoli.png" alt="Broccoli (1kg)" class="photo" />

                <div class="info">

                    <p class="new">LKR 2150.00</p>
</a>
                    

             

                </div>

            </div>

            <div class="second">
<a href="anchor_butter.html">
                <h2>Anchor butter(250g)
                <img  src="img/butter.png" alt="butter (250g)" class="photo" />

                <div class="info">

                    <p class="new">LKR 225.00</p>
 </a>  
                 

                </div>

            </div>

            <div class="third">
<a href="fat_spread.html">
                <h2>Fat sprad </br>(250g) </h2>
                <img  src="img/fat_spread.png" alt="fat_spread (250g)" class="photo" />

                <div class="info">

                    <p class="new">LKR 300.00</p>

 </a>                  
                </div>

            </div>

        </div>
		
		
	  <div class="row2">

            <div class="first">

                <h2>Coca cola (1L) </h2>
                <img src="img/coc.gif" alt="coca cola (1L)" width = "50px" class = "pict" />

                <div class="info">

                    <p class="new">LKR 250.00</p>

                    
                </div>

            </div>

            <div class="second">

                <h2>lux (100g) </h2>
                <img src="img/lux.jpg" alt="lux (100g)" class="photo" />

                <div class="info">

                    <p class="new">LKR 45.00</p>

                   

                </div>

            </div>

            <div class="third">

                <h2>Washing poder (1kg) </h2>
                <img src="img/pwdr.jpg" alt="Washing powder (1kg)" class="photo" />

                <div class="info">

                    <p class="new">LKR 375.00</p>

                    
                </div>

            </div>

        </div>
</div>
 
 <div class="footer">

        <div class="txt">
            <a  href="Contact Us.php" target="_blank">Contact Us</a>
            <br />
            <p>Copyright &#169; 2018</p>
        </div>

        <div class="cards">
            <img src="img/pay.png" alt="payment cards" />
        </div>

    </div>

</body>

</html>

<?php mysqli_close($connection); ?>