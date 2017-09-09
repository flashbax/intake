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
          <h4>Search by Client Status</h4>
           <select name="retain">
           <option>Select Client Status</option>          
                <?php

                  $queryret = "SELECT DISTINCT user_retained FROM intake_data";
                  $resultret = mysqli_query($conn, $queryret);


                
                  while($rowsret = mysqli_fetch_array($resultret)) {
                    $rowsretid = $rowsret['id'];
                    $rowsretdata = $rowsret['user_retained'];
                    //$ref = mysqli_real_escape_string($conn, $rowsrefdata)
                
                 
                ?>

                <?php echo '<option> '. $rowsretdata .' </option>'; ?>
                

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
            <td><strong>Status</strong></td> 
          </tr>
        <div class="row">
            <?php
            // error_reporting(0);
                if (isset($_GET['genreport']) ? $_GET['genreport'] : '') { 
                
                $ret = $_GET['retain'];
                //single and double quote fix
                $retqfix = mysqli_real_escape_string($conn, $ret);
               
                
                $query = "SELECT user_firstname, user_lastname, user_referral, user_referral_other, user_lawyer, user_type, user_type_other, user_date, user_retained FROM intake_data WHERE user_retained ='$retqfix'";

                $result = mysqli_query($conn, $query) OR die(mysqli_error($conn));

                if (!$result) {
                    printf("Error: %s\n", mysqli_error($conn));
                exit(); }

                while($theretrows = mysqli_fetch_array($result)) {

                    $rowsretfirst = $theretrows['user_firstname']; 
                    $rowsretlast = $theretrows['user_lastname']; 
                    $rowsretdata = $theretrows['user_referral']; 
                    $rowsretdataother = $theretrows['user_referral_other']; 
                    $rowsretlawyer = $theretrows['user_lawyer']; 
                    $rowsrettype = $theretrows['user_type'];
                    $rowsrettypeother = $theretrows['user_type_other'];
                    $rowsretdate = $theretrows['user_date'];
                    $rowsretretained = $theretrows['user_retained'];

                     
                ?>
                  <tr>
                    <td><?php echo $rowsretfirst; ?></td>
                    <td><?php echo $rowsretlast; ?></td> 
                    <td><?php echo $rowsretdata; ?></td>
                    <td><?php echo $rowsretdataother; ?></td> 
                    <td><?php echo $rowsretlawyer; ?></td> 
                    <td><?php echo $rowsrettype; ?></td>
                    <td><?php echo $rowsrettypeother; ?></td>  
                    <td><?php echo $rowsretdate; ?></td> 
                    <td><?php echo $rowsretretained; ?></td>
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
