<?php
// Start a session
// session_start();

// // Check if the user is not logged in, redirect to login.php
// if (!isset($_SESSION['DoctorID'])) {
//     header("Location: login.php");
//     exit();
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Appointments</title>
    <link rel="icon" href="imgs/drcare.ico" type="image/x-icon">
    <style>
        table td,
        table th {
            vertical-align: middle;
            text-align: right;
            padding: 20px !important;
        }
    </style>
</head>

<body>
    <div class="container my-4">
        <?php
        // Linking Database.php
        include_once 'db.php';

        // Get the DoctorID from $_SESSION['DoctorID']
        // $doctorID = $_SESSION['DoctorID'];
        // Showing All the Diagnosis and Medications relavant to the Patient
        ?>
        <header class="d-flex justify-content-between my-4">

            <h1>Welcome</h1>

            <h2>Booking Appointment List</h2>
            <div>
                <a href="" class="btn btn-primary">Logout</a>
            </div>
            <div>

            </div>
        </header>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>reservation_date</th>
                    <th>Visitor Id/Passport</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Tour Package</th>
                    <th>No of Days</th>
                    <th>Total Adults</th>
                    <th>Total Children</th>
                    <th>Additional Notes</th>
                </tr>
            </thead>
            <tbody>

                <?php



                $sqlSelect = "SELECT * FROM bookings ORDER BY reservation_date DESC";
                $result = mysqli_query($conn, $sqlSelect);
                while ($data = mysqli_fetch_array($result)) {
                ?>
                    <tr>
                        <td><?php echo $data['reservation_date']; ?></td>
                        <td><?php echo $data['visitor_id']; ?></td>
                        <td><?php echo $data['visitor_name']; ?></td>
                        <td><?php echo $data['visitor_email']; ?></td>
                        <td><?php echo $data['tour_package_selection']; ?></td>
                        <td><?php echo $data['days']; ?></td>
                        <td><?php echo $data['total_adults']; ?></td>
                        <td><?php echo $data['total_children']; ?></td>
                        <td><?php echo $data['additional_notes']; ?></td>


                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>