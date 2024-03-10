<?php

$databasehost = "localhost";
$username = "id21661453_islandexplorer";
$password = "G!V3me@break";
$database = "id21661453_islandexplorer";

$conn = new mysqli($databasehost, $username, $password, $database);

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

$query = "SELECT * FROM bookings";
$result = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Bookings</title>
</head>
<body>
    <table align="center" border="1px" style="min-width: 600px; line-height: 40px">
        <tr>
            <th colspan="10"><h1>Bookings</h1></th>
        </tr>
        <tr>
            <th>Visitor ID</th>
            <th>Visitor Name</th>
            <th>Visitor Email</th>
            <th>Tour Package</th>
            <th>Days</th>
            <th>Total Adults</th>
            <th>Total Children</th>
            <th>Category</th>
            
            <th>Notes</th>
        </tr>

        <?php while($rows=mysqli_fetch_assoc($result)) 
		{ 
		?> 
		<tr>
            <td><?php echo $rows['visitor_id']; ?></td> 
		    <td><?php echo $rows['visitor_name']; ?></td> 
		    <td><?php echo $rows['visitor_email']; ?></td>
            <td><?php echo $rows['tour_package_selection']; ?></td>
            <td><?php echo $rows['days']; ?></td>
            <td><?php echo $rows['total_adults']; ?></td>
            <td><?php echo $rows['total_children']; ?></td>
            <td><?php echo $rows['category_selection']; ?></td>
            
            <td><?php echo $rows['additional_notes']; ?></td>
		</tr> 
	<?php 
               } 
        $conn->close();
          ?> 
    </table>
</body>
</html>