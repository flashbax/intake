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
     $conn = mysqli_connect("localhost", "root", "", "intake_form");
    //check if connection failed
     if(mysqli_connect_errno()) { 
      echo "Failed to connect: " . mysqli_connect_error();
     }
?>

<form action="#" method="GET">
      <div class="row">
          <h1>Date Search</h1>
          Start Date: <input type="date" id="datestart" name="datestart" placeholder="Enter Start date" />
          End Date: <input type="date" id="dateend" name="dateend" placeholder="Enter End date" />
            
            
            <input type="submit" value="go" name="gendate">
        </div>
        <div class="row">
            <div class="two columns">First Name</div>
            <div class="two columns">Last Name</div>
            <div class="two columns">Referral</div>
            <div class="two columns">Lawyer</div>
            <div class="two columns">Type of File</div>
            <div class="two columns">Date</div>
        </div>
        <div class="row">
            <?php
            // error_reporting(0);
                if (isset($_GET['gendate']) ? $_GET['gendate'] : '') { 
                
                $datestart = $_GET['datestart'];
                $dateend = $_GET['dateend'];
                
                $querydate = "SELECT user_firstname, user_lastname, user_referral, user_lawyer, user_type, user_date FROM intake_data WHERE user_date >='$datestart' AND user_date<='$dateend' ORDER BY user_date ASC";

                $dateresult = mysqli_query($conn, $querydate) OR die(mysqli_error());

                if (!$dateresult) {
                    printf("Error: %s\n", mysqli_error($conn));
                exit(); }

                while($therows = mysqli_fetch_array($dateresult)) {

                    $rowsfirst = $therows['user_firstname']; 
                    $rowslast = $therows['user_lastname']; 
                    $rowsdata = $therows['user_referral']; 
                    $rowslawyer = $therows['user_lawyer']; 
                    $rowstype = $therows['user_type'];
                    $rowsdate = $therows['user_date'];
                     
                ?>
                <div class="row"> 
                     <div class="two columns"><?php echo $rowsfirst; ?></div>
                     <div class="two columns"><?php echo $rowslast; ?></div>  
                     <div class="two columns"><?php echo $rowsdata; ?></div>
                     <div class="two columns"><?php echo $rowslawyer; ?></div>
                     <div class="two columns"><?php echo $rowstype; ?></div>
                     <div class="two columns"><?php echo $rowsdate; ?></div>
                </div>

            <?php    
                  } 
                }
            ?>
        </div>
        <div><a href="index.php">Back</div>
        <div><a href="report-referral.php">Referral and Type of File Search</div>
</form>


<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
