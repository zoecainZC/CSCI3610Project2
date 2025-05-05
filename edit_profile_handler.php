<?php
session_start();
header('Content-Type: application/json');

try {
    if (!isset($_SESSION["studentID"])) {
        throw new Exception('User not logged in');
    }

    if ($_SERVER["REQUEST_METHOD"] !== "POST") {
        throw new Exception('Invalid request method');
    }

    $input = json_decode(file_get_contents('php://input'), true);
    if (!$input) {
        throw new Exception('Invalid JSON input');
    }

    $email = filter_var(trim($input['email'] ?? ''), FILTER_SANITIZE_EMAIL);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        throw new Exception('Invalid email format');
    }

    $phone = filter_var(trim($input['phone'] ?? ''), FILTER_SANITIZE_STRING);
    if (empty($phone)) {
        throw new Exception('Phone number is required');
    }

    $password = $input['password'] ?? null;

    $conn = new mysqli("localhost:3307", "root", "", "tutoringdb");
    if ($conn->connect_error) {
        throw new Exception('Database connection failed: ' . $conn->connect_error);
    }

    $sql = "UPDATE students SET email = ?, phone = ?";
    $types = "ss";
    $params = [$email, $phone];

    if (!empty($password)) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $sql .= ", password = ?";
        $types .= "s";
        $params[] = $hashedPassword;
    }

    $sql .= " WHERE studentID = ?";
    $types .= "s";
    $params[] = $_SESSION["studentID"];

    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        throw new Exception('Failed to prepare statement: ' . $conn->error);
    }

    $stmt->bind_param($types, ...$params);
    if (!$stmt->execute()) {
        throw new Exception('Failed to execute statement: ' . $stmt->error);
    }

    $_SESSION["emaill"] = $email;
    $_SESSION["phone"] = $phone;

    echo json_encode(['success' => true, 'message' => 'Profile updated successfully'], JSON_UNESCAPED_UNICODE);
} catch (Exception $e) {
    echo json_encode(['success' => false, 'message' => $e->getMessage()]);
} finally {
    if (isset($stmt)) $stmt->close();
    if (isset($conn)) $conn->close();
}
?>