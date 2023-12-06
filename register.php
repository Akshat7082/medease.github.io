<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hackathon";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// retreive data
    $name = $_POST["name"];
    $gender = $_POST["gender"];
    $email = $_POST["email"];
    $aadhar = $_POST["aadhar"];
    $mobile = $_POST["mobile"];
    $username = $_POST["username"];
    $password = $_POST["password"];
   // $repassword = $_POST["re-password"];

    // Perform basic form validation (you should add more validation)
   /* if (empty($name) || empty($email) || empty($password) || $password != $repassword) {
        echo "Form fields are empty or passwords do not match.";
    } */

// SQL query to insert user data into the 'users' table
$sql = "INSERT INTO registration (patient_name, gender, email_address, aadhar_number, mobile_number, username, password) VALUES (?, ?, ?, ?, ?, ?, ?)";

// Prepare the statement
$stmt = $conn->prepare($sql);

// Bind parameters to the statement
$stmt->bind_param("ssssiss", $name, $gender, $email, $aadhar, $mobile, $username, $password);

// Execute the statement
if ($stmt->execute()) {
    echo "Registration successful!";
    // Redirect to a thank you page or login page
    // header("Location: thank_you.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the statement and connection
$stmt->close();
$conn->close();

?>