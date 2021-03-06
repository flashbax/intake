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
  <link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One" rel="stylesheet">
  <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">

   <!-- JS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
  <script type="text/javascript" src="js/search.js"></script>
  <script type="text/javascript" src="js/val.js"></script>

  
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
        
        
        <form id="form" name="form" method="post" onsubmit="return validate()">
         <fieldset>
            <div class="row">
              <div class="twelve columns">
                <label for="firsttname">First Name: <span style="color:red;" id="firstnameerror"></span></label>
                
                <input type="text" id="firstname" name="firstname" placeholder="Enter first name" value="<?php if(isset($_POST['firstname'])) { echo htmlentities($_POST['firstname']); } ?>" />
              </div>
            </div>
            <div class="row">
              <div class="twelve columns">
                <label for="lastname">Last Name: <span style="color:red;" id="lastnameerror"></span></label>
                <input type="text" id="lastname" name="lastname" placeholder="Enter last name" value="<?php if(isset($_POST['lastname'])) { echo htmlentities($_POST['lastname']); } ?>" />
              </div>
            </div>
            <div class="row">
              <div class="twelve columns">
                <label for="phone">Phone: <span style="color:red;" id="phoneerror"></label>
                <input type="text" maxlength="10" id="phone" name="phone" placeholder="Enter phone number" value="<?php if(isset($_POST['phone'])) { echo htmlentities($_POST['phone']); } ?>" />
              </div>
            </div>
            
            <div class="row">
              <div class="twelve columns">
                <label for="referral">Referral Source: <span style="color:red;" id="referralothererror"></label>
                  <select name="referral" id="referral" placeholder="Enter referral" value="<?php if(isset($_POST['referral'])) { echo htmlentities($_POST['referral']); } ?>">
                    <option value="Select the Referral">Select the Referral</option>
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
                  <option value="Select the Lawyer">Select the Lawyer</option>
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
                <label for="type">Type of File: <span style="color:red;" id="typeothererror"></label>
                <select name="type" id="type" placeholder="Enter Type of File" value="<?php if(isset($_POST['type'])) { echo htmlentities($_POST['type']); } ?>">
                  <option value="Select the File Type">Select the File Type</option>
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
                <label for="dateofcontact">Date of Contact: <span style="color:red;" id="dateofcontacterror"></label>
                <input type="date" id="dateofcontact" name="dateofcontact" placeholder="Enter the date" value="<?php if(isset($_POST['dateofcontact'])) { echo htmlentities($_POST['dateofcontact']); } ?>" />
              </div>
            </div>
            <div class="row">
              <div class="twelve columns">
                <label for="formfilledby">Form Filled By: <span style="color:red;" id="formfilledbyerror"></label>
                <input type="text" id="formfilledby" name="formfilledby" placeholder="Enter your name" value="<?php if(isset($_POST['formfilledby'])) { echo htmlentities($_POST['formfilledby']); } ?>" />
              </div>
            </div>
            <div class="row">
              <div class="twelve columns">
                <label for="comments">Comments: <span style="color:red;" id="commentserror"></label>
                <textarea id="comments" name="comments" placeholder="Enter comments about the PNC" cols="40" value="<?php if(isset($_POST['comments'])) { echo htmlentities($_POST['comments']); } ?>"></textarea>
              </div>
            </div>
            <div class="row">
              <div class="twelve columns">
                <label for="email">Email Form To:</label>
                <select name="email" id="email" placeholder="Select Email Address" value="<?php if(isset($_POST['email'])) { echo htmlentities($_POST['email']); } ?>">
                  <option value="jkwitco@gmail.com">jkwitco@gmail.com</option>
                </select>
              </div>
            </div>
            <div class="row twelve columns">
                <input type="submit" name="send" value="Save PNC" />
            </div>   
         </fieldset>
      </form>
      <a class="openreport">Reports <i class="fa fa-table" aria-hidden="true"></i></a>
        <div id="reportcon">
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

           <form name="reportlawyer" action="report-lawyer.php" method="get">
            <fieldset>
            <div class="row twelve columns">
              <input type="submit" value="Generate Report by Lawyer">
            </div>
          </fieldset>
          </form>

           <form name="reportlawyertype" action="report-lawyer-type.php" method="get">
            <fieldset>
            <div class="row twelve columns">
              <input type="submit" value="Generate Report by Lawyer & Type of File">
            </div>
          </fieldset>
          </form>

          <form name="reportretained" action="report-retained.php" method="get">
            <fieldset>
            <div class="row twelve columns">
              <input type="submit" value="Generate Report by Retained or Not Retained">
            </div>
          </fieldset>
          </form>
      </div>
      
      <form name="search" action="index.php" method="get">
          <fieldset>
              <div class="row">
                <a class="opensearch">Search <i class="fa fa-search-plus" aria-hidden="true"></i></a>
                <div id="searchcon">
                    <label for="search">Search by last name:</label>
                    <input type="text" id="search" name="search" placeholder="Search by last name" dir="ltr" />
                    <input type="submit" value="Search" id="searchbutton" /><br />
                </div> <!-- Search open close tag-->
                  
                  
                  <?php
                         //initialization at the top
                         //connect to database
                         $conn = mysqli_connect("justinkwitco.netfirmsmysql.com", "newuser99", "newuser99", "intake_form");
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
                          $retained = $row['user_retained'];

                          $output .= ' 
                                <div class="row">
                                <button data-id="updaterecord' . $id . '">' . $first .' ' .  $last .'<i data-id="updaterecord" class="fa fa-pencil" aria-hidden="true"></i></button><br />
                                </div>
                                <div class="row">
                                <div id="updaterecord' . $id . '" class="updaterecord updaterecord-hidden">
                                  <form action="index.php" method="post" enctype="multipart/form-data">
                                    <fieldset>
                                      <div class="row">
                                      <textarea id="commentu" name="commentu" value="' . $comment . '" cols="40">'. $comment .'</textarea><br />      
                                      <input type="hidden" name="hidden" value="' . $id . '" />
                                      <input type="submit" name="update" value="Update ' . $first .' ' .  $last . ' Comment" /><br />
                                      </div>
                                    </fieldset>
                                  </form>

                                  <form action="index.php" method="post" enctype="multipart/form-data">
                                    <fieldset>
                                      <div class="row">
                                      <select name="retain">
                                        <option>Currently: ' . $retained . '</option> 
                                        <option>Not Retained</option> 
                                        <option>Retained</option> 
                                      </select>
                                      <input type="hidden" name="hidden" value="' . $id . '" />
                                      <input type="submit" name="updateretain" value="Update Client Status"><br />
                                      </div>
                                    </fieldset>
                                  </form>
                               </div></div>';
                         
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
               print ("The comment update was successful!");
              }

            }

            if(isset ($_POST['updateretain'])) { 
              $updateret = $_POST['retain']; 
              $retfix = mysqli_real_escape_string($conn, $updateret);   
              
              $updatedret = mysqli_query($conn, "UPDATE intake_data SET user_retained='$retfix' WHERE id='$_POST[hidden]'") or die("The status of the client has not been updated."); 
              //$up = mysqli_real_escape_string($conn, $updated);

              if ($updatedret) { 
               print ("The status of the client has been updated successfully!");
              }

            }

          mysqli_close($conn); 
        ?>

      </div>
    </div>
  </div>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->


</body>
</html>



   