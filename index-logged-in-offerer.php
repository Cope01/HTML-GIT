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
      <div class="body_header_div">
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link text-white" href="index-logged-in.html">Job listings</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="applications.html">View your job offers</a>
            </li>
            <li class="hidden">
                <p>Your username</p>
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
                <input type= "text" class= "form-control" name= "criterium" placeholder= "Search..." aria-label= "Recipient's username" aria-describedby= "basic-addon2">
                <div class= "input-group-append">
                  <button class= "btn btn-outline-light" type= "submit">Search</button>
                </div>
              </div>
            </div> 
          </form> 
        </nav> 
      </div> 
    </header>
    <div class="container">
      <h1 id="za-poslodavce"> Job Offers </h1>
    </div>
    <main>
        <div class="container my-5 mx-auto">
            <div class="card">
                <div class="card-header white-text">
                    <img src="./images/placeholder.png" class="rounded-circle" alt="placeholder"> 
                    <strong>
                        <span>Janez Hribar</span>
                    </strong>
                </div>
                <div class="card-body">
                    <h5 class="card-title">1985-05-21, Maribor</h5>
                    <p class="card-text">CV: Download CV from this user</p>
                    <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <p class="card-text">janez@gmail.com</p>
                    <a href="#" class="btn btn-outline-dark">Contact</a>
                </div>
            </div>
            <div class="card">
                <div class="card-header white-text">
                    <img src="./images/placeholder.png" class="rounded-circle" alt="placeholder"> 
                    <strong>
                        <span>Janez Hribar</span>
                    </strong>
                </div>
                <div class="card-body">
                    <h5 class="card-title">1985-05-21, Maribor</h5>
                    <p class="card-text">CV: Download CV from this user</p>
                    <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <p class="card-text">janez@gmail.com</p>
                    <a href="#" class="btn btn-outline-dark">Contact</a>
                </div>
            </div>
            <div class="card">
                <div class="card-header white-text">
                    <img src="./images/placeholder.png" class="rounded-circle" alt="placeholder"> 
                    <strong>
                        <span>Janez Hribar</span>
                    </strong>
                </div>
                <div class="card-body">
                    <h5 class="card-title">1985-05-21, Maribor</h5>
                    <p class="card-text">CV: Download CV from this user</p>
                    <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <p class="card-text">janez@gmail.com</p>
                    <a href="#" class="btn btn-outline-dark">Contact</a>
                </div>
            </div>
            <div class="card">
                <div class="card-header white-text">
                    <img src="./images/placeholder.png" class="rounded-circle" alt="placeholder"> 
                    <strong>
                        <span>Janez Hribar</span>
                    </strong>
                </div>
                <div class="card-body">
                    <h5 class="card-title">1985-05-21, Maribor</h5>
                    <p class="card-text">CV: Download CV from this user</p>
                    <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <p class="card-text">janez@gmail.com</p>
                    <a href="#" class="btn btn-outline-dark">Contact</a>
                </div>
            </div>
            <div class="card">
                <div class="card-header white-text">
                    <img src="./images/placeholder.png" class="rounded-circle" alt="placeholder"> 
                    <strong>
                        <span>Janez Hribar</span>
                    </strong>
                </div>
                <div class="card-body">
                    <h5 class="card-title">1985-05-21, Maribor</h5>
                    <p class="card-text">CV: Download CV from this user</p>
                    <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <p class="card-text">janez@gmail.com</p>
                    <a href="#" class="btn btn-outline-dark">Contact</a>
                </div>
            </div>
        </div>
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
              <li class="page-item"><a class="page-link text-white" href="#">Previous</a></li>
              <li class="page-item"><a class="page-link text-white" href="#">1</a></li>
              <li class="page-item"><a class="page-link text-white" href="#">2</a></li>
              <li class="page-item"><a class="page-link text-white" href="#">3</a></li>
              <li class="page-item"><a class="page-link text-white" href="#">Next</a></li>
            </ul>
        </nav>
    </main>
    <footer class="text-white">
        <p>About us: <br>Some example text Some example text Some example text</p>
        <p>Contact: <br>Some example text Some example text Some example text</p>
        <p>Follow us: <br>Some example text Some example text Some example text</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>     
  </body>
</html>
