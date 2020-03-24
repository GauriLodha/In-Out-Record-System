<?php  include"includes/header.php" ?>

<?php  include"includes/navigation.php" ?>

  <div id="wrapper">

    <!-- Sidebar -->
    <?php  include"includes/sidebar.php" ?>

    <div id="content-wrapper">

      <div class="container-fluid">

      <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login Warden</div>
      <div class="card-body">
        <form  method="post">
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" id="inputEmail"  name="email_warden" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
              <label for="inputEmail">Email address</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="inputPassword" name="password_o" class="form-control" placeholder="Password" required="required">
              <label for="inputPassword">Password</label>
            </div>
          </div>
          <div class="form-group">
            <div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me">
                Remember Password
              </label>
            </div>
          </div>
          <input type="submit" class="btn btn-primary btn-block" name="login"  value="Login">
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="registerWarden.php">Register an Account</a>
          <a class="d-block small" href="forgot-password.php">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>


  <?php
if(isset($_POST['login']))
{
  $email_warden=$_POST['email_warden'];
  $password_one=$_POST['password_o'];
  $query="SELECT * FROM warden_info WHERE (email_warden='$email_warden' && pass_warden='$password_one')";
  $result_query=mysqli_query($connection,$query);
  if($result_query)
  {
    while($row=mysqli_fetch_assoc($result_query))
    {
      $count= mysqli_num_rows($result_query);
      if($count>0)
      {
        header("Location:details.php");
        //  echo "<script>alert('Login Done');</script>";
      }
    }
   
  }
  else{
    echo "<script>alert('Invalid Details');</script>";
  }
}
?>
      
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <?php  include"includes/footer.php" ?>

     