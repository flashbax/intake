<?php
$connect = mysqli_connect("localhost", "root", "", "intake_form"); 

$output = '';

if(isset($_POST["export_excel"])) { 
	$sql = "SELECT * FROM intake_data ORDER BY id ASC";
	$result = mysqli_query($connect, $sql) OR die(mysqli_error($connect));

	if (!$result) {
        printf("Error: %s\n", mysqli_error($connect));
    exit(); }

	if(mysqli_num_rows($result) > 0) 
	{ 
		$output .= '
			 <table class="table" cellpadding="0" cellspacing="0" align="center"> 
          		<tr>
            		<td><strong>First Name</strong></td>
            		<td><strong>Last Name</strong></td> 
		            <td><strong>Referral</strong></td> 
		            <td><strong>Referral Other</strong></td>
		            <td><strong>Lawyer</strong></td> 
		            <td><strong>Type of File</strong></td>
		            <td><strong>Type of File Other</strong></td> 
		            <td><strong>Date</strong></td> 
          		</tr>
		';
		while($row = mysqli_fetch_array($result)) 
		{ 
			$output .= '
				 <tr>
                    <td>'.$row['user_firstname'].'</td>
                    <td>'.$row['user_lastname'].'</td>
                    <td>'.$row['user_referral'].'</td>
                    <td>'.$row['user_referral_other'].'</td>
                    <td>'.$row['user_lawyer'].'</td>
                    <td>'.$row['user_type'].'</td>
                    <td>'.$row['user_type_other'].'</td>
                    <td>'.$row['user_date'].'</td>
                  </tr>
			';
		}
		$output .= '</table>';
		header("Content-Type:application/xls");
		header("Content-Disposition: attachment; filename=download.xls");
		echo $output;
	} 
}

?>