<?php
include "db_config.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $birthdate = $_POST['birthdate'];
    $place_of_birth = $_POST['exampleFormControlInput1'];
    $profession = $_POST['exampleFormControlInput2'];
    $phone_number = $_POST['Offerer_number'];
    $education_level = $_POST['education_level'];

    $cv_name = $_FILES['cv']['name'];
    $cv_size = $_FILES['cv']['size'];
    $cv_tmp = $_FILES['cv']['tmp_name'];
    $cv_type = $_FILES['cv']['type'];

    move_uploaded_file($cv_tmp,"uploads/".$cv_name);

    $sql = "INSERT INTO cv_upload (cv, birthdate, place_of_birth, profession, number, education_level) VALUES ('$cv_name', '$birthdate', '$place_of_birth', '$profession', '$phone_number', '$education_level')";

    if ($conn->query($sql) === TRUE) {
        header('Location: details2.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Informations</title>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body id="cv_and_info">
    <div class="container">
        <div class="form-container">
            <h1>Info on your profile</h1>
            <br><br>
            <form method="post" action="user_cv_and_info.php" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="cv">Upload your CV</label>
                    <br>
                    <input id="cv" type="file" name="cv" class="form-control-file" label="" required>
                </div>
                <br>
                <div class="form-group">
          <label for="birthdate">Date of birth</label>
          <br>
          <input id="birthdate" type="date" name="birthdate" class="form-control-file" required>
        </div>

                <br>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Place of birth</label>
                    <br>
                    <input id="exampleFormControlInput1" type="text" name="exampleFormControlInput1" class="form-control-file" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="exampleFormControlInput2">Profession</label>
                    <br>
                    <input id="exampleFormControlInput2" type="text" name="exampleFormControlInput2" class="form-control-file" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="exampleFormControlInput3">Your number</label>
                    <input type="text" name='Offerer_number' class="form-control" id="exampleFormControlInput3" placeholder="123-456-789" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}" required>
                </div>
                <br>

                <div class="form-group">
          <label for="education_level">Level of education</label>
          <br>
          <select id="education_level" name="education_level" class="form-control" required>
            <option value="">Select one</option>
            <option value="no_school">No school</option>
            <option value="primary_school">Primary school</option>
            <option value="high_school">High school</option>
            <option value="faculty">Faculty</option>
            <option value="doctorate">Doctorate</option>
          </select>
        </div>
        <br>
        <button type="submit" class="btn btn-outline-dark">Submit</button>
      </form>
        </div>
    </div>
    <script src="main.js"></script>
</body>

</html>
