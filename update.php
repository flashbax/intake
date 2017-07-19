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
     //Update query 
      print "hello";
      
      if(isset($_POST['update'])) { 
            $update = $_POST['update'];
            $sql = "UPDATE intake_data SET name='commentu' WHERE id='$_POST[id]'";
            
            
            //execute query
            if (mysqli_query($conn, $sql)) { 
                  header("refresh:1; url=index.php"); 
            } else { 
                  print "Not Updated";
            }
      }
?>