<?php
$host='localhost';
$username='root';
$password='';
$database='portal';
($GLOBALS["___mysqli_ston"] = mysqli_connect($host, $username, $password));
mysqli_select_db($GLOBALS["___mysqli_ston"], $database);
 ?>