<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === 'islandAdmin' && $password === 'explorer') {
        header('Location: adminDashboard.html');
        exit();
    } else {
        echo "Incorrect Password";
    }
}
?>