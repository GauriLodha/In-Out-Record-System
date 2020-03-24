<?php  include"includes/header.php" ?>

<?php  include"includes/navigation.php" ?>

  <div id="wrapper">

    <!-- Sidebar -->
    <?php  include"includes/sidebar.php" ?>

    <div id="content-wrapper">

      <div class="container-fluid">
      <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Register an Account</div>
      <div class="card-body">
        <form  method="POST">
        <fieldset>
        <legend>
            WARDEN'S DETAILS
        </legend>
        <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="firstName" name="first_name" class="form-control" placeholder="First name" required="required" autofocus="autofocus">
                  <label for="firstName">First name</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="lastName" name="last_name" class="form-control" placeholder="Last name" required="required">
                  <label for="lastName">Last name</label>
                </div>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="form-label-group">
              <input type="email" id="inputEmail" name="email_stud" class="form-control" placeholder="Email address" required="required">
              <label for="inputEmail">Email Id Of Warden</label>
            </div>
          </div>

          <div class="form-group">
                <div class="form-label-group">
                  <input type="text" id="Mb" name="mobile_stud" class="form-control" placeholder="Last name" required="required">
                  <label for="Mb">Mobile No.</label>
                </div>
              </div>
        </fieldset>

        <fieldset>
        <legend>
            PASSWORD
        </legend>
        <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="password" id="inputPassword" name="password_one" class="form-control" placeholder="Password" required="required">
                  <label for="inputPassword">Password</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="password" id="confirmPassword" name="password_confirm" class="form-control" placeholder="Confirm password" required="required">
                  <label for="confirmPassword">Confirm password</label>
                </div>
              </div>
            </div>
          </div>
        </fieldset>          
          <input type="submit" class="btn btn-primary btn-block"  name="submit" value="Register">
        </form>
<?php 
if(isset($_POST['submit']))
{// echo "<script>alert('button clicked');</script> ";
    if($_POST['password_confirm']==$_POST['password_one'])
    {
      $first_name=$_POST['first_name'];
      $last_name=$_POST['last_name']; 
      $email_warden=$_POST['email_stud'];
      $mobile_warden=$_POST['mobile_stud'];
      $password_one=$_POST['password_one'];

      $query="INSERT INTO warden_info (f_name,l_name, email_warden,mobile_warden,pass_warden)
       VALUES ('$first_name','$last_name','$email_warden','$mobile_warden','$password_one')";
      $result_query=mysqli_query($connection,$query);
      if($result_query)
      {
       // echo "<script>alert('ADDED SUCCESSFULLY');</script>";
       header("Location:loggin.php");
      }  
      else{
        echo "<script>alert('ERROR IN INSERTION');</script>";
      }
  }
}

?>
        <div class="text-center">
          <a class="d-block small mt-3" href="login.html">Login Page</a>
          <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>
        
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <?php  include"includes/footer.php" ?>