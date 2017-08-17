<?php
// Fetching Values From URL
	$firstname2 = $_POST['firstname1'];
	$lastname2 = $_POST['lastname1'];
	$phone2 = $_POST['phone1'];
	$referral2 = $_POST['referral1'];
	$referralother2 = $_POST['referralother1'];
	$lawyer2 = $_POST['lawyer1'];
	$type2 = $_POST['type1'];
	$typeother2 = $_POST['typeother1'];
	$dateofcontact2 = $_POST['dateofcontact1'];
	$formfilledby2 = $_POST['formfilledby1'];
	$comments2 = $_POST['comments1'];
	$connection = mysqli_connect("localhost", "root", ""); // Establishing Connection with Server..
	$db = mysqli_select_db($connection, "intake_form"); // Selecting Database
	if (isset($_POST['firstname1'])) {
		$query = mysqli_query($connection, "insert into intake_data(user_firstname, user_lastname, user_phone, user_referral, user_referral_other, user_lawyer, user_type, user_type_other, user_date, user_formfilledby, user_comment) values ('$firstname2', '$lastname2', '$phone2','$referral2' ,'$referralother2' ,'$lawyer2' ,'$type2' ,'$typeother2' ,'$dateofcontact2' ,'$formfilledby2' ,'$comments2')"); //Insert Query
		echo "Form Submitted succesfully";
	}
	mysqli_close($connection); // Connection Closed
?>