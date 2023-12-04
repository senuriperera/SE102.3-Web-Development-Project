<?php
include_once 'db.php';

// Get user input from the form
if (isset($_POST["submit"])) {
    $visitor_id = $_POST['visitor_id'];
    $visitor_name = $_POST['visitor_name'];
    $visitor_email = $_POST['visitor_email'];
    $tour_package_selection = $_POST['tour_package_selection'];
    $days = $_POST['days'];
    $total_adults = $_POST['total_adults'];
    $total_children = $_POST['total_children'];
    $category_selection = $_POST['category_selection'];
    $accommodation_selection = $_POST['accommodation_selection'];
    $additional_notes = $_POST['additional_notes'];

    // Insert the data into the database
    $sql = "INSERT INTO bookings (visitor_id, visitor_name, visitor_email, tour_package_selection, days, total_adults, total_children, category_selection, accommodation_selection, additional_notes) 
        VALUES ('$visitor_id', '$visitor_name', '$visitor_email', '$tour_package_selection', $days, $total_adults, $total_children, '$category_selection', '$accommodation_selection', '$additional_notes')";

    if ($conn->query($sql) === TRUE) {
        header("Location: booking.php");
        echo "Record added successfully";
        echo $accommodation_selection;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
