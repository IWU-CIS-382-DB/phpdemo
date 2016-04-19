<!DOCTYPE html>
<html>
    <head>
        <title>MySQL Server Show Data</title>
    <link rel="stylesheet" href="php_styles.css" type="text/css" />
    </head>
    <body>
    <h1>MySQL Server Show Data</h1>        

<?php
    $database="demo";
    $DBConnect = mysqli_connect("localhost","root","");
    mysqli_select_db($DBConnect,$database) or die( "Unable to select database");
    $query = "SELECT * from Contacts";
    $QueryResult = @mysqli_query($DBConnect,$query)
    or die("<p>Unable to execute query</p>" . ":" . mysqli_errno($DBConnect) . ":" . mysqli_error($DBConnect));
    

    echo "<table width='100%' border = '1'>";
    echo "<tr><th>ID</th><th>Last</th><th>First</th><th>Phone</th></tr>";
    $Row = mysqli_fetch_assoc($QueryResult);
   do {
        echo "<tr><td>{$Row['id']}</td>";
        echo "<td>{$Row['last']}</td>";
        echo "<td>{$Row['first']}</td>";
        echo "<td>{$Row['phone']}</td></tr>";
        $Row = mysqli_fetch_assoc($QueryResult);
   } while($Row);
    
    
    mysqli_close($DBConnect);

?>
  </body>

</html>

