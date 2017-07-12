<?php
//process.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {//Check it is coming from a form
    $u_firstname = $_POST["firstname"]; //set PHP variables like this so we can use them anywhere in code below
    $u_lastname = $_POST["lastname"];
    $u_phone = $_POST["phone"];
    $u_referral = $_POST["referral"];
    $u_lawyer = $_POST["lawyer"];
    $u_type = $_POST["type"];
    $u_dateofcontact = $_POST["dateofcontact"];
    $u_formfilledby = $_POST["formfilledby"];
    $u_comments = $_POST["comments"];
    
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