<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container-fluid">
   <div class="row">
   		<div class="col-md-12 well">
   			<?php
                if(isset($_GET['submit']))
                {
                    ?>
                    
                    <div class="alert alert-success text-center">
                      <strong>Success!</strong>
                      </div>
                      
                    <h1>USER INFORMATION</h1>
                      <p style="color: red">Candidate's Name:</p>
                      <?php
                      echo $Candidatefirstname=$_GET['Candidatefirstname'];
                      echo $Candidatelastname=$_GET['Candidatelastname'];
                      ?>
                      <br><br>
                      <p style="color: red">Mother's Name:</p>
                      <?php
                      echo $Mother'sFirstname=$_GET['Mother'sFirstname'];
                      echo $Mother'sLastname=$_GET['Mother'slastname'];
                      ?>
                      <br><br>
                      <p style="color: red">Father's Name:</p>
                      <?php
                      echo $Father'sfirstname=$_GET['Father'sfirstname'];
                      echo $Fatherlastname=$_GET['Father'slastname'];
                      ?>
                      <br><br>
                      <p style="color: red">Email Address:</p>
                      <?php
                      echo $EmailId=$_GET['EmailId'];
                      ?>
                      <br><br>
                      <p style="color: red">Phone Number:</p>
                      <?php
                      echo $Number=$_GET['Number'];
                      ?>
                      <br><br>
                      <p style="color: red">Permanent Address:</p>
                      <?php
                      echo $Area=$_GET['Area'];
                      ?>
                      <br><br>
                      <p style="color: red">City Name:</p>
                      <?php
                      echo $City=$_GET['City'];
                      ?>
                      <br><br>
                      <p style="color: red">District Name:</p>
                      <?php
                      echo $District=$_GET['District'];
                      ?>
                      <br><br>
                      <p style="color: red">Pin Number:</p>
                      <?php
                      echo $Pin-Code=$_GET['Pin-Code'];
                      ?>
                      <br><br>
                       <p style="color: red">Gender:</p>
                      <?php
                      echo $Gender=$_GET['Gender'];
                      ?>
                      <br><br>
                      <p style="color: red">Father's Occupation:</p>
                      <?php
                      echo $Occupation=$_GET['Occupation'];
                      ?>
                      <br><br>
                      <p style="color: red">Mother's Occupation:</p>
                      <?php
                      echo $Occupation=$_GET['Occupation'];
                      ?>
                      <br><br>
                       <p style="color: red">Annual Income:</p>
                      <?php
                      echo $Income=$_GET['Income'];
                } ?>
                      <br><br>
                       <?php 
                           $dbhost = 'localhost';
                           $dbuser = 'guest';
                           $dbpass = 'guest123';
                           $dbname = 'user_details';
                           $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
                           if(! $conn ) {
                               die('Could not connect: ' . mysqli_error());
                           }
                           echo 'Connected successfully<br>';
                           
                           
                           
                           $sql = "INSERT INTO User_Info
                            (User_id,Candidate_First_Name, Candidate_Last_Name, Mother_First_Name, Mother_Last_Name	, Father_First_Name, Father_Last_Name,Email_Id,	Phone_Number,Area_Name,City_Name, District_Name,Pin_Number,	GENDER,	Father_Occupation,Mother_Occupation,Annual_Income)" 
                            "VALUES"
                            ('', '$candidatefirst_name', '$candidatelast_name', '$Motherfirst_name', '$Motherlast_name', '$Fatherfirst_name','$Fatherlast_name','$EmailId','$Number','$Area','$City','$District','$Pin-Code','$Gender','$Occupation',$Occupation','$Income')";
                           if(mysqli_query($conn, $sql)){
                               echo "Records inserted successfully.";
                           } else{
                               echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                           }
                           
                           // Close connection
                           mysqli_close($conn);
                           
                           ?>
                      </div>
                      </div>
                      </div>
                      </body>
                      </html>