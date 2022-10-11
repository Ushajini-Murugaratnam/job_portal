<?php include "logincheck.php"; ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JPMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>

  <section class="vh-100 gradient-custom  "     style="background:black";>
  <div class="container py-3 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-8">
        <div class="card text-black"style="border-radius: 1rem;">
          <div class="card-body text-center">
       
          <h1 class="fw-bold mb-5">Candidate Sign up now</h1>
          <?php
            if(isset($_SESSION['password_status'])&&$_SESSION['password_status']){
              echo '<div class="alert alert-danger" role="alert">Admin <span class="close">'.$_SESSION['password_status'].'
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';
              unset($_SESSION['password_status']);
            }else if(isset($_SESSION['email_status'])&&$_SESSION['email_status']){
              echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                      <strong>Admin!</strong>'.$_SESSION['email_status'].'
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';
              unset($_SESSION['email_status']);
            }else if(isset($_SESSION['status'])&&$_SESSION['status']){
              echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                      <strong>Admin!</strong>'.$_SESSION['status'].'
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';
              unset($_SESSION['status']);
            }else if(isset($_SESSION['mobile_status'])&&$_SESSION['mobile_status']){                                    
              echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong>Admin!</strong>'.$_SESSION['mobile_status'].'
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
              unset($_SESSION['mobile_status']);
            }
            ?>
        
<form name="reg" action="seekerManage.php" onsubmit="return validateForm()" method="post" id="reg" enctype="multipart/form-data" class="row g-3 needs-validation" novalidate>
      
      <!-- 2 column grid layout with text inputs for the first and last names -->
  <div class="row">
    <div class="col-md-6 mb-3">
      <div class="form-outline">
        <input type="text" id="seeker_fname" name="seeker_fname" placeholder=" Please Enter First Name"class="form-control"required />
        <div class="invalid-feedback">        Please check invalid-feedback      </div>
        <label class="form-label" for="seeker_fname">First name</label>
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <div class="form-outline">
        <input type="text" id="seeker_lname" name="seeker_lname" placeholder=" Please Enter Last Name" class="form-control"required />
        <div class="invalid-feedback">        Please check invalid-feedback      </div>
        <label class="form-label" for="seeker_lname">Last name</label>
      </div>
    </div>
  </div>
  <div class="row">
      <!-- Email input -->
    <div class="col-md-6 mb-3">
      <div class="form-outline mb-3">
        <input type="email" id="email" name="email" class="form-control" placeholder=" Please Enter Email" required />
        <div class="invalid-feedback">        Please check invalid-feedback      </div>
        <label class="form-label" for="email">Email address</label>
      </div>
    </div> 
      <!-- mobile input -->
    <div class="col-md-6 mb-3">
      <div class="form-outline mb-3">
      <input type="text" class="form-control form-control-user" placeholder=" Please Enter Mobile"name="mobile" maxlength="10"  required />
        <div class="invalid-feedback">        Please check invalid-feedback      </div>
        <label class="form-label" for="mobile">Mobile</label>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 mb-3">
      <div class="form-outline">
        <input type="password" id="password" name="password" class="form-control" placeholder=" Please Enter Password"required />
        <div class="invalid-feedback">        Please check invalid-feedback      </div>
        <label class="form-label" for="password">Password</label>
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <div class="form-outline">
        <input type="password" id="confirmpassword" name="confirmpassword" class="form-control" placeholder=" Please Enter Conform Password"required />
        <div class="invalid-feedback">Please check invalid-feedback      </div>
        <label class="form-label" for="confirmpassword">Conform Password</label>
      </div>
    </div>
  </div>
  <div class="form-outline mb-3">
    <label for="last Name">choose file</label>                 
    <input class="form-control form-control-user"  id="pdf" type="file" name="file" value="" required />
    <div class="invalid-feedback">        Please check invalid-feedback      </div>
  </div>
      <!-- Submit button -->
  <div class="d-grid gap-2 col-6 mx-auto">
    <button class="btn btn-info " type="submit" name="submit" value="Login" id="st-btn">Register</button>
  </div>  
  </form>
            

       
        </div>
      </div>
    </div>
  </div>
</section>



<?php
include 'add/scripts.php';?>