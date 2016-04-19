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
    echo "<p>MySQL client version " . mysqli_get_client_info() . "</p>";
   
    echo "<p>MySQL Connection " . mysqli_get_host_info($DBConnect) . "</p>";
    echo "<p>MySQL protocol version " . mysqli_get_proto_info($DBConnect) . "</p>";
    echo "<p>MySQL server version " . mysqli_get_server_info($DBConnect) . "</p>";
    
     
    
    
    
    mysqli_close($DBConnect);

?>
  </body>

</html>

