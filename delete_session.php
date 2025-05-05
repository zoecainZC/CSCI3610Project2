<?php
session_start();
header('Content-Type: application/json');

if (!isset($_SESSION["emaill"])) {
    echo json_encode(['success' => false, 'message' => 'Not logged in']);
    exit;
}

if (!isset($_GET["sessionID"])) {
    echo json_encode(['success' => false, 'message' => 'No session ID provided']);
    exit;
}

$conn = new mysqli("localhost:3307", "root", "", "tutoringdb");

if ($conn->connect_error) {
    echo json_encode(['success' => false, 'message' => 'Database connection failed']);
    exit;
}

$sessionID = $conn->real_escape_string($_GET["sessionID"]);
$sql = "DELETE FROM sessions WHERE sessionID = '$sessionID'";

if ($conn->query($sql) === TRUE) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'message' => $conn->error]);
}

$conn->close();
?>