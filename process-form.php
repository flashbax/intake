
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
  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  
  <div class="container">
    <div class="row">
      <div class="twelve columns">
        <div class="row">
          <div class="twelve columns"><img src="images/logo.png" /></div>
        </div>  
        <div class="row">
          <div class="twelve columns"><br /><h4>POTENTIAL NEW CLIENT FORM</h4></div>
        </div>
        <?php
        //reset intake data id to 0 ALTER TABLE `intake_data` AUTO_INCREMENT=0
        //process.php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {//Check it is coming from a form
            
            //mysql credentials
            $mysql_host = "localhost";
            $mysql_username = "root";
            $mysql_password = "";
            $mysql_database = "intake_form";
            $u_firstname = filter_var($_POST["firstname"], FILTER_SANITIZE_STRING); //set PHP variables like this so we can use them anywhere in code below
            $u_lastname = filter_var($_POST["lastname"], FILTER_SANITIZE_STRING);
            $u_phone = filter_var($_POST["phone"], FILTER_SANITIZE_STRING);
            $u_referral = $_POST["referral"];
            $u_lawyer = $_POST["lawyer"];
            $u_type = $_POST["type"];
            $u_dateofcontact = filter_var($_POST["dateofcontact"], FILTER_SANITIZE_STRING);
            $u_formfilledby = filter_var($_POST["formfilledby"], FILTER_SANITIZE_STRING);
            $u_comments = filter_var($_POST["comments"], FILTER_SANITIZE_STRING);
            
            
            $u_phone_dashes = '('.substr($u_phone , 0, 3).') '.substr($u_phone , 3, 3).'-'.substr($u_phone ,6);
           
            
            if (empty($u_firstname)){
                die("Please enter your first name");
            }
            
            if (empty($u_lastname)){
                die("Please enter your last name");
            }
                
            if (strlen($u_phone) < 10){ //use u_phone since it doesn't include dashes and brackets when processing
                die("Please enter phone number");
            }

            if(is_numeric($u_phone) && $u_phone == round($u_phone, 0)){
                
            } else { 
                die("Please use numbers only!");
            }

            if ($u_referral == "Other" && empty($u_referral_other)){ 
                die("Please enter the referral name in the text field");
            }
            if ($u_type == "Other" && empty($u_type_other)){ 
                die("Please enter the type of file in the text field");
            }

            if (empty($u_dateofcontact)){
                die("Please enter the date of contact");
            } 

            if (empty($u_formfilledby)){
                die("Please enter who took the call");
            }

            if (empty($u_comments)){
                die("Please enter a comment");
            }  
            
            //Open a new connection to the MySQL server
            //see https://www.sanwebe.com/2013/03/basic-php-mysqli-usage for more info
            $mysqli = new mysqli($mysql_host, $mysql_username, $mysql_password, $mysql_database);
            
            //Output any connection error
            if ($mysqli->connect_error) {
                die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
            }   
            
            $statement = $mysqli->prepare("INSERT INTO intake_data (user_firstname, user_lastname, user_phone, user_referral, user_lawyer, user_type, user_date, user_formfilledby, user_comment) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)"); //prepare sql insert query
            //bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
            $statement->bind_param('sssssssss', $u_firstname, $u_lastname, $u_phone_dashes, $u_referral, $u_lawyer, $u_type, $u_dateofcontact, $u_formfilledby, $u_comments); //bind values and execute insert query
            
            if($statement->execute()){
                 //print output text
            ?>

                            <br />
                            <div><?php print "Thank you <strong> " . $u_formfilledby . "</strong>. Your submission has been added to the database."; ?></div>
                            <br />
                            <div><?php print "First Name: " . $u_firstname; ?></div>  
                            <div><?php print "Last Name: " . $u_lastname; ?></div>
                            <div><?php print "Phone Number: " . $u_phone_dashes; ?></div>
                            <div><?php print "Referral Source: " . $u_referral; ?></div>
                            <div><?php print "Lawyer: " . $u_lawyer; ?></div>
                            <div><?php print "Type of File: " . $u_type; ?></div>
                            <div><?php print "Date of Contact: " . $u_dateofcontact; ?></div>
                            <div><?php print "Form Filled By:  " . $u_formfilledby; ?></div>
                            <div><?php print "Comments: " . $u_comments; ?></div>
                            <br /> 
                               

            <?php
            
            }else{
                print $mysqli->error; //show mysql error if any
            }
        }
        // ALTER TABLE intake_data AUTO_INCREMENT = 12
        ?>
        </div>
    </div>
</div>  
        <!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>