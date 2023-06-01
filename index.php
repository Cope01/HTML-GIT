<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>JobListing</title>
</head>
<body>
<header>
    <div class="index_body_header_div">
        <ul class="nav nav-pills justify-content-between">
            <li class="nav-item">
                <a class="nav-link text-white" href="index.html">Job listings</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="login_form.html">Sign in</a>
            </li>
        </ul>
    </div>

    <div class="body_header_div2">
        <nav>
            <a class="navbar-brand text-white">Job listings</a> 
            <br> 
            <br> 
            <form class="mt-5" method="post">
                <div class="mb-3">
                    <div class="d-flex">
                        <input type="text" class="form-control" name="criterium" placeholder="Search..." aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-outline-light" type="submit">Search</button>
                        </div>
                    </div>
                </div> 
            </form> 
        </nav> 
    </div> 
</header>
<div class="container">
    <h1 id="za-poslodavce">Job Offers</h1>
</div>
<main>
    <div class="container my-5 mx-auto">
        <?php
        include 'db_config.php';

        $sql = "SELECT * FROM job_listing ORDER BY id DESC";
        $result = $conn->query($sql);

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
                        <a href="job_upload_form.php" class="btn btn-outline-dark">Sign up for a job</a>
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
    </div>
</main>
<footer class="text-white">
    <p>About us: <br>Some example text Some example text Some example text</p>
    <p>Contact: <br>Some example text Some example text Some example text</p>
    <p>Follow us: <br>Some example text Some example text Some example text</p>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
