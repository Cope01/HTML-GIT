<?php
include 'db_config.php';
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM job_listing WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $cities = explode(',', $row['cities']);
} else {
    header('Location: job_upload_form.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Job creation</title>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body id="job_upload_form">
    <div class="form-container">
        <h1>Job creation</h1>
        <form method="post" id="job_form" action="update_job.php" onsubmit="return validateForm();">

            <div class="form-group">
                <label for="exampleFormControlInput1">Job name</label>
                <input type="text" name="Job_name" class="form-control" id="exampleFormControlInput1" pattern="[A-Za-z]+" placeholder="Job name" value="<?php echo htmlspecialchars($row['job_name']); ?>" required>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput2">Job offerer</label>
                <input type="text" name="job_offerer" class="form-control" id="exampleFormControlInput2" placeholder="Company name" value="<?php echo htmlspecialchars($row['job_offerer']); ?>" required>    
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput3">Offerer number</label>
                <input type="text" name="Offerer_number" class="form-control" id="exampleFormControlInput3" placeholder="123-456-789" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}" value="<?php echo htmlspecialchars($row['offerer_number']); ?>" required>
            </div>
            <div class="form-group">
                <label>Select City:</label>
                <br>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="city[]" value="maribor" <?php echo in_array("maribor", $cities) ? 'checked' : ''; ?>>
                        Maribor
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="city[]" value="ljubljana" <?php echo in_array("ljubljana", $cities) ? 'checked' : ''; ?>>
                        Ljubljana
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="city[]" value="celje" <?php echo in_array("celje", $cities) ? 'checked' : ''; ?>>
                        Celje
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="city[]" value="koper" <?php echo in_array("koper", $cities) ? 'checked' : ''; ?>>
                        Koper
                    </label>
                </div>
            </div>

            <br>
            <div class="form-group">
                <label for="exampleFormControlInput1">Required age:</label>
                <br>
                <div class="radio">
                    <label>
                        <input type="radio" name="age" value="18-24" <?php echo $row['age'] === '18-24' ? 'checked' : ''; ?> required>
                        18-24
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="age" value="25-44" <?php echo $row['age'] === '25-44' ? 'checked' : ''; ?> required>
                        25-44
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="age" value="45+" <?php echo $row['age'] === '45+' ? 'checked' : ''; ?> required>
                        45+
                    </label>
                </div>
                <br>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Description</label>
                    <textarea class="form-control" name="Description" id="exampleFormControlTextarea1" placeholder="Some description of the job" rows="4" required><?php echo htmlspecialchars($row['description']); ?></textarea>
                </div>
                <br>
                <input type="hidden" name="id" value="<?php echo $id; ?>"> <!-- Pass the id of the record being edited -->
                <button type="submit" class="btn btn-outline-dark">Submit</button>
            </div>
        </form>
    </div>
    <script src="main.js"></script>
</body>
</html>
