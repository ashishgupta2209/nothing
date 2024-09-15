<?php
$servername = "localhost"; // or your database server address
$username = "root"; // your database username
$password = ""; // your database password
$dbname = "feedback"; // your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$name = $_POST['name'];
$class = $_POST['class'];
$feedback = $_POST['feedback'];

// Prepare and execute SQL statement
$sql = "INSERT INTO user_feedback (name, class, feedback) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $name, $class, $feedback);

if ($stmt->execute()) {
    header("Location: /TotNewmyReivisehtdocs/blogpost/blog_post.php?success=1");
} else {
    header("Location: /TotNewmyReivisehtdocs/blogpost/blog_post.php?success=0");
}

// Close connection
$stmt->close();
$conn->close();
