<!DOCTYPE html>
<html>

<head>
    <title>InfoStud</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <?php
    include_once("./php/database.php");
    session_start();
    if (!isset($_SESSION['ime']) || !isset($_SESSION['prezime']) || !isset($_SESSION['email']) || !isset($_SESSION['role'])) {
        header("Location: index.php");
        exit;
    }
    ?>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="position: fixed; top: 0; width: 100%; z-index:3;">
        <a class="navbar-brand" href="indexlog.php"><span style="color: #E2016A;">I</span><span style="color: #053488;">nfoStud</span><span style="color: #E2016A; font-size: 30px;">.</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item boja">
                    <a class="nav-link" id="poslodavci" href="prijave.php" style="color: #053488;">Pregledaj prijave</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="profile.php" id="za-poslodavce" style="color: #E2016A;"><i class="fas fa-user"></i> <?php echo $_SESSION["role"] ?>, <?php echo $_SESSION["ime"] ?> <?php echo $_SESSION["prezime"] ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="za-poslodavce" href="./php/logout.php" style="color: #E2016A;">Odjavite se</a>
                </li>
            </ul>
        </div>
    </nav>
    <section class='top-page' style="background-image: url('./img/background.jpg'); background-size:cover;">
        <div class="container">
            <div class="row">
                <h1>Najveći izbor oglasa za posao na jednom mestu<span>.</span></h1>
            </div>
            <div class="row">
                <p>2723 oglasa za posao, 1652 kompanije</p>
            </div>
            <div class="row">
                <form class="mt-5" action="" method="post">
                    <div class="input-group mb-3 d-flex justify-content-center">
                        <input type="text" class="form-control" name="criterium" placeholder="Pretraga" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-outline-light" type="submit">Pretrazi</button>
                        </div>
                    </div>
                    </select>
            </div>

            </form>
        </div>
        </div>
    </section>
    <?php
    if (isset($_REQUEST["success"])) {
        switch ($_REQUEST["success"]) {
            case 1:
                echo '<div class="alert alert-success" role="alert">';
                echo "Korisnik prijavljen";
                echo '</div>';
                break;
            case 2:
                echo '<div class="alert alert-success" role="alert">';
                echo "User logging out";
                echo '</div>';
                break;
            case 3:
                echo '<div class="alert alert-success" role="alert">';
                echo "Uspesno ste se prijavili za posao";
                echo '</div>';
                break;
            case 4:
                echo '<div class="alert alert-success" role="alert">';
                echo "Uspesno ste dodali informacije";
                echo '</div>';
                break;
            case 5:
                echo '<div class="alert alert-success" role="alert">';
                echo "Uspesno ste promenili sifru";
                echo '</div>';
                break;
        }
    }
    if (isset($_REQUEST["error"])) {
        switch ($_REQUEST["error"]) {
            case 1:
                echo '<div class="alert alert-danger" role="alert">';
                echo "Doslo je do greske";
                echo '</div>';
                break;
            case 2:
                echo '<div class="alert alert-danger" role="alert">';
                echo "Vec ste uneli podatke o sebi";
                echo '</div>';
                break;
        }
    }
    ?>
    <section id="main">
        <div class="container">
            <h1 class="nav-link" id="za-poslodavce" style="color: #053488;"><span style="color: #E2016A;">I</span>staknuti <span style="color: #E2016A;">P</span>oslodavci<span style="color: #E2016A;">.</span></h1>
            <?php
            require_once './php/database.php';
            $input = isset($_POST['criterium']) ? $_POST['criterium'] : "";
            $query = "SELECT * FROM poslovi WHERE CONCAT(poslodavac, ime_posla, grad,oblast_rada, opis, email_poslodavca) LIKE '%$input%'";
            $posao = getAllDataByQuery($query);
            foreach ($posao as $poslovi) {
                echo "<div class='card'>";
                echo "<div class='card-header white-text'>" . $poslovi['poslodavac'] . "</div><div class='card-body'>";
                echo "<h5 class='card-title'>" . $poslovi['ime_posla'] . ", " . $poslovi['grad'] . "</h5>";
                echo "<p class='card-text'>" . $poslovi['opis'] . "</p>";
                echo "<p class='card-text'>" . $poslovi['email_poslodavca'] . "</p>";
                echo "<p class='card-text'>" . $poslovi['vreme_objave'] . "</p>";
                echo "<a href='./php/notifyp.php?id=" . $poslovi['id'] . "' class='btn btn-outline-dark'>Prijavi se</a></div>
        </div><br>";;
            }
            ?>
        </div>
    </section>
    <section id="footer" style="background-image: url('./img/background.jpg'); color:white;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-3 color:white">
                    <h3>About Us</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor, magna euismod malesuada faucibus, augue magna tincidunt leo, id viverra magna erat at risus.</p>
                </div>
                <div class="col-sm-12 col-md-3 color:white">
                    <h3>Contact Us</h3>
                    <ul>
                        <li>Phone: 555-555-5555</li>
                        <li>Email: info@example.com</li>
                        <li>Address: 123 Main St, Anytown USA</li>
                    </ul>
                </div>
                <div class="col-sm-12 col-md-3">
                    <h3>Follow Us</h3>
                    <ul class="social-icons">
                        <li><a href="twitter.com"><i class="fab fa-twitter-square color:white"> Twitter</i></a></li>
                        <li><a href="instagram.com"><i class="fab fa-instagram-square color:white"> Instagram</i></a></li>
                        <li><a href="facebook.com"><i class="fab fa-facebook-square color:white"> Facebook</i></a></li>
                    </ul>
                </div>
                <div class="col-sm-12 col-md-3">
                    <h3>Promena sifre</h3>
                    <div>
                        <ul>
                            <li>
                                <a class="nav-link" id="notifications" href="./changepass.php" style="color: #053488;"><i class="fas fa-user-tie">Promenite sifru</i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://kit.fontawesome.com/b246e96d93.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.16.6/dist/umd/popper.min.js" integrity="sha384-3u3mG4aJZ1Yjl5BvhMb9SVgS8O1JKlHp+xzLwVc+KfZOcH+bq3Z9+O1r0TtTjKGz" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="./script/script.js"></script>
</body>

</html>