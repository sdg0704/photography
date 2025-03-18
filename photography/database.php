<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$database = "photography"; 
$conn = new mysqli($servername, $username, $password, $database);
if(!$conn)
{
    die("error detected".mysqli_error($conn));
}
?>