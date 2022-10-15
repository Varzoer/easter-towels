<?php
$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "30ab9Q--S~Ta9tkhhcxa52L";
$dBName = "easter_towels";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
die('Connection failed: ' . mysqli_connect_error());
}