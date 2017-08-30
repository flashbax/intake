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

        <?php

          if (isset($_POST['send'])) { 
            $emailad =  $_POST['email'];
            $to = $emailad;
            $subject = 'PNC Form';
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $phone = $_POST['phone'];
            $referral = $_POST['referral'];
            $referralother = $_POST['referralother'];
            $lawyer = $_POST['lawyer'];
            $type = $_POST['type'];
            $typeother = $_POST['typeother'];
            $dateofcontact = $_POST['dateofcontact'];
            $formfilledby = $_POST['formfilledby'];
            $comments = $_POST['comments'];

            $message = 'First Name: ' . $firstname . "\n\n" . 'Last Name: ' . $lastname . "\n\n" . 'Phone Number: ' . $phone . "\n\n" . 'Referral: ' . $referral . "\n\n" . 'Referral Other: ' . $referralother . "\n\n" . 'Lawyer: ' . $lawyer . "\n\n" . 'Type of File: ' . $type . "\n\n" . 'Type of File Other: ' . $typeother . "\n\n" . 'Date of Contact: ' . $dateofcontact . "\n\n" . 'Form Filled By: ' . $formfilledby . "\n\n" . 'Comments: ' . $comments;

            $headers = "From: SK Potential New Client\r\n";
            $headers .= 'Content-Type: text/plain; charset=utf-8';

            $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
            if ($email) { 
                $headers .= "\r\nReply-To: $email";
            }


            $success = mail($to, $subject, $message, $headers);
             
          
          } ?>

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
                      <p><?php echo $formfilledby ?> the following PNC! information has been emailed to <?php echo $emailad ?></p>  
                      <?php } else { ?>
                      <p>The PNC information has not emailed. Please contact IT Requests at <a href="mailto:itrequests@singerkwinter.com">itrequests@singerkwinter.com</a></p>
                  <?php } ?>

                  <a href="index.php">Back to PNC Form</a>

                </div>
              </div> 
            </div>
          </div>
        </div>
      </body>
      </html>
