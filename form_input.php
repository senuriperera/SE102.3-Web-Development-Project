<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "island_explorer";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape user inputs for security
    $visitor_id = mysqli_real_escape_string($conn, $_POST['visitor_id']);
    $visitor_name = mysqli_real_escape_string($conn, $_POST['visitor_name']);
    $visitor_email = mysqli_real_escape_string($conn, $_POST['visitor_email']);
    $tour_package_selection = isset($_POST['tour_package_selection']) ? mysqli_real_escape_string($conn, $_POST['tour_package_selection']) : '';
    $days = mysqli_real_escape_string($conn, $_POST['days']);
    $total_adults = mysqli_real_escape_string($conn, $_POST['total_adults']);
    $total_children = mysqli_real_escape_string($conn, $_POST['total_children']);
    
    // Check if category_selection is set before using implode
    $category_selection = isset($_POST['category_selection']) ? implode(', ', $_POST['category_selection']) : '';
    
    // Use category_selection to get the corresponding accommodation_selection
    $accommodation_selection = isset($_POST[$category_selection]) ? mysqli_real_escape_string($conn, $_POST[$category_selection]) : '';
    
    $additional_notes = isset($_POST['visitor_message']) ? mysqli_real_escape_string($conn, $_POST['visitor_message']) : '';

    // SQL query to insert data into the table
    $sql = "INSERT INTO bookings (visitor_id, visitor_name, visitor_email, tour_package_selection, days, total_adults, total_children, category_selection, accommodation_selection, additional_notes) VALUES ('$visitor_id', '$visitor_name', '$visitor_email', '$tour_package_selection', '$days', '$total_adults', '$total_children', '$category_selection', '$accommodation_selection', '$additional_notes')";

    if ($conn->query($sql) === TRUE) {
        echo "Reservation added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>