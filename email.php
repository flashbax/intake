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
        <link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One" rel="stylesheet">
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
                <div class="twelve columns"><br /><img src="images/logo.png" /></div>
              </div>  
              <div class="row">
                <div class="twelve columns"><br /><h4>POTENTIAL NEW CLIENT FORM</h4></div>
              </div>
              <div class="row">
                <div class="twelve columns">

                      <?php
                        
                         //initialization at the top
                         //connect to database
                         $conn = new mysqli("justinkwitco.netfirmsmysql.com", "newuser99", "newuser99", "intake_form");
                         //check if connection failed
                         if($conn->connect_error) { 
                          die("Connection error: " . $conn->connect_error);
                         }

                            $result = $conn->query("SELECT * FROM intake_data ORDER BY id DESC LIMIT 1"); 

                             if ($result->num_rows > 0) { 
                                while ($row = $result->fetch_assoc()) { 
                                    $firstname = $row['user_firstname'];
                                    $lastname = $row['user_lastname'];
                                    $phone = $row['user_phone'];
                                    $referral = $row['user_referral'];
                                    $referralother = $row['user_referral_other'];
                                    $lawyer = $row['user_lawyer'];
                                    $type = $row['user_type'];
                                    $typeother = $row['user_type_other'];
                                    $date = $row['user_date'];
                                    $formfilledby = $row['user_formfilledby'];
                                    $comments = $row['user_comment'];

                                    $email = $row['user_email'];

                                    echo 'The following information has been added to the database and emailed to ' . $email . ':' . '<br>' . 'First Name: ' . $firstname . '<br>' . 'Last Name: ' . $lastname . '<br>' . 'Phone: ' .$phone . '<br>' . 'Referral: ' . $referral . '<br>' . 'Referral Other: ' . $referralother . '<br>' . 'Lawyer: ' . $lawyer . '<br>' . 'Type of File: ' . $type . '<br>' . 'Type of File Other: ' . $typeother . '<br>' . 'Date: ' . $date . '<br>' . 'Form Filled By: ' . $formfilledby . '<br>' . 'Comments: ' . $comments . '<br>';
                                }
                            }          

                      ?> 
                 
                <a href="index.php">Back to PNC Form</a>

                </div>
              </div> 
            </div>
          </div>
        </div>
      </body>
      </html>
