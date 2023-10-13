<?php
// Assuming you have already established a database connection
$servername = "localhost"; // Change this to your database server name if different
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "florist"; // Replace with your database name
$table_name = "contact_messages"; // Replace with your table name

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data and sanitize it (you can add further validation if required)
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $subject = htmlspecialchars($_POST["subject"]);
    $message = htmlspecialchars($_POST["message"]);

    // Insert the form data into the database
    $sql = "INSERT INTO $table_name (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

    if ($conn->query($sql) === TRUE) {
        // Successfully inserted into the database
        echo "Your message has been sent. Thank you!";
    } else {
        // Error inserting into the database
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
