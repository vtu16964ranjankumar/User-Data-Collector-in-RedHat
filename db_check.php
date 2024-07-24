<?php
$config = [
    'servername' => '192.168.119.203',
    'username' => 'udc',
    'password' => '123'
];

// Create connection
$conn = new mysqli($config['servername'], $config['username'], $config['password']);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";
?>

