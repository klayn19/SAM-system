<?php
$host = "sql301.infinityfree.com";
$user = "if0_43021378";
$pass = "lrZKDUvgN8yE";
$db   = "if0_43021378_SAM_SYSTEM";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>