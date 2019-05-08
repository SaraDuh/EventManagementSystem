<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'eventdb'; //database name
$con = mysqli_connect($servername, $username, $password, $dbname); // Create connection
mysqli_set_charset($con,'UTF8');
if (!$con) { // Check connection
    die("Connection failed: " . mysqli_connect_error());
}
$db = mysqli_select_db($con,$dbname); //select eventdb database
if(!$db) {
die("Unable to select database");
} // Connection.
?>