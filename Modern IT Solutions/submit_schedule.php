<?php
// Start the session if needed
session_start();

// Include database connection file (if any)
include('db_connect.php'); // Example file name for database connection

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Insert form data into the database
    $sql = "INSERT INTO schedules (name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";
    
    if (mysqli_query($conn, $sql)) {
        // Success! Redirect to home.php
        echo "<script>alert('Schedule submitted successfully! Redirecting to Home...');</script>";
        echo "<script>window.location.href = 'index.php';</script>";
        exit();
    } else {
        // Handle database error
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close the connection
    mysqli_close($conn);
}
?>
