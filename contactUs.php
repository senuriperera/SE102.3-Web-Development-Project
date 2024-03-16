<?php

$databasehost = "localhost";
$username = "id21661453_islandexplorer";
$password = "G!V3me@break";
$database = "id21661453_islandexplorer";

$conn = new mysqli($databasehost, $username, $password, $database);

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contactTable VALUES ('$name','$email','$message')";

    if ($conn->query($sql) == TRUE) {
        header("Location: message-received.html");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();

?>