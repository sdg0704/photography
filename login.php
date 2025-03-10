<?php
session_start();
include 'database.php';

if(isset($_POST['submit'])) 
{
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];

    // Corrected SQL query string
    $sql = "SELECT * FROM registration WHERE Username='$Username' AND Password='$Password'";
    $que = mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($que) > 0)
    {   
		
			$_SESSION['name'] = $row['name'];
			$_SESSION['Username'] = $row['Username'];
            echo "<script>alert('login success')</script>";
        echo "<script>window.open('user/index.php','_self')</script>";
    }
    else
    {
        $err_msg =  "<script>alert('Invalid username or password')</script>";
    }

    {
        $err_msg =  "<script>alert('Some Error Occurred')</script>";
    }
    }

?>