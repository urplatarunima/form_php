<html>
   <head>
      <title>Connecting MySQL Server</title>
   </head>
   <body>
      <?php
         $dbhost = 'localhost';
         $dbuser = 'guest';
         $dbpass = 'guest123';
         $dbname = 'user_details';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
         if(! $conn ) {
            die('Could not connect: ' . mysql_error());
         }
         echo 'Connected successfully';
         mysqli_close($conn);
      ?>
   </body>
</html>