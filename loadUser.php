<?php
// example data 
header('Content-Type: application/json');
echo json_encode([
  "name" => "John Doe",
  "email" => "john@example.com",
  "phone" => "123-456-7890",
  "sessions" => [
    ["title" => "Intro to Python", "date" => "2025-04-20", "time" => "10:00 AM"],
    ["title" => "Web Dev Basics", "date" => "2025-04-22", "time" => "2:00 PM"]
  ]
]);
?>