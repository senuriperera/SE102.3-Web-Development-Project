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

    // Use prepared statements to insert data into the database
    $stmt = $conn->prepare("INSERT INTO bookings (visitor_id, visitor_name, visitor_email, tour_package_selection, days, total_adults, total_children, category_selection, accommodation_selection, additional_notes) 
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    // Bind parameters to the prepared statement
    $stmt->bind_param("ssssiiisss", $visitor_id, $visitor_name, $visitor_email, $tour_package_selection, $days, $total_adults, $total_children, $category_selection, $accommodation_selection, $additional_notes);

    // Execute the prepared statement
    if ($stmt->execute()) {
        header("Location: booking.php");
        echo "Record added successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the prepared statement
    $stmt->close();
}

// Close the database connection
$conn->close();
