<?php
include 'db_config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $jobName = $_POST['Job_name'];
    $jobOfferer = $_POST['job_offerer'];
    $offererNumber = $_POST['Offerer_number'];
    $cities = isset($_POST['city']) ? implode(', ', $_POST['city']) : "";
    $age = $_POST['age'];
    $description = $_POST['Description'];

    // Prepare and execute SQL query to insert the data into the database
    $stmt = $conn->prepare("INSERT INTO job_listing (job_name, job_offerer, offerer_number, cities, age, description) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $jobName, $jobOfferer, $offererNumber, $cities, $age, $description);
    $stmt->execute();

    // Close the database connection
    $stmt->close();
    $conn->close();

    // Redirect the user to details.php to display the job details
    header("Location: details.php");
    exit();
}
?>
