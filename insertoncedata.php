<!DOCTYPE html>
<html>
    <head>
        <title>MySQL Server Insert ONCE Data</title>
    <link rel="stylesheet" href="php_styles.css" type="text/css" />
    </head>
    <body>
    <h1>MySQL Server Insert Once Data</h1> 
    <h2>Caution: Loading this page more than once will duplicate data.</h2>

<?php
    $database="demo";
    $DBConnect = mysqli_connect("localhost","root","");  mysqli_select_db($DBConnect,$database) or die( "Unable to select database");
    $query = "INSERT INTO Contacts VALUES ('','John','Smith','01234 567890','00112 334455','01234 567891','johnsmith@gowansnet.com','http://www.gowansnet.com')";
    $QueryResult = mysqli_query($DBConnect,$query)
    or die("<p>Unable to execute query</p>" . ":" . mysqli_errno($DBConnect) . ":" . mysqli_error($DBConnect));
    
  mysqli_close($DBConnect);

?>
  </body>

</html>

