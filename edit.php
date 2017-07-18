<?php
 //initialization at the top

 //connect to database
 $conn = mysqli_connect("localhost", "root", "", "intake_form");
 
//check if connection failed
 if(mysqli_connect_errno()) { 
 	echo "Failed to connect: " . mysqli_connect_error();
 }

 //echo "success";
 //exit();

?>
<?php
	//error_reporting(0);

	$output = '';

	//if the text box isn't empty and space isn't empty run this
	if(isset ($_GET['search']) && $_GET['search'] !== '') { 
		$search = $_GET['search'];

		$s = mysqli_query($conn, "SELECT * FROM `intake_data` WHERE user_lastname LIKE '%$search%'") OR die(mysqli_error());
		$c = mysqli_num_rows($s);

		if($c == 0) { 
			$output = 'No search results for <strong>"' . $search . '"</strong>';
		} else { 
			while ($row = mysqli_fetch_array($s)) {
				$fname = $row['user_firstname'];
				$lname = $row['user_lastname'];
				$com = $row['user_comment'];

				$output .= 'First Name: <strong>' . $fname .'</strong> <br />
							Last Name: <strong>' . $lname .'</strong> <br />
							User Comment: <strong>' . $com.'</strong> <br />';
			}
		}
		
	} else { 
		//header("location: ./edit-comments.html");
		print('Please enter text!');
	}
	print("$output");
	mysqli_close($conn);

?>