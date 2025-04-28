<?php
// login.php

// Dummy credentials
$valid_username = "admin";
$valid_password = "123456";

// Start processing the form
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = trim($_POST['password'] ?? '');

    if ($username == $valid_username && $password == $valid_password) {
        // Successful login, redirect to dashboard
        header("Location: dashboard.php");
        exit();
    } else {
        // Invalid login

        echo "<h3 style='color:red;'>Invalid username or password</h3>";
        echo "<a href='login.html'>Try again</a>";
    }
}
