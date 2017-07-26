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
        <form action="process.php" method="post" enctype="multipart/form-data">
         <fieldset>
            <div class="row">
              <div class="twelve columns">
                <label for="name">First Name:</label>
                <input type="text" id="firstname" name="firstname" placeholder="Enter first name" />
              </div>
            </div>
            <div class="row">
              <div class="twelve columns">
                <label for="email">Last Name:</label>
                <input type="text" id="lastname" name="lastname" placeholder="Enter last name" />
              </div>
            </div>
            <div class="row">
              <div class="twelve columns">
                <label for="email">Phone:</label>
                <input type="text" id="phone" name="phone" placeholder="Enter phone number" />
              </div>
            </div>
            
            <div class="row">
              <div class="twelve columns">
                <label for="refferal">Referral Source:</label>
                  <select name="referral" id="referral" placeholder="Enter referral">
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
                    <option value="Canada 4111">Canada 411</option>
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
                <label for="lawyer">Lawyer:</label>
                <select name="lawyer" id="lawyer" placeholder="Enter Lawyer">
                  <option value="Alfred M. Kwinter">Alfred M. Kwinter</option>
                  <option value="William A McMaster">William A McMaster</option>
                  <option value="Jason F. Katz">Jason F. Katz</option>
                  <option value="Jason D. Singer">Jason D. Singer</option>
                  <option value="Shane H. Katz">Shane H. Katz</option>
                  <option value="Veronica S. Marson">Veronica S. Marson</option>
                  <option value="Nga T. Dang">Nga T. Dang</option>
                  <option value="Susan ">Shane Z. Kwinter</option>
                  <option value="Susan K. Dhaliwal">Susan K. Dhaliwal</option>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="twelve columns">
                <label for="type">Type of File:</label>
                <select name="type" id="type" placeholder="Enter Type of File">
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
                <label for="dateofcontact">Date of Contact:</label>
                <input type="date" id="dateofcontact" name="dateofcontact" placeholder="Enter the date" />
              </div>
            </div>
            <div class="row">
              <div class="twelve columns">
                <label for="formfilledby">Form Filled By:</label>
                <input type="text" id="formfilledby" name="formfilledby" placeholder="Enter your name" />
              </div>
            </div>
            <div class="row">
              <div class="twelve columns">
                <label for="comments">Comments:</label>
                <textarea id="comments" name="comments" placeholder="Enter comments about the PNC" cols="40"></textarea>
              </div>
            </div>
            <div class="row twelve columns">
                <input type="submit" value="Save PNC" />
                <input type="reset" value="Reset">
            </div>   
         </fieldset>
      </form>

      <form name="search" action="report.php" method="get">
      <fieldset>
        <div class="row twelve columns">
          <input type="submit" value="Admin">
        </div>
      </fieldset>
      </form>
        
      <form name="search" action="index.php" method="get">
          <fieldset>
              <div class="row">
                  <label for="search">Search by last name:</label>
                  <input type="text" id="search" name="search" placeholder="Search by last name" dir="ltr" />
                  <input type="submit" value="Search" /><br />
              
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
              
              $updated = mysqli_query($conn, "UPDATE intake_data SET user_comment='$_POST[commentu]' WHERE id='$_POST[hidden]'") or die("The comment for has not been updated."); 
              
              if ($updated) { 
                print ("The update was successful!");
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


