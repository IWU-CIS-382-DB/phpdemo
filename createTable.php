<!DOCTYPE html>
<html>
    <head>
        <title>MySQL Server Information</title>
    <link rel="stylesheet" href="php_styles.css" type="text/css" />
    </head>
    <body>
    <h1>MySQL Server Information</h1>        

<?php
    $database="demo";
    $DBConnect = mysqli_connect("localhost","root","");
    mysqli_select_db($DBConnect,$database) or die( "Unable to select database");
    $query="CREATE TABLE Contacts (id int(6) NOT NULL auto_increment,first varchar(15) NOT NULL,last varchar(15) NOT NULL,phone varchar(20) NOT NULL,mobile varchar(20) NOT NULL,fax varchar(20) NOT NULL,email varchar(30) NOT NULL,web varchar(30) NOT NULL,PRIMARY KEY (id),UNIQUE id (id),KEY id_2 (id))";
    mysqli_query($DBConnect, $query);
    mysqli_close($DBConnect);
?>
  </body>

</html>

