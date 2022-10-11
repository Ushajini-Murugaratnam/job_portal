<?php include "logincheck.php"; ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JPMS Company</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>

  <section class="vh-100 gradient-custom">
  <div class="container py-2 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
          <?php
                              
                                 if(isset($_SESSION['status'])&&$_SESSION['status']){
                                    echo '<div class="alert alert-success" role="alert">Admin <span class="close">'.$_SESSION['status'].'</span></div>';
                                    unset($_SESSION['status']);
                                }
                                ?>
            <div class="mb-md-5 mt-md-4 pb-1">
            <form action="" method="POST" id="signin" id="login">
              <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
              <p class="text-white-50 mb-5">Please enter your login and password!</p>

              <div class="form-outline form-white mb-4">
                <input type="email" id="email"   name="email" class="form-control form-control-lg" />
                <label class="form-label" for="email">Email</label>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="password" id="password"   name="password" class="form-control form-control-lg" />
                <label class="form-label" for="password">Password</label>
              </div>


              <button class="btn btn-outline-light btn-lg px-5" type="submit"  value="Login" id="st-btn">Login</button>


            </div>
            </form>
            <div>
              <p class="mb-0">Don't have an account? contact JPMS Admin</p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>


     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>