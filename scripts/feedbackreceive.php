<?php

$databasehost = "";
$username = "";
$password = "";
$database = "";

$conn = new mysqli($databasehost, $username, $password, $database);

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO feedback VALUES ('$name','$email','$message')";

    if ($conn->query($sql) == TRUE) {
        header("Location: message-received.html");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();

?>
