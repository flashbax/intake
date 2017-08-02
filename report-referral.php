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
          <h2>Referral and Type of File</h2>
           <select name="subject">
           <option>Select Referral</option>          
                <?php

                  $queryref = "SELECT DISTINCT user_referral FROM intake_data";
                  $resultref = mysqli_query($conn, $queryref);
                  while($rowsref = mysqli_fetch_array($resultref)) {
                    $rowsrefid = $rowsref['id'];
                    $rowsrefdata = $rowsref['user_referral'];
                    $r = mysqli_real_escape_string($conn, $rowsrefdata)
                ?>
                    <option><?php echo htmlspecialchars($r); ?></option> 

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
                if (isset($_GET['genreport']) ? $_GET['genreport'] : '') { 
                
                $subject = $_GET['subject'];
                $type = $_GET['type'];
                
                $query = "SELECT user_firstname, user_lastname, user_referral, user_lawyer, user_type, user_date FROM intake_data WHERE user_referral='$subject' AND user_type='$type'";

                $result = mysqli_query($conn, $query) OR die(mysqli_error($conn));

                if (!$result) {
                    printf("Error: %s\n", mysqli_error($conn));
                exit(); }

                while($therefrows = mysqli_fetch_array($result)) {

                    $rowsreffirst = $therefrows['user_firstname']; 
                    $rowsreflast = $therefrows['user_lastname']; 
                    $rowsrefdata = $therefrows['user_referral']; 
                    $rowsreflawyer = $therefrows['user_lawyer']; 
                    $rowsreftype = $therefrows['user_type'];
                    $rowsrefdate = $therefrows['user_date'];
                     
                ?>
                <div class="row"> 
                     <div class="two columns"><?php echo $rowsreffirst; ?></div>
                     <div class="two columns"><?php echo $rowsreflast; ?></div>  
                     <div class="two columns"><?php echo $rowsrefdata; ?></div>
                     <div class="two columns"><?php echo $rowsreflawyer; ?></div>
                     <div class="two columns"><?php echo $rowsreftype; ?></div>
                     <div class="two columns"><?php echo $rowsrefdate; ?></div>
                </div>

            <?php    
                  } 
                }
            ?>
        </div>
        <div><a href="index.php">Back</div>
        <div><a href="report-date.php">Date Search</div>
</form>


<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
