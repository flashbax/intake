<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Singer Kwinter - Intake Form</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- JS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="js/excel.js"></script>

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="https://fonts.googleapis.com/css?family=Khula" rel="stylesheet">
  <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/skeleton.css">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/favicon.png">

</head>
<body>


<?php
     //initialization at the top
     //connect to database
     $conn = mysqli_connect("justinkwitco.netfirmsmysql.com", "newuser99", "newuser99", "intake_form");
    //check if connection failed
     if(mysqli_connect_errno()) { 
      echo "Failed to connect: " . mysqli_connect_error();
     }
?>

<form action="#" method="GET">
      <div class="row">
          <h2>Search by Lawyer and Type of File</h2>
           <select name="lawyer">
           <option>Select Lawyer</option>          
                <?php

                  $querylaw = "SELECT DISTINCT user_lawyer FROM intake_data";
                  $resultlaw = mysqli_query($conn, $querylaw);


                
                  while($rowslaw = mysqli_fetch_array($resultlaw)) {
                    $rowslawid = $rowslaw['id'];
                    $rowslawdata = $rowslaw['user_lawyer'];
                    //$ref = mysqli_real_escape_string($conn, $rowsrefdata)
                
                 
                ?>

                <?php echo '<option> '. $rowslawdata .' </option>'; ?>
                

                <?php    
                  }
                ?>
            </select>
            <select name="type">
            <option>Select Type of File</option>          
                <?php
                  $querytype = "SELECT DISTINCT user_type FROM intake_data";
                  $resulttype = mysqli_query($conn, $querytype);
                  while($rowstype = mysqli_fetch_array($resulttype)) {
                    $rowstypeid = $rowstype['id']; 
                    $rowstypedata = $rowstype['user_type']; 
                ?>
                    <option><?php echo $rowstypedata; ?></option> 

                <?php    
                  }
                ?>
            </select>
            <input type="submit" value="go" name="genreport">
        </div>
        <div id="dvData">
        <table cellpadding="0" cellspacing="0" align="center"> 
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
        <div class="row">
            <?php
            // error_reporting(0);
                if (isset($_GET['genreport']) ? $_GET['genreport'] : '') { 
                
                $lawyer = $_GET['lawyer'];
                //single and double quote fix
                $lawqfix = mysqli_real_escape_string($conn, $lawyer);
                $type = $_GET['type'];
                //single and double quote fix
                $typeqfix = mysqli_real_escape_string($conn, $type);
                
                $query = "SELECT user_firstname, user_lastname, user_referral, user_referral_other, user_lawyer, user_type, user_type_other, user_date FROM intake_data WHERE user_lawyer='$lawqfix' AND user_type='$typeqfix'";

                $result = mysqli_query($conn, $query) OR die(mysqli_error($conn));

                if (!$result) {
                    printf("Error: %s\n", mysqli_error($conn));
                exit(); }

                while($thelawrows = mysqli_fetch_array($result)) {

                    $rowslawfirst = $thelawrows['user_firstname']; 
                    $rowslawlast = $thelawrows['user_lastname']; 
                    $rowslawdata = $thelawrows['user_referral']; 
                    $rowslawdataother = $thelawrows['user_referral_other']; 
                    $rowslawlawyer = $thelawrows['user_lawyer']; 
                    $rowslawtype = $thelawrows['user_type'];
                    $rowslawtypeother = $thelawrows['user_type_other'];
                    $rowslawdate = $thelawrows['user_date'];

                     
                ?>
                  <tr>
                    <td><?php echo $rowslawfirst; ?></td>
                    <td><?php echo $rowslawlast; ?></td> 
                    <td><?php echo $rowslawdata; ?></td>
                    <td><?php echo $rowslawdataother; ?></td> 
                    <td><?php echo $rowslawlawyer; ?></td> 
                    <td><?php echo $rowslawtype; ?></td>
                    <td><?php echo $rowslawtypeother; ?></td>  
                    <td><?php echo $rowslawdate; ?></td> 
                  </tr>
                

            <?php    
                  } 
                }
            ?>
        </div>
        </table>
        </div>
</form>
<a href="#" class="export">Export to Excel</a>

<?php include("inc/nav.php"); ?>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
