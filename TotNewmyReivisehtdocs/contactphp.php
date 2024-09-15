<?php
    // Database connection details
    $servername = "localhost"; // Replace with your server name
    $username = "root"; // Replace with your database username
    $password = ""; // Replace with your database password
    $dbname = "contact"; // Replace with your database name

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form data
        $name = $_POST['name'];
        $email = $_POST['email'];

        // Prepare the SQL statement
        $stmt = $conn->prepare("INSERT INTO contact_db (name, email) VALUES (?, ?)");
        $stmt->bind_param("ss", $name, $email); // "ss" indicates the types (string, string)

        // Execute the SQL statement
        if ($stmt->execute()) {
            echo "Contact information saved successfully!";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the statement and the connection
        $stmt->close();
        $conn->close();
    }
    ?>