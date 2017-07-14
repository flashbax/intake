<?php
//process.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {//Check it is coming from a form
    
    $u_firstname = filter_var($_POST["firstname"], FILTER_SANITIZE_STRING); //set PHP variables like this so we can use them anywhere in code below
    $u_lastname = filter_var($_POST["lastname"], FILTER_SANITIZE_STRING);
    $u_phone = filter_var($_POST["phone"], FILTER_SANITIZE_STRING);
    $u_referral = $_POST["referral"];
    $u_lawyer = $_POST["lawyer"];
    $u_type = $_POST["type"];
    $u_dateofcontact = filter_var($_POST["dateofcontact"], FILTER_SANITIZE_STRING);
    $u_formfilledby = filter_var($_POST["formfilledby"], FILTER_SANITIZE_STRING);
    $u_comments = filter_var($_POST["comments"], FILTER_SANITIZE_STRING);
    
    if (empty($u_firstname)){
        die("Please enter your first name");
    }
    
    if (empty($u_lastname)){
        die("Please enter your last name");
    }
        
    if (empty($u_phone)){
        die("Please enter phone number");
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

    //print output text
    print "Thank you " . $u_firstname . ". Your submission has been added to the database.<br /><br />";
    
    print "First Name: " . $u_firstname . " <br />";
    print "Last Name: " . $u_lastname . " <br />";
    print "Phone Number: " . $u_phone . " <br />";
    print "Referral Source: " . $u_referral . " <br />";
    print "Lawyer: " . $u_lawyer . " <br />";
    print "Type of File: " . $u_type . " <br />";
    print "Date of Contact: " . $u_dateofcontact . " <br />";
    print "Form Filled By:  " . $u_formfilledby . " <br />";
    print "Comments: " . $u_comments . " <br /><br />";
    

    print "We will contact you very soon!";
}
?>