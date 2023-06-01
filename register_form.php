<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Sign up</title>
</head>

<body id="register_form">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="nav-link text-black" href="index.html">Job listings</a>
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
    <div class="form-container">
        <h1>Registration</h1>
        <form action="register.php" method="POST">
            <div class="form-row">
                <div class="col">
                    <label for="exampleFormControlInput1">Name</label>
                    <input type="text" name="ime" class="form-control" placeholder="Petar" required>
                </div>
                <div class="col">
                    <label for="exampleFormControlInput1">Surname</label>
                    <input type="text" name="prezime" class="form-control" placeholder="Petrovic" required>
                </div>
            </div>
            <br>
            <div class="form-group">
                <label for="exampleFormControlInput1">Email address</label>
                <input type="email" name='email' class="form-control" placeholder="name@example.com">
            </div>
            <br>
            <div class="form-row">
                <div class="col">
                    <label for="inputPassword4">Password</label>
                    <input type="password" name="password" class="form-control"placeholder="Password" required>
                </div>
                <div class="col">
                    <label for="inputPassword4">Confirm password</label>
                    <input type="password" name="passwordre" class="form-control"placeholder="Confirm Password" required>
                </div>
            </div>
            <br>
            <div class="form-group">
                <label for="type_of_signup">Type of sign up</label>
                <select class="form-control" id="type_of_signup" name="user_type">
                    <option value="User">User</option>
                    <option value="Job offerer">Job offerer</option>
                </select>
            </div>
            <br>
            <button type="submit" class="btn btn-outline-dark">Sign up</button>
        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBT
kF7CXvN" crossorigin="anonymous"></script>

</body>
</html>
