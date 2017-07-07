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
    print "Hello " . $u_firstname . "!, we have received your message and phone number ". $u_phone;
    
    print $u_firstname;
    print $u_lastname;
    print $u_phone;
    print $u_referral;
    print $u_lawyer;
    print $u_type;
    print $u_dateofcontact;
    print $u_formfilledby;
    print $u_comments;
    

    print "We will contact you very soon!";
}
?>