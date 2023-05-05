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
        <form method="post" id="job_form" onsubmit="return validateForm();">
            <div class="form-group">
                <label for="exampleFormControlInput1">Job name</label>
                <input type="text" name="Job_name" class="form-control" id="exampleFormControlInput1" pattern="[A-Za-z]+" placeholder="Job name" required>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput2">Job offerer</label>
                <input type="text" name="job offerer" class="form-control" id="exampleFormControlInput2" placeholder="Company name" required>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput3">Offerer number</label>
                <input type="text" name="Offerer number" class="form-control" id="exampleFormControlInput3" placeholder="123-456-789" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}" required>
            </div>
            <div class="form-group">
    <label>Select City:</label>
    <br>
    <div class="checkbox">
        <label>
            <input type="checkbox" name="city[]" value="maribor">
            Maribor
        </label>
    </div>
    <div class="checkbox">
        <label>
            <input type="checkbox" name="city[]" value="ljubljana">
            Ljubljana
        </label>
    </div>
    <div class="checkbox">
        <label>
            <input type="checkbox" name="city[]" value="celje">
            Celje
        </label>
    </div>
    <div class="checkbox">
        <label>
            <input type="checkbox" name="city[]" value="koper">
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
                    <input type="radio" name="age" value="18-24" required>
                    18-24
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="age" value="25-44" required>
                    25-44
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="age" value="45+" required>
                    45+
                </label>
            </div>
            <br>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Description</label>
                <textarea class="form-control" name="Description" id="exampleFormControlTextarea1" placeholder="Some description of the job" rows="4" required></textarea>
            </div>
            <br>
            <button type="submit" class="btn btn-outline-dark">Submit</button>
        </form>
    </div>
    <script src="main.js"></script>
</body>
</html>
