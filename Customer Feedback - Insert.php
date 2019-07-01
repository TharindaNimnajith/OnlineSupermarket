<?php require_once('Includes/connection.php'); ?>


<?php

	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$comment = $_POST['comment'];

	$query = " INSERT INTO feedback (name,email,subject,comment) VALUES ('{$name}','{$email}','{$subject}','{$comment}')";

$result = mysqli_query($connection,$query);

if($result){
	echo "1 record added";
}else{
	echo "failed to add record";
}


?>



<?php mysqli_close($connection); ?>