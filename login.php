<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Perform user authentication (replace with your authentication logic)
    if ($username === "your_username" && $password === "your_password") {
        // Successful login, redirect to a dashboard or welcome page
        header("Location: dashboard.html");
        exit();
    } else {
        // Failed login, display an error message
        echo "Login failed. Please check your username and password.";
    }
}
?>
