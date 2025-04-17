<?php

$data = json_decode(file_get_contents('php://input'), true);
$name = $data['name'];
$email = $data['email'];
$phone = $data['phone'];


file_put_contents("user_data.txt", json_encode($data));
echo "User info saved!";
?>