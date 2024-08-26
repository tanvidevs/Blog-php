<?php
$servername = "localhost";
$username = "root";  // replace with your database username
$password = "";  // replace with your database password
$dbname = "blog_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, title, content, created_at FROM posts ORDER BY created_at DESC";
$result = $conn->query($sql);

$posts = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $posts[] = $row;
    }
}

$conn->close();
?>