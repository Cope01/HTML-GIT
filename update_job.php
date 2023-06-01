<?php
include 'db_config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $jobName = $_POST['Job_name'];
    $jobOfferer = $_POST['job_offerer'];
    $offererNumber = $_POST['Offerer_number'];
    $cities = implode(',', $_POST['city']);
    $age = $_POST['age'];
    $description = $_POST['Description'];

    $update_sql = "UPDATE job_listing SET job_name=?, job_offerer=?, offerer_number=?, cities=?, age=?, description=? WHERE id=?";
    $stmt = $conn->prepare($update_sql);
    $stmt->bind_param("ssssssi", $jobName, $jobOfferer, $offererNumber, $cities, $age, $description, $id);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        header('Location: details.php?id=' . $id);
        exit;
    } else {
        echo "An error occurred.";
    }
}
?>
