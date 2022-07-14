<?php
$dbhost='localhost';
$dbuser ='root';
$dbpassword ='root';
$dbdatabase= 'buyn';

$mysqli = new mysqli($dbhost, $dbuser, $dbpassword, $dbdatabase);

// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}

// Print host information
echo "Connect Successfully. Host info: " . $mysqli->host_info;
?>
