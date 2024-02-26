<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = ""; // Assuming no password is set
$database = "att";

// Establishing a connection to MySQL
$conn = new mysqli($servername, $username, $password, $database);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the form
$full_name = $_POST['full_name'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$faculty = $_POST['faculty'];

// SQL query to insert data into the admin table
$sql_insert = "INSERT INTO admin (full_name, username, password, email, phone, faculty) 
               VALUES ('$full_name', '$username', '$password', '$email', '$phone', '$faculty')";

// Execute the SQL query
if ($conn->query($sql_insert) === TRUE) {
    echo "New record inserted successfully.";
    echo "<audio autoplay><source src='sound/yes.mp3' type='audio/mpeg'></audio>";

        // Output JavaScript to perform the redirection after audio has finished playing
        echo "<script>";
        echo "setTimeout(function() { window.location.href = 'admin.html'; }, 2000);"; // Redirect after 2000 milliseconds (2 seconds)
        echo "</script>";
} else {
    echo "Error: " . $sql_insert . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
