<?php
// Pre-defined admin credentials
$adminName = 'admin';
$password = 'password123'; // Please replace this with your actual hashed password

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the submitted admin name and password match the pre-defined admin credentials
    if ($_POST['Aname'] === $adminName && $_POST['psw'] === $password) {
        // Authentication successful, redirect to admin panel or perform any other action
        header("Location: admin/index.php");
        exit;
    } else {
        // Authentication failed, display error message
        $error = "Invalid admin name or password.";
        echo "<script>alert('invalid user and password')</script>";
    }
}
?>