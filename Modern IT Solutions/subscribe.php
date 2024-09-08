<?php
// Include the database connection file
include('db_connect.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check if email is provided
    if (isset($_POST['email'])) {
        // Sanitize and retrieve the email from the form
        $email = mysqli_real_escape_string($conn, $_POST['email']);

        // Validate the email format
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Prepare the SQL query to insert the email
            $sql = "INSERT INTO newsletter_subscribers (email) VALUES ('$email')";

            // Execute the query
            if (mysqli_query($conn, $sql)) {
                // Success: Redirect or show success message
                echo "<script>alert('Thank you for subscribing!');</script>";
                echo "<script>window.location.href = 'index.php';</script>";
            } else {
                // Display error if the email is already subscribed or insertion failed
                echo "<script>alert('This email is already subscribed or there was an error.');</script>";
            }
        } else {
            echo "<script>alert('Please enter a valid email address.');</script>";
        }
    } else {
        echo "<script>alert('Email field cannot be empty.');</script>";
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
