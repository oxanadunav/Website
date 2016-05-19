<?php
   $dbhost = 'localhost:8080';
   $dbuser = 'root';
   $dbpass = '26081995';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);

   $username=$_POST['username'];
   $email=$_POST['email'];

   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }else {
	$db_select = mysql_select_db("test",$conn); 
   if (!$db_select) { 
       die("Database selection failed:: " . mysql_error()); 
   } 
   
   }
   
   $sql = 'INSERT INTO employee '.
      '(username, email) '.
      'VALUES ( "'.$username.'", "'.$email.'")';
      
  
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not enter data: ' . mysql_error());
   }
   
   echo "Entered data successfully\n";
   
   mysql_close($conn);
?>
