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
            $u_referral_other = filter_var($_POST["referralother"], FILTER_SANITIZE_STRING);
            $u_lawyer = $_POST["lawyer"];
            $u_type = $_POST["type"];
            $u_type_other = $_POST["typeother"];
            $u_dateofcontact = filter_var($_POST["dateofcontact"], FILTER_SANITIZE_STRING);
            $u_formfilledby = filter_var($_POST["formfilledby"], FILTER_SANITIZE_STRING);
            $u_comments = filter_var($_POST["comments"], FILTER_SANITIZE_STRING);
            
            
            $u_phone_dashes = '('.substr($u_phone , 0, 3).') '.substr($u_phone , 3, 3).'-'.substr($u_phone ,6);

            
            
            if (empty($u_lastname)){
                die("Please enter your last name");
            }
                
            if (strlen($u_phone) < 10){ 
                die("Please enter phone number");
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
            
            $statement = $mysqli->prepare("INSERT INTO intake_data (user_firstname, user_lastname, user_phone, user_referral, user_referral_other, user_lawyer, user_type, user_type_other, user_date, user_formfilledby, user_comment) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)"); //prepare sql insert query
            //bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
            $statement->bind_param('sssssssssss', $u_firstname, $u_lastname, $u_phone_dashes, $u_referral, $u_referral_other, $u_lawyer, $u_type, $u_type_other, $u_dateofcontact, $u_formfilledby, $u_comments); //bind values and execute insert query
            

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
                            <div><?php print "Referral Source Other: " . $u_referral_other; ?></div>
                            <div><?php print "Lawyer: " . $u_lawyer; ?></div>
                            <div><?php print "Type of File: " . $u_type; ?></div>
                            <div><?php print "Type of File: " . $u_type_other; ?></div>
                            <div><?php print "Date of Contact: " . $u_dateofcontact; ?></div>
                            <div><?php print "Form Filled By:  " . $u_formfilledby; ?></div>
                            <div><?php print "Comments: " . $u_comments; ?></div>        

            <?php
            
            }else{
                print $mysqli->error; //show mysql error if any
            }
        }

        // ALTER TABLE intake_data AUTO_INCREMENT = 12

        ?>