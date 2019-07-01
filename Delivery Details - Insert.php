<?php 

	require_once('Includes/connection.php'); 

?>

<?php

	$district = $_POST['district']; 
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$nic = $_POST['nic'];
	$email = $_POST['email'];
	$contactNumber = $_POST['contactNumber'];
	$address = $_POST['address'];
	
	$query = "INSERT INTO delivery (district, firstName, lastName, nic, email, contactNumber, address) VALUES ('$district', '$firstName', '$lastName', '$nic', '$email', '$contactNumber', '$address')";
	
	if (mysqli_query($connection, $query))
	{
		// echo 'Inserted';

		header("location: Payment Method.php");
	}

	else
	{
		echo 'Not Inserted';
	}

?>

<?php

	mysqli_close($connection);

?>
