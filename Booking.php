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
    $visitor_id = $_POST['visitor_id'];
    $visitor_name = $_POST['visitor_name'];
    $visitor_email = $_POST['visitor_email'];
    $tour_package_selection = $_POST['tour_package_selection'];
    $days = $_POST['days'];
    $total_adults = $_POST['total_adults'];
    $total_children = $_POST['total_children'];
    $category_selection = $_POST['category_selection'];
    $accommodation_selection = $_POST['accommodation_selection'];
    $additional_notes = $_POST['visitor_message'];

    $sql = "INSERT INTO bookings VALUES ('$visitor_id','$visitor_name','$visitor_email','$tour_package_selection','$days','$total_adults','$total_children','$category_selection','$accommodation_selection','$additional_notes')";

    if ($conn->query($sql) == TRUE) {
        header("Location: booking-updated.html");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();

?>