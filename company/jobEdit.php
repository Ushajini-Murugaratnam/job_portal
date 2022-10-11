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
                <h1 class="h3 mb-0 text-gray-800">Company  dashboard</h1> </div>
    <!-- Content Row -->
        <div class="row"></div>
    <!-- Content Row -->
        <div class="row">
            <!-- Area Chart -->
            <div >
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">update Job Details</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                    <form action="jobManage.php" method="POST">
                    <div class="form-group">
                        <label class="form-label" for="cat_id">category name</label>
                                
                        <select name="edit_cat_id" id="" class="form-control form-control-user">
                            <?php
                                include("..\database\connect.php");
                                $find="SELECT * FROM `tbl_job_cat`";
                                $result=mysqli_query($con,$find);
                                while($row=mysqli_fetch_array($result))
                                    {?>
                                <option value="<?php echo $row['cat_id'];?>">  <?php echo $row['cat_id'];?> <?php echo $row['category_name'];?></option>
                            <?php 
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="type_id">job type</label>
                        <select name="edit_type_id" id="" class="form-control form-control-user">
                            <?php
                                include("..\database\connect.php");
                                $find="SELECT * FROM `tbl_job_type`";
                                $result=mysqli_query($con,$find);
                                while($row=mysqli_fetch_array($result))
                                    {?>
                                <option value="<?php echo $row['type_id'];?>"> <?php echo $row['type_id'];?> <?php echo $row['job_type'];?> </option>
                            <?php 
                            }
                            ?>
                        </select>
                    </div>                    
                                <?php   
                                include("..\database\connect.php");
                                    //Retrive data
                                    if(isset($_POST['edit_btn']))
                                    {
                                        $id = $_POST['edit_id'];
                                        $editSql="SELECT * FROM `tbl_job` WHERE job_id='$id'  and company_id =$loggedin_id";
                                        $Query_run=mysqli_query($con,$editSql);
                                    foreach($Query_run as $row)
                                    {
                                ?>
                             <div class="form-group">
                                <input type="hidden" name="" id="" value="<?php echo $row['company_id'];?>">
                              </div> 
                            <div class="form-group">
                                <label for="job_id"> job id</label>
                                <input type="text" class="form-control form-control-user" readonly name="edit_job_id" value="<?php echo $row['job_id']?>">
                            </div> 
                            <div class="form-group">
                                <label for="job_tittle"> job tittle</label>
                                <input type="text" class="form-control form-control-user" id="job_tittle" name="edit_job_tittle" placeholder="job_tittle" value="<?php echo $row['job_desc']?>">
                            </div>
                            <div class="form-group">
                                <label for="job_description"> job description</label>
                                <input type="text" class="form-control form-control-user" id="job_desc" name="edit_job_desc" placeholder="job_desc" value="<?php echo $row['job_desc']?>">
                            </div>
                            <div class="form-group">
                                <label for="job_salary"> job salary</label>
                                <input type="text" class="form-control form-control-user" id="job_salary" name="edit_job_salary" placeholder="job_salary" value="<?php echo $row['job_salary']?>">
                            </div>
                            <div class="form-group">                                
                                <label for="contact_name"> job contact name</label>
                                <input type="text" class="form-control form-control-user" id="contact_name" name="edit_contact_name" placeholder="contact_name" value="<?php echo $row['contact_name']?>">
                            </div>
                            <div class="form-group">
                                <label for="email"> contact email</label>
                                <input type="email" class="form-control form-control-user" id="email" name="edit_email" placeholder="email" value="<?php echo $row['email']?>">
                            </div>
                            <div class="form-group">
                                <label for="mobile"> mobile</label>
                                <input type="number" class="form-control form-control-user" id="mobile" name="edit_mobile" placeholder="mobile" value="<?php echo $row['mobile']?>">
                            </div>
                            <div class="form-group">
                            <label for="post_date"> post date</label>
                                <input type="date" class="form-control form-control-user" id="post_date" name="edit_post_date" placeholder="post_date" value="<?php echo $row['post_date']?>">
                            </div>
                            <div class="form-group">
                            <label for="end_date">end date</label>
                                <input type="date" class="form-control form-control-user" id="end_date"" name="edit_end_date" placeholder="end_date"  value="<?php echo $row['end_date']?>">
                            </div>


                            <button type="submit" class="btn btn-primary"name="updatebtn">Save changes</button>    
                            <a href="job.php" class="btn btn-primary">cancel</a>
                            <?php
                            }}
                            ?>
                        </form>
                    </div>

                </div>
            </div>
        </div>
                <!-- /.container-fluid -->
</div>
            <!-- End of Main Content -->

            <?php
include 'add/scripts.php';
include 'add/footer.php';
?>

