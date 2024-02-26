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

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve username and password from the login form
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // Prepare SQL statement to retrieve admin with provided username and password
    $sql = "SELECT * FROM admin WHERE username = '$user' AND password = '$pass'";
    $result = $conn->query($sql);

    // Check if a row was returned
    if ($result->num_rows > 0) {
        echo "<audio autoplay><source src='sound/yes.mp3' type='audio/mpeg'></audio>";

        // Output JavaScript to perform the redirection after audio has finished playing
        echo "<script>";
        echo "setTimeout(function() { window.location.href = 'menu.html'; }, 2000);"; // Redirect after 2000 milliseconds (2 seconds)
        echo "</script>";

        exit;
    } else {
        // Display error message and option to login again
        echo "<div style='text-align: center;'>";
        echo "<p style='color: red; font-weight: bold; font-size: 240px;'>Access Denied</p>";
        echo "<audio autoplay><source src='sound/error.mp3' type='audio/mpeg'></audio>";
        echo "<p style='color: green; font-weight: bold; font-size: 36px;'><a href='admin.html' style='text-decoration: none;'>Login Again</a></p>";
        echo "</div>";
        
    }
}
?>
