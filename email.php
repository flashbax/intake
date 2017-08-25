  <?php
  if (isset($_POST['send'])) { 
    
    $to = 'jkwitco@gmail.com';
    $subject = 'PNC Form';
    $message = 'First Name: ' . $_POST['firstname'] . "\r\n\r\n";
    $message = 'Last Name: ' . $_POST['lastname'] . "\r\n\r\n";
    $message = 'Phone Number: ' . $_POST['phone'] . "\r\n\r\n";
    $message = 'Referral: ' . $_POST['referral'] . "\r\n\r\n";
    $message = 'Referral Other: ' . $_POST['referralother'] . "\r\n\r\n";
    $message = 'Lawyer: ' . $_POST['lawyer'] . "\r\n\r\n";
    $message = 'Type of File: ' . $_POST['referralother'] . "\r\n\r\n";
    $message = 'Type of File Other: ' . $_POST['typeoffileother'] . "\r\n\r\n";
    $message = 'Date of Contact: ' . $_POST['dateofcontact'] . "\r\n\r\n";
    $message = 'Form Filled By: ' . $_POST['formfilledby'] . "\r\n\r\n";
    $message = 'Comments: ' . $_POST['comments'];

    $headers = "From: jkwitco@gmail.com\r\n";
    $headers .= 'Content-Type: text/plain; charset=utf-8';


    $success = mail($to, $subject, $message, $headers);

  } ?>

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


        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
        <script type="text/javascript" src="js/val.js"></script>

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

        <div class="container">
          <div class="row">
            <div class="twelve columns">
              <div class="row">
                <div class="twelve columns"><img src="images/logo.png" /></div>
              </div>  
              <div class="row">
                <div class="twelve columns"><br /><h4>POTENTIAL NEW CLIENT FORM</h4></div>
              </div>
              <div class="row">
                <div class="twelve columns">
                  <?php if (isset($success) && $success) { ?>
                  <p>The PNC information has been emailed</p>  
                   <?php } else { ?>
                  <p>The PNC information has not emailed</p>
                  <?php } ?>

                </div>
              </div> 
            </div>
          </div>
        </div>
      </body>
      </html>
      