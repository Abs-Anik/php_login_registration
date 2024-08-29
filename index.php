<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="header-section text-center" style="background-color: gray; height: 100px; padding: 20px; color: white">
        <h2>Employee Login</h2>
    </div>
    <div class="container mt-2">
        <?php
        if (isset($_GET['message'])) {
            echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
                <strong>" . htmlspecialchars($_GET['message']) . "</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>";
        }
        ?>
    </div>
    <div class="container d-flex justify-content-center align-items-center" style="height: 78vh;">
    <div class="row w-50 p-3">
        <div class="col-md-12">
            <form action="login.php" method="post">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" aria-describedby="username">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <button type="submit" name="login" class="btn btn-primary">Login</button>
                <a href="registration.php" class="btn btn-primary">Registration</a>
            </form>
        </div>
    </div>
</div>


    <footer>
            <div class="footer-section" style="background-color: gray; height: 50px; padding-top: 20px; padding-bottom: 40px; color: white">
                <p class="text-center">@COPY PHP - 2024</p>
            </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>