<?php
// Start the session
session_start();

// Include the database connection file
include 'database.php';

// Check if the form is submitted
if(isset($_POST['Username']) && isset($_POST['Email']) && isset($_POST['Password']) && isset($_POST['Number']) && isset($_POST['City'])) {
    // Retrieve form data
    $Username = $_POST['Username'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
    $Number = $_POST['Number'];
    $City = $_POST['City'];

    // Insert the user into the database
    $sql = "INSERT INTO registration (Username, Email, Password, Number, City) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $Username, $Email, $Password, $Number, $City);

    // Check for errors in preparing the statement
    if($stmt === false) {
        die('Error in preparing statement: ' . $conn->error);
    }

    // Execute the statement
    if ($stmt->execute()) {
        // Set session variable to indicate successful registration
        $_SESSION['registered'] = true;
        // Display JavaScript alert
        echo "<script>alert('Registration Successful!')</script>";
    } else {
        // Error in execution
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the database connection
$conn->close();
?>