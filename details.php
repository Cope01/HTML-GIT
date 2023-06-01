<?php
include 'db_config.php';

// Deleting a record
if(isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    $delete_sql = "DELETE FROM job_listing WHERE id=?";
    $stmt = $conn->prepare($delete_sql);
    $stmt->bind_param("i", $delete_id);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "Record with ID: $delete_id has been deleted.";
    } else {
        echo "An error occurred.";
    }
}

$sql = "SELECT * FROM job_listing ORDER BY id DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job details</title>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $jobName = htmlspecialchars($row['job_name']);
        $jobOfferer = htmlspecialchars($row['job_offerer']);
        $offererNumber = htmlspecialchars($row['offerer_number']);
        $cities = htmlspecialchars($row['cities']);
        $age = htmlspecialchars($row['age']);
        $description = htmlspecialchars($row['description']);
        $createdAt = htmlspecialchars($row['created_at']);
?>
    <div class="container my-5 mx-auto">
        <div class="card mb-5">
            <div class="card-header text-white mb-3">
                Job details
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-8">
                        <table class="table table-bordered table-hover">
                            <tbody>
                                <tr>
                                    <th scope="row">Job name</th>
                                    <td><?php echo $jobName; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Job offerer</th>
                                    <td><?php echo $jobOfferer; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Offerer number</th>
                                    <td><?php echo $offererNumber; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">City</th>
                                    <td><?php echo $cities; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Required age</th>
                                    <td><?php echo $age; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Description</th>
                                    <td><?php echo $description; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Created at</th>
                                    <td><?php echo $createdAt; ?></td>
                                </tr>
                            </tbody>
                        </table>
                        <a href="job_upload_form.php" class="btn btn-outline-dark">Go back</a>
                        <a href="?delete_id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
                        <a href="edit_job_form.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
    }
} else {
    echo "No job details available.";
}

$conn->close();
?>
</body>
</html>
