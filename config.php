<?php
########## MySql details #############
$username = "root"; //mysql username
$password = "root"; //mysql password
$hostname = "localhost:8889"; //hostname
$databasename = 'spesa'; //databasename

//connect to database
$mysqli = new mysqli($hostname, $username, $password, $databasename);

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

?>