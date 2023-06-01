<?php
include "db_config.php";

$sql = "SELECT * FROM cv_upload";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details2</title>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        .card-header {
            background-image: url('./images/background.jpg'); 
            background-size:cover;
        }
        
    </style>
</head>
<body style="background-image: url('images/background.jpg');">
    <div class="container my-5 mx-auto">
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $cv = $row["cv"];
                $birthdate = $row["birthdate"];
                $place_of_birth = $row["place_of_birth"];
                $profession = $row["profession"];
                $phone_number = $row["number"];
                $education_level = $row["education_level"];
        ?>
        <div class="card mb-5">
            <div class="card-header text-white mb-3">
                Details
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-8">
                        <br>
                        <table class="table table-bordered table-hover">
                            <tbody>
                                <tr>
                                    <th scope='row'>Date of birth</th>
                                    <td><?php echo htmlspecialchars($birthdate); ?></td>
                                </tr>
                                <tr>
                                    <th scope='row'>Place of birth</th>
                                    <td><?php echo htmlspecialchars($place_of_birth); ?></td>
                                </tr>
                                <tr>
                                    <th scope='row'>Profession</th>
                                    <td><?php echo htmlspecialchars($profession); ?></td>
                                </tr>
                                <tr>
                                    <th scope='row'>Phone number</th>
                                    <td><?php echo htmlspecialchars($phone_number); ?></td>
                                </tr>
                                <tr>
                                    <th scope='row'>Education level</th>
                                    <td><?php echo htmlspecialchars($education_level); ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-4">
                        <div class="row justify-content-end">
                            <div class="col-6">
                                <?php if ($cv) { ?>
                                    <a href="uploads/<?php echo htmlspecialchars($cv); ?>" download>
                                        <img src="images/placeholder.png" alt="Download CV" style="cursor:pointer;">
                                    </a>
                                <?php } else { ?>
                                    <img src="images/placeholder.png" alt="No CV uploaded">
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="user_cv_and_info.php" class="btn btn-outline-dark">Go back</a>
        </div>
        <?php
            }
        } else {
            echo "<p class='text-white'>0 results</p>";
        }
        ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="main.js"></script>
</body>
</html>

<?php
$conn->close();
?>
