<?php  include"includes/header.php" ?>

<?php  include"includes/navigation.php" ?>

  <div id="wrapper">

    <!-- Sidebar -->
    <?php  include"includes/sidebar.php" ?>

    <div id="content-wrapper">

      <div class="container-fluid">

      <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login Student</div>
      <div class="card-body">
        <form  method="post">
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" id="inputEmail"  name="email_stud" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
              <label for="inputEmail">Email address</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="inputPassword" name="password_one" class="form-control" placeholder="Password" required="required">
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
          <a class="d-block small mt-3" href="registerStudent.php">Register an Account</a>
          <a class="d-block small" href="forgot-password.php">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>

      
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <?php  include"includes/footer.php" ?>



<?php
if(isset($_POST['login']))
{
  $email_stud=$_POST['email_stud'];
  $password_one=$_POST['password_one'];
  $query="SELECT * FROM student_info WHERE email_stud='$email_stud'";
  $result_query=mysqli_query($connection,$query);
  if(!$result_query)
  {
    echo "ERROR".mysqli_error($connection);
  }
  while($row=mysqli_fetch_assoc($result_query))
  {
    $firstname_back=$row['first_name'];
    $lastname_back=$row['last_name'];
    $mobilestud_back=$row['mobile_stud'];
    $roomno_back=$row['room_no'];
    $emailstud_back=$row['email_stud'];
    $password_back=$row['password_one'];

   // print_r($row);
  }
  if($email_stud === $emailstud_back && $password_one === $password_back)
  {
    $_SESSION['first_name']=$firstname_back;
    $_SESSION['last_name']=$lastname_back;
    $_SESSION['mobile_stud']=$mobilestud_back;
    $_SESSION['room_no']=$roomno_back;
    $_SESSION['email_stud']=$emailstud_back;
    $_SESSION['password_one']=$password_back;

    header("Location: inout.php");
  }
  else{
    //echo "Error".mysqli_error($connection);
    header("Location:index.php");
  }
}
?>
                                                                 