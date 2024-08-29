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
        <h2>Employee Registration</h2>
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
            <form action="register.php" method="post">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" aria-describedby="username">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">email</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="mb-3">
                    <label for="confirm_password" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="confirm_password" name="confirm_password">
                </div>
                <button type="submit" name="register" class="btn btn-primary">Submit</button>
                <a href="index.php" class="">Already have an account?</a>
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