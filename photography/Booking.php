<?php
session_start(); // Start the session

include 'database.php';

// Check if the user has already booked an appointment for the selected date
function hasAppointmentForDate($email, $booking_date, $conn) {
    $sql = "SELECT * FROM booking WHERE email = ? AND booking_date = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $booking_date);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $stmt->close();
    return ($row !== null);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $service = $_POST['service'];
    $service_type = $_POST['service_type'];
    $booking_date = $_POST['booking_date'];

    // Check if the user has already booked an appointment for the selected date
    if (hasAppointmentForDate($email, $booking_date, $conn)) {
        echo "<script>alert('You have already booked an appointment for this date.')</script>";
        exit; // Stop further execution
    }

    // User is allowed to book appointment
    $sql = "INSERT INTO booking (name, email, service, service_Type, booking_date) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        die("Error: " . $conn->error);
    }

    // Bind parameters
    $stmt->bind_param("sssss", $name, $email, $service, $service_type, $booking_date);

    if ($stmt->execute()) {
        echo "<script>alert('Booking Successful!')</script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>