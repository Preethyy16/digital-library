<?php
header('Content-Type: application/json');  // Set the content type to JSON
$response = array(
    "message" => "Hello from PHP!",
    "status" => "success"
);
echo json_encode($response);  // Convert the array to JSON and send it
?>
