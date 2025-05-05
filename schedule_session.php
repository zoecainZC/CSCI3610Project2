<?php
session_start();
header('Content-Type: application/json');

// Check if the user is logged in
if (!isset($_SESSION["studentID"])) {
    echo json_encode(["success" => false, "message" => "You must be logged in to schedule a session."]);
    exit;
}

// Validate the request method
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    echo json_encode(["success" => false, "message" => "Invalid request method."]);
    exit;
}

// Get the JSON input
$data = json_decode(file_get_contents("php://input"), true);

// Validate input fields
if (empty($data["date"]) || empty($data["time"]) || empty($data["subject"])) {
    echo json_encode(["success" => false, "message" => "All required fields must be filled out."]);
    exit;
}

// Sanitize input
$date = htmlspecialchars($data["date"]);
$time = htmlspecialchars($data["time"]);
$subject = htmlspecialchars($data["subject"]);
$notes = isset($data["notes"]) ? htmlspecialchars($data["notes"]) : null;

// Database connection
$conn = new mysqli("localhost:3307", "root", "", "tutoringdb");

// Check connection
if ($conn->connect_error) {
    echo json_encode(["success" => false, "message" => "Database connection failed: " . $conn->connect_error]);
    exit;
}

// Prepare and execute the SQL query
$studentID = $conn->real_escape_string($_SESSION["studentID"]);
$stmt = $conn->prepare("INSERT INTO sessions (studentID, date, time, subject, notes) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("issss", $studentID, $date, $time, $subject, $notes);

if ($stmt->execute()) {
    echo json_encode(["success" => true, "message" => "Session scheduled successfully!", "sessionID" => $stmt->insert_id]);
} else {
    echo json_encode(["success" => false, "message" => "Failed to schedule session: " . $stmt->error]);
}

$stmt->close();
$conn->close();
?>
