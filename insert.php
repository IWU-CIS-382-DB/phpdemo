<?php

$username="dkneuma";
$password="";
$database="Contact";

$first=$_POST['first'];
$last=$_POST['last'];
$phone=$_POST['phone'];
$mobile=$_POST['mobile'];
$fax=$_POST['fax'];
$email=$_POST['email'];
$web=$_POST['web'];

$database="demo";
$DBConnect = mysqli_connect("localhost","root","");
mysqli_select_db($DBConnect,$database) or die( "Unable to select database");

$query = "INSERT INTO Contacts VALUES ('','$first','$last','$phone','$mobile','$fax','$email','$web')";
$QueryResult = @mysqli_query($DBConnect,$query)
    or die("<p>Unable to execute query</p>" . ":" . mysqli_errno($DBConnect) . ":" . mysqli_error($DBConnect));
    
echo "<p>Data Inserted</p>";
mysqli_close($DBConnect);
?>
