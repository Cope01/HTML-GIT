<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "JobListing";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get form data
    $name = $_POST['ime'];
    $surname = $_POST['prezime'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $user_type = $_POST['user_type'];

    // Insert data into the database
    $sql = "INSERT INTO users (name, surname, email, password, user_type) VALUES ('$name', '$surname', '$email', '$password', '$user_type')";

    if ($conn->query($sql) === TRUE) {
        header('Location: login_form.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
