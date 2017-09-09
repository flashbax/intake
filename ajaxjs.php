<?php
	session_start();
// Fetching Values From URL
	$to = $_POST['email1'];
	$topnc =("jkwitco@singerkwinter.com");
    $subject = 'PNC Form';
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
	$email2 = $_POST['email1'];
	$connection = mysqli_connect("justinkwitco.netfirmsmysql.com", "newuser99", "newuser99"); // Establishing Connection with Server..
	$db = mysqli_select_db($connection, "intake_form"); // Selecting Database
	
	if (isset($_POST['firstname1'])) {
			
			$message = 'First Name: ' . $firstname2 . "\n\n" . 'Last Name: ' . $lastname2 . "\n\n" . 'Phone Number: ' . $phone2 . "\n\n" . 'Referral: ' . $referral2 . "\n\n" . 'Referral Other: ' . $referralother2 . "\n\n" . 'Lawyer: ' . $lawyer2 . "\n\n" . 'Type of File: ' . $type2 . "\n\n" . 'Type of File Other: ' . $typeother2 . "\n\n" . 'Date of Contact: ' . $dateofcontact2 . "\n\n" . 'Form Filled By: ' . $formfilledby2 . "\n\n" . 'Comments: ' . $comments2;

            $headers = "From: noreply@singerkwinter.com\r\n";
            $headers .= 'Content-Type: text/plain; charset=utf-8';

            mail($to, $subject, $message, $headers);
            mail($topnc, $subject, $message, $headers);
    }
             
	if (isset($_POST['firstname1'])) {

			$query = mysqli_query($connection, "insert into intake_data(user_firstname, user_lastname, user_phone, user_referral, user_referral_other, user_lawyer, user_type, user_type_other, user_date, user_formfilledby, user_comment, user_email) values ('$firstname2', '$lastname2', '$phone2', '$referral2', '$referralother2' ,'$lawyer2' ,'$type2' ,'$typeother2' ,'$dateofcontact2' ,'$formfilledby2' ,'$comments2' ,'$email2')"); //Insert Query
		 	 echo "email.php";
		
	 }
	
	mysqli_close($connection); // Connection Closed
?>

