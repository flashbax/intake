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

<form action="report.php" method="POST">
      <div class="row">
          <label for="report">Search based on:</label>
           <select name="subject">
           <option>Select Referral</option>          
                <?php
                  $queryref = "SELECT * FROM intake_data";
                  $resultref = mysqli_query($conn, $queryref);
                  while($rowsref = mysqli_fetch_array($resultref)) {
                    $rowsrefid = $rowsref['id'];
                    $rowsrefdata = $rowsref['user_referral']; 
                ?>
                    <option value=""><?php echo $rowsrefdata; ?></option> 

                <?php    
                  }
                ?>
            </select>
            <select name="type">
            <option>Select Type of File</option>          
                <?php
                  $querytype = "SELECT * FROM intake_data";
                  $resulttype = mysqli_query($conn, $querytype);
                  while($rowstype = mysqli_fetch_array($resulttype)) {
                    $rowstypeid = $rowstype['id']; 
                    $rowstypedata = $rowstype['user_type']; 
                ?>
                    <option value=""><?php echo $rowstypedata; ?></option> 

                <?php    
                  }
                ?>
            </select>
            <input type="submit" name="genreport" value="go">
        </div>
        <div class="row">
            <div class="six columns">Referral</div>
            <div class="six columns">Type of File</div>
        </div>
        <div class="row">
            <?php
                if (isset($_POST['genreport']) ? $_POST['genreport'] : '') { 
                
                $subject = $_POST['subject'];
                $type = $_POST['type'];
                
                $query = "SELECT user_referral, user_type FROM intake_data 
                WHERE user_referral = 'subject' 
                AND user_type = '$type'";

                $result = mysqli_query($conn, $query);
                while($rows = mysqli_fetch_array($result)) {
                    $rowsdata = $rows['user_referral']; 
                    $rowstype = $rows['user_type'];
                ?>
                <div class="row">   
                     <div class="six columns"><?php echo $rowsdata; ?></div>
                     <div class="six columns"><?php echo $rowstype; ?></div>
                </div>

            <?php    
                  }
                }
            ?>
        </div>
</form>


<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
