<?php
//define('DB_SERVER','localhost');
//define('DB_USER','root');
//define('DB_PASS' ,'');
//define('DB_NAME', 'holidaysout');
$dbh = new PDO('mysql:host=localhost;dbname=holidaysout', 
'root', '');
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



// mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
//if (mysqli_connect_errno())
//{
 //echo "Failed to connect to MySQL: " . mysqli_connect_error();
//}
?>