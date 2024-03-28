<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mytest";

// Create connection
$conn = new mysqli("localhost","root","","mytest");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the database
$sql = "SELECT * FROM user";
$result = $conn->query($sql);

// Display data in HTML table
if ($result->num_rows > 0) {
    echo "<table 'border=2'><tr><th>Id</th><th>Email</th><th>Password</th><th>creationdate</th><th>is_activated</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["email"] . "</td><td>" . $row["password"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

// Close connection
$conn->close();
?>