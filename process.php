<?php
// Check if the form is submitted

    // Retrieve form data
    $date = $_POST["date"];
    $category = $_POST["category"];
    $time = $_POST["time"];
    $hospital = $_POST["hospital"];

    // Perform any necessary validation here

    // Process the data (for example, you can store it in a database)
    // Replace this with your database logic
    // Assuming you have a MySQL database connection:
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

    // Insert the data into a table (replace 'your_table_name' with your actual table name)
    $sql = "INSERT INTO appointment (date, disease_category, appoint_time, hospital_name)
            VALUES ('$date', '$category', '$time', '$hospital')";

    if ($conn->query($sql) === TRUE) {
        echo "Appointment submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

?>
