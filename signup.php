<?php
// Database credentials
$servername = "127.0.0.1:3307";
$username = "root";
$password = "";
$dbname = "freelancer";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Collect and sanitize form inputs
    $email = isset($_POST['email']) ? trim($_POST['email']) : null;
    $password = isset($_POST['password']) ? trim($_POST['password']) : null;

// Use prepared statement to prevent SQL injection
if (!empty($email) && !empty($password)) {
    // Prepare and execute the SQL statement
    $stmt = $conn->prepare("INSERT INTO user
        (email,password) 
        VALUES (?, ?)");

    if (!$stmt) {
        echo json_encode(array("status_code" => 500, "msg" => "Error preparing statement: " . $conn->error));
        exit;
    }

    $stmt->bind_param(
        "ss",
        $email, $password
    );

    if ($stmt->execute()) {
        echo json_encode(array("status_code" => 200, "msg" => "Form submitted successfully!"));
    } else {
        echo json_encode(array("status_code" => 500, "msg" => "Database execution error: " . $stmt->error));
    }
    $stmt->close();
} else {
    echo json_encode(array("status_code" => 400, "msg" => "Invalid input: email and password cannot be empty."));
}
}

$conn->close();
?>
