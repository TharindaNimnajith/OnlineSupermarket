<?php 

	require_once('Includes/connection.php'); 

?>

<?php

	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$cardNumber = $_POST['cardNumber'];
	$cvv = $_POST['cvv'];
	$expiryYear = $_POST['expiryYear'];
	$expiryMonth = $_POST['expiryMonth'];
	
	$query = "INSERT INTO Payment (firstName, lastName, cardNumber, cvv, expiryYear, expiryMonth) VALUES ('{$firstName}', '{$lastName}', '{$cardNumber}', '{$cvv}', '{$expiryYear}', '{$expiryMonth}')";
	
	if (!mysqli_query($connection, $query))
	{
		echo 'Not Inserted';
	}

	else
	{
		// echo 'Inserted';

		header("location: Payment Confirmation.php");

	}

?>

<?php

	mysqli_close($connection);

?>
