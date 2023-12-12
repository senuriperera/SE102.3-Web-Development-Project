<?php

$databasehost = "";
$username = "";
$password = "";
$database = "";

$conn = new mysqli($databasehost, $username, $password, $database);

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

$query = "SELECT * FROM contactTable";
$result = mysql_query($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Messages</title>
</head>
<body>
    <table align="center" border="1px" style="min-width: 600px; line-height: 40px">
        <tr>
            <th colspan="4"><h1>Messages</h1></th>
        </tr>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>
        </tr>

        <?php while($rows=mysql_fetch_assoc($result)) 
		{ 
		?> 
		<tr>
            <td><?php echo $rows['name']; ?></td> 
		    <td><?php echo $rows['email']; ?></td> 
		    <td><?php echo $rows['message']; ?></td>
		</tr> 
	<?php 
               } 
        $conn->close();
          ?> 
    </table>
</body>
</html>