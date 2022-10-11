<?php
 include('session.php');
include 'add/header.php';
include 'add/navbar.php';
?>

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
<!-- Main Content -->
<div id="content">

<!-- TopBar include -->
<?php
include('add/topbar.php');
?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Company </h1>                      
        </div>
    <!-- Content Row -->
        <div class="row"></div>
    <!-- Content Row -->
        <div class="row">
            <!-- Area Chart -->
            <div >
                <div class="card shadow mb-4">
                    <!-- User Details Table -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Company Register page </h6>
                    </div>

                    <!-- Card Body -->
                    <div class="card-body">
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
                                }else if(isset($_SESSION['mobile_status'])&&$_SESSION['mobile_status']){
                                    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <strong>Admin!</strong>'.$_SESSION['mobile_status'].'
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>';
                                    unset($_SESSION['mobile_status']);
                                }else if(isset($_SESSION['status'])&&$_SESSION['status']){
                                    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                                            <strong>Admin!</strong>'.$_SESSION['status'].'
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>';
                                    unset($_SESSION['status']);
                                }
                                ?>
                        <form name="reg" action="companyManage.php" onsubmit="return validateForm()" method="post" id="reg"class="row g-3 needs-validation" novalidate>
                            <!-- 2 column grid layout with text inputs for the first and last names -->
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="company_name">company name</label>
                                        <input type="text" id="company_name" name="company_name" class="form-control" required />
        <div class="invalid-feedback">        Please check invalid-feedback      </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="web">web</label>
                                        <input type="text" id="web" name="web" class="form-control" required />
        <div class="invalid-feedback">        Please check invalid-feedback      </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline ">
                                        <label class="form-label" for="email">Email address</label>
                                        <input type="email" id="email" name="email" class="form-control" required />
        <div class="invalid-feedback">        Please check invalid-feedback      </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="mobile">mobile</label>
                                        <input type="text" id="email" maxlength="10"name="mobile" class="form-control" required />
        <div class="invalid-feedback">        Please check invalid-feedback      </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="password">Password</label>
                                        <input type="password" id="password" name="password" class="form-control" required />
        <div class="invalid-feedback">        Please check invalid-feedback      </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="confirmpassword">Confirm Password</label>
                                        <input type="password" id="confirmpassword" name="confirmpassword" class="form-control" required />
        <div class="invalid-feedback">        Please check invalid-feedback      </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="address">Address</label>
                                        <input type="text" id="address" name="address" class="form-control" required />
        <div class="invalid-feedback">        Please check invalid-feedback      </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="country">country</label>
                                        <input type="text" id="country" name="country" class="form-control" required />
        <div class="invalid-feedback">        Please check invalid-feedback      </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Submit button -->
                            <button class="btn btn-primary " type="submit"  value="Login" id="st-btn">Register</button>
                        </form>                                
                    </div>
                </div>
            </div>
        </div>
        </div> 
   
<?php
include 'add/scripts.php';
include 'add/footer.php';
?>


