<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Singer Kwinter - Intake Form</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <!-- JS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="js/excel.js"></script>
  <script type="text/javascript" src="js/main.js"></script>

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="https://fonts.googleapis.com/css?family=Khula" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One" rel="stylesheet">
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
        <div class="twelve columns"><br /><img src="images/logo.png" /></div>
      </div>
      <div class="row">
          <h4>Search by Referral and Type of File</h4>
           <select name="subject">
           <option>Select Referral</option>          
                <?php

                  $queryref = "SELECT DISTINCT user_referral FROM intake_data";
                  $resultref = mysqli_query($conn, $queryref);


                
                  while($rowsref = mysqli_fetch_array($resultref)) {
                    $rowsrefid = $rowsref['id'];
                    $rowsrefdata = $rowsref['user_referral'];
                    //$ref = mysqli_real_escape_string($conn, $rowsrefdata)
                
                 
                ?>

                <?php echo '<option> '. $rowsrefdata .' </option>'; ?>
                

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
            <input type="submit" value="go" name="genreport" class="reftype">
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
                
                $subject = $_GET['subject'];
                //single and double quote fix
                $subqfix = mysqli_real_escape_string($conn, $subject);
                $type = $_GET['type'];
                //single and double quote fix
                $typeqfix = mysqli_real_escape_string($conn, $type);
                
                $query = "SELECT user_firstname, user_lastname, user_referral, user_referral_other, user_lawyer, user_type, user_type_other, user_date FROM intake_data WHERE user_referral='$subqfix' AND user_type='$typeqfix'";

                $result = mysqli_query($conn, $query) OR die(mysqli_error($conn));

                if (!$result) {
                    printf("Error: %s\n", mysqli_error($conn));
                exit(); }

                while($therefrows = mysqli_fetch_array($result)) {

                    $rowsreffirst = $therefrows['user_firstname']; 
                    $rowsreflast = $therefrows['user_lastname']; 
                    $rowsrefdata = $therefrows['user_referral']; 
                    $rowsrefdataother = $therefrows['user_referral_other']; 
                    $rowsreflawyer = $therefrows['user_lawyer']; 
                    $rowsreftype = $therefrows['user_type'];
                    $rowsreftypeother = $therefrows['user_type_other'];
                    $rowsrefdate = $therefrows['user_date'];

                     
                ?>
                  <tr>
                    <td><?php echo $rowsreffirst; ?></td>
                    <td><?php echo $rowsreflast; ?></td> 
                    <td><?php echo $rowsrefdata; ?></td>
                    <td><?php echo $rowsrefdataother; ?></td> 
                    <td><?php echo $rowsreflawyer; ?></td> 
                    <td><?php echo $rowsreftype; ?></td>
                    <td><?php echo $rowsreftypeother; ?></td>  
                    <td><?php echo $rowsrefdate; ?></td> 
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
