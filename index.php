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
        <form action="" method="post" enctype="multipart/form-data">
         <fieldset>
            <div class="row">
              <div class="twelve columns">
                <label for="firsttname">First Name:</label>
                <input type="text" id="firstname" name="firstname" placeholder="Enter first name" value="<?php if(isset($_POST['firstname'])) { echo htmlentities($_POST['firstname']); } ?>" />
              </div>
            </div>
            <div class="row">
              <div class="twelve columns">
                <label for="lastname">Last Name:</label>
                <input type="text" id="lastname" name="lastname" placeholder="Enter last name" value="<?php if(isset($_POST['lastname'])) { echo htmlentities($_POST['lastname']); } ?>" />
              </div>
            </div>
            <div class="row">
              <div class="twelve columns">
                <label for="phone">Phone:</label>
                <input type="text" maxlength="10" id="phone" name="phone" placeholder="Enter phone number" value="<?php if(isset($_POST['phone'])) { echo htmlentities($_POST['phone']); } ?>" />
              </div>
            </div>
            
            <div class="row">
              <div class="twelve columns">
                <label for="referral">Referral Source:</label>
                  <select name="referral" id="referral" placeholder="Enter referral" value="<?php if(isset($_POST['referral'])) { echo htmlentities($_POST['referral']); } ?>">
                    <option value="Advertising (General)">Advertising (General)</option>
                    <option value="Advocates Journal">Advocates Journal</option>
                    <option value="Ajax Pickering">Ajax Pickering</option>
                    <option value="AMK's Friend">AMK's Friend</option>
                    <option value="Another Lawyer">Another Lawyer</option>
                    <option value="Another Client">Another Client</option>
                    <option value="Answered Ad">Answered Ad</option>
                    <option value="Bar Association">Bar Association</option>
                    <option value="Bar Referral Service - Phone">Bar Referral Service - Phone</option>
                    <option value="Bar Referral Service - Web">Bar Referral Service - Web</option>
                    <option value="Best Lawyers">Best Lawyers</option>
                    <option value="Biking Toronto">Biking Toronto</option>
                    <option value="Book Keeper">Book Keeper</option>
                    <option value="Brain Injury Society of Toronto">Brain Injury Society of Toronto</option>
                    <option value="Brampton Billboard">Brampton Billboard</option>
                    <option value="Brampton Guardian Ad">Brampton Guardian Ad</option>
                    <option value="Brampton Transit Shelter">Brampton Transit Shelter</option>
                    <option value="Canada 411">Canada 411</option>
                    <option value="Canada Law List - Legal Directory">Canada Law List - Legal Directory</option>
                    <option value="Canadian Law Magazine">Canadian Law Magazine</option>
                    <option value="Canadian Lawyer">Canadian Lawyer</option>
                    <option value="Canadian Parapalegic Association">Canadian Parapalegic Association</option> 
                    <option value="City News Television Ad">City News Television Ad</option>
                    <option value="Cold Call">Cold Call</option>
                    <option value="Co-worker">Co-worker</option>
                    <option value="CP24 - Television Ad">CP24 - Television Ad</option>
                    <option value="CTV - Television Ad">CTV - Television Ad</option>
                    <option value="Existing Client">Existing Client</option>
                    <option value="Firm Website">Firm Website</option>
                    <option value="Dennis Schewchuck, LLB">Dennis Schewchuck, LLB</option>
                    <option value="Direct Mail">Direct Mail</option>
                    <option value="Doug Lissaman">Doug Lissaman</option>
                    <option value="Dr. Alan Gordon">Dr. Alan Gordon</option> 
                    <option value="Employee">Employee</option>
                    <option value="Family Member">Family Member</option>
                    <option value="Flyer">Flyer</option>
                    <option value="Frank Medicino LLB">Frank Medicino LLB</option>
                    <option value="Friend">Friend</option>
                    <option value="Healthcare/Medical Prof.">Healthcare/Medical Prof.</option>
                    <option value="Hospital News">Hospital News</option>
                    <option value="Internet - The Goldbook">Internet - The Goldbook</option>
                    <option value="Internet - Website">Internet - Website</option>
                    <option value="Internet - Google Search">Internet - Google Search</option> 
                    <option value="Irv Snitman LLB">Irv Snitman LLB</option>
                    <option value="Kozlowski">Kozlowski</option>
                    <option value="Krystyna Wilk">Krystyna Wilk</option>
                    <option value="Law Society">Law Society</option>
                    <option value="Lawyer.com">Lawyer.com</option>
                    <option value="Lawyer Locate">Lawyer Locate</option>
                    <option value="Lawyers Weekly">Lawyers Weekly</option>
                    <option value="Legal Aid">Legal Aid</option>
                    <option value="Lexpert Magazine">Lexpert Magazine</option>
                    <option value="London News">London News</option>
                    <option value="Mark Linett LLB">Mark Linett LLB</option>
                    <option value="Mark Alter LLB">Mark Alter LLB</option>
                    <option value="Max Berger LLB">Max Berger LLB</option>
                    <option value="Mississauga News">Mississauga News</option>
                    <option value="Motorcycle Mojo Magazine">Motorcycle Mojo Magazine</option>
                    <option value="Mount Sinai/Wasser Pain Clinic">Mount Sinai/Wasser Pain Clinic</option>
                    <option value="National Fire Adjusters">National Fire Adjusters</option>
                    <option value="National Post">National Post</option>
                    <option value="Newspaper">Newspaper</option>
                    <option value="Oakville Beaver Ad">Oakville Beaver Ad</option>
                    <option value="OMNI 1 - Television Ad">OMNI 1 - Television Ad</option>
                    <option value="OMNI 2 - Television Ad">OMNI 2 - Television Ad</option>
                    <option value="Ontario Brain Injury Association">Ontario Brain Injury Association</option>
                    <option value="Ontario Ombudsman">Ontario Ombudsman</option>
                    <option value="Ontario Reports Legal Directory">Ontario Reports Legal Directory</option> 
                    <option value="Orilla News">Orilla News</option>
                    <option value="Oshawa Billboard">Oshawa Billboard</option>
                    <option value="Oshawa Newspaper Ad">Oshawa Newspaper Ad</option>
                    <option value="Oshawa Transit Shelter">Oshawa Transit Shelter</option>
                    <option value="Other">Other</option> 
                    <option value="Outside Law Firm">Outside Law Firm</option>
                    <option value="Peterborough Yellow Pages">Peterborough Yellow Pages</option> 
                    <option value="Phil Patterson LLB">Phil Patterson LLB</option> 
                    <option value="Phone Directory">Phone Directory</option>
                    <option value="Polish Directory">Polish Directory</option>
                    <option value="Previous Client">Previous Client</option>
                    <option value="Radio Show">Radio Show</option>
                    <option value="Radio Station">Radio Station</option>
                    <option value="Spinal Cord Injury Ontario">Spinal Cord Injury Ontario</option>
                    <option value="Telelatino Televison Ad">Telelatino Televison Ad</option> 
                    <option value="Television">Television</option>
                    <option value="The Goldbook">The Goldbook</option>
                    <option value="The Litigator">The Litigator</option>
                    <option value="Tom David LLB">Tom David LLB</option>
                    <option value="Toronto Aquired Brain Injury Network">Toronto Aquired Brain Injury Network</option> 
                    <option value="Toronto Billboard">Toronto Billboard</option>
                    <option value="Toronto Star Newspaper">Toronto Star Newspaper</option> 
                    <option value="Toronto Sun Newspaper">Toronto Sun Newspaper</option>
                    <option value="Toronto Rehab">Toronto Rehab</option>
                    <option value="TV - Commercial">TV - Commercial</option>
                    <option value="TV - News Appearance">TV - News Appearance</option>
                    <option value="Unknown">Unknown</option>
                    <option value="Vietnamese Newspaper">Vietnamese Newspaper</option>
                    <option value="Word of Mouth">Word of Mouth</option>
                    <option value="Whitby Newspaper">Whitby Newspaper</option>
                    <option value="Yellow Pages">Yellow Pages</option>
                  </select>
              </div>
            </div>
            <div class="row">
              <div class="twelve columns">
                <input type="text" id="referralother" name="referralother" placeholder="Enter the Referral"  value="<?php if(isset($_POST['referralother'])) { echo htmlentities($_POST['referralother']); } ?>" style="display: none"/>
              </div>
            </div>
            <div class="row">
              <div class="twelve columns">
                <label for="lawyer">Lawyer:</label>
                <select name="lawyer" id="lawyer" placeholder="Enter Lawyer" value="<?php if(isset($_POST['lawyer'])) { echo htmlentities($_POST['lawyer']); } ?>">
                  <option value="Alfred M. Kwinter">Alfred M. Kwinter</option>
                  <option value="William A McMaster">William A McMaster</option>
                  <option value="Jason F. Katz">Jason F. Katz</option>
                  <option value="Jason D. Singer">Jason D. Singer</option>
                  <option value="Shane H. Katz">Shane H. Katz</option>
                  <option value="Veronica S. Marson">Veronica S. Marson</option>
                  <option value="Nga T. Dang">Nga T. Dang</option>
                  <option value="Shane Z. Kwinter">Shane Z. Kwinter</option>
                  <option value="Susan K. Dhaliwal">Susan K. Dhaliwal</option>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="twelve columns">
                <label for="type">Type of File:</label>
                <select name="type" id="type" placeholder="Enter Type of File" value="<?php if(isset($_POST['type'])) { echo htmlentities($_POST['type']); } ?>">
                  <option value="Assault">Assault</option>
                  <option value="Bicycle Accident">Bicycle Accident</option>
                  <option value="Civil Litigation">Civil Litigation</option>
                  <option value="Dog Bite">Dog Bite</option>
                  <option value="Fire Loss Claim">Fire Loss Claim</option>
                  <option value="Insurance">Insurance</option>
                  <option value="LTD Claim">LTD Claim</option>
                  <option value="Matrimonial">Matrimonial</option>
                  <option value="Medical Malpractice">Medical Malpractice</option>
                  <option value="Motorcycle Accident">Motorcycle Accident</option>
                  <option value="Motor Vehicle Accident">Motor Vehicle Accident</option>
                  <option value="Negligence">Negligence</option>
                  <option value="Occupiers' Liability">Occupiers' Liability</option>
                  <option value="Product Liability">Product Liability</option>
                  <option value="propertydamage">Property Damage</option>
                  <option value="Prospect">Prospect</option>
                  <option value="Slip and Fall Accident<">Slip and Fall Accident</option>
                  <option value="Theft">Theft</option>
                  <option value="Wrongful Dismissal">Wrongful Dismissal</option>
                  <option value="WSIB Claim">WSIB Claim</option>
                  <option value="Other">Other</option>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="twelve columns">
                <input type="text" id="typeother" name="typeother" placeholder="Enter the Type of File"  value="<?php if(isset($_POST['typeother'])) { echo htmlentities($_POST['typeother']); } ?>" style="display: none"/>
              </div>
            </div>
            <div class="row">
              <div class="twelve columns">
                <label for="dateofcontact">Date of Contact:</label>
                <input type="date" id="dateofcontact" name="dateofcontact" placeholder="Enter the date" value="<?php if(isset($_POST['dateofcontact'])) { echo htmlentities($_POST['dateofcontact']); } ?>" />
              </div>
            </div>
            <div class="row">
              <div class="twelve columns">
                <label for="formfilledby">Form Filled By:</label>
                <input type="text" id="formfilledby" name="formfilledby" placeholder="Enter your name" value="<?php if(isset($_POST['formfilledby'])) { echo htmlentities($_POST['formfilledby']); } ?>" />
              </div>
            </div>
            <div class="row">
              <div class="twelve columns">
                <label for="comments">Comments:</label>
                <textarea id="comments" name="comments" placeholder="Enter comments about the PNC" cols="40" value="<?php if(isset($_POST['comments'])) { echo htmlentities($_POST['comments']); } ?>"></textarea>
              </div>
            </div>
            <div class="row twelve columns">
                <input type="submit" value="Save PNC" />
            </div>   
         </fieldset>
      </form>

      <form name="reportreferral" action="report-referral.php" method="get">
      <fieldset>
        <div class="row twelve columns">
          <input type="submit" value="Generate Report by Referral & Type of File">
        </div>
      </fieldset>
      </form>
      
      <form name="reportdate" action="report-date.php" method="get">
      <fieldset>
        <div class="row twelve columns">
          <input type="submit" value="Generate Report by Date">
        </div>
      </fieldset>
      </form>

      <form name="search" action="index.php" method="get">
          <fieldset>
              <div class="row">
                  <a class="opensearch">Search <i class="fa fa-search-plus" aria-hidden="true"></i></a>
                  <div id="searchcon">
                    <label for="search">Search by last name:</label>
                    <input type="text" id="search" name="search" placeholder="Search by last name" dir="ltr" />
                    <input type="submit" value="Search" /><br />
                  </div>
                  <?php
                         //initialization at the top

                         //connect to database
                         $conn = mysqli_connect("localhost", "root", "", "intake_form");
                        //check if connection failed
                         if(mysqli_connect_errno()) { 
                          echo "Failed to connect: " . mysqli_connect_error();
                         }
                  ?>

                  <?php
                    //error_reporting(0);

                    $output = '';

                    //if the text box isn't empty and space isn't empty run this
                    if(isset ($_GET['search']) && $_GET['search'] !== '') { 
                      $search = $_GET['search'];

                      $s = mysqli_query($conn, "SELECT * FROM intake_data WHERE user_lastname LIKE '%$search%'") OR die(mysqli_error());
                      $c = mysqli_num_rows($s);

                      if($c == 0) { 
                        $output = 'No search results for <strong>"' . $search . '"</strong>';
                      } else { 
                        while ($row = mysqli_fetch_array($s)) {

                          $first = $row['user_firstname'];
                          $last = $row['user_lastname'];
                          $comment = $row['user_comment']; 
                          $id = $row['id'];

                          $output .= '
                                <div class="row">
                                <strong>' . $first .' ' .  $last .'</strong> <i class="fa fa-pencil" aria-hidden="true"></i><br />
                                </div>
                                
                                <form action="index.php" method="post" enctype="multipart/form-data">
                                  <fieldset>
                                    <div class="row">
                                    <textarea id="commentu" name="commentu" value="' . $comment . '" cols="40">'. $comment .'</textarea><br />      
                                    <input type="hidden" name="hidden" value="' . $id . '" />
                                    <input type="submit" name="update" value="Update ' . $first .' ' .  $last . ' Record" /><br />
                                    </div>
                                  </fieldset>
                                </form>';
                          }
                        }
                      }
                  ?>
                 
              </div>
          </fieldset>
      </form> 
        <?php
           print("$output");
           //write updates to comments to database 
           if(isset ($_POST['update'])) { 
              $updatecom = $_POST['commentu']; 
              $comfix = mysqli_real_escape_string($conn, $updatecom);   
              
              $updated = mysqli_query($conn, "UPDATE intake_data SET user_comment='$comfix' WHERE id='$_POST[hidden]'") or die("The comment for has not been updated."); 
              //$up = mysqli_real_escape_string($conn, $updated);

              if ($updated) { 
                print ("The update was successful!");
              }

            }

          mysqli_close($conn); 
        ?>
      </div>
    </div>
  </div>

  <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="js/main.js"></script>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>

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
                die ("Please enter your first name");
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