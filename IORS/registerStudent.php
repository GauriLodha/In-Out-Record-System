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
        <form action="registerStudent.php" method="POST">
        <fieldset>
        <legend>
            STUDENT'S DETAILS
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
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                <a>Year:</a>
                <select name="year">
                    <option name="year" value="FE">FE</option> <br>
                    <option name="year" value="SE">SE</option> <br>
                    <option name="year" value="TE">TE</option> <br>
                    <option name="year" value="BE">BE</option> <br>
                 </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                <a>Branch:</a>
                <select name="branch">
                    <option  name="branch" value="COMPUTER">COMPUTER</option> <br>
                    <option name="branch"value="ENTC">ENTC</option> <br>
                    <option name="branch" value="IT">IT</option> <br>
                    
                 </select>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" id="inputEmail" name="email_stud" class="form-control" placeholder="Email address" required="required">
              <label for="inputEmail">Email Id Of Student</label>
            </div>
          </div>

          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="Room" name="room_no" class="form-control" placeholder="First name" required="required" autofocus="autofocus">
                  <label for="Room">Room No.</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="Mb" name="mobile_stud" class="form-control" placeholder="Last name" required="required">
                  <label for="Mb">Mobile No.</label>
                </div>
              </div>
            </div>
          </div>
        </fieldset>


        <fieldset>
        <legend>
            PARENT'S DETAILS
        </legend>
        <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="firstFName" name="father_name" class="form-control" placeholder="First name" required="required" autofocus="autofocus">
                  <label for="firstFName">Father's Name</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="lastMName" name="mother_name" class="form-control" placeholder="Last name" required="required">
                  <label for="lastMName">Mother's Name</label>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" id="inputEmailP" name="email_parent" class="form-control" placeholder="Email address" required="required">
              <label for="inputEmailP">Email Id Of Parents</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="MbP"  name="mobile_parent" class="form-control" placeholder="Email address" required="required">
              <label for="MbP">Mobile No. Of Parents</label>
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
          <input type="submit" class="btn btn-primary btn-block" href="login.html" name="submit" value="Register">
        </form>
<?php
if(isset($_POST['submit']))
{// echo "<script>alert('button clicked');</script> ";
    if($_POST['password_confirm']==$_POST['password_one'])
    {
      $first_name=$_POST['first_name'];
      $last_name=$_POST['last_name'];
      $year=$_POST['year'];
      $branch=$_POST['branch'];  
      $email_stud=$_POST['email_stud'];
      $room_no=$_POST['room_no'];
      $mobile_stud=$_POST['mobile_stud'];
      $father_name=$_POST['father_name'];
      $mother_name=$_POST['mother_name'];
      $email_parent=$_POST['email_parent'];
      $mobile_parent=$_POST['mobile_parent'];
      $password_one=$_POST['password_one'];

      $query="INSERT INTO student_info (first_name, last_name, year, branch,email_stud, room_no, mobile_stud,father_name,mother_name,email_parent,mobile_parent,password_one)
       VALUES ('$first_name','$last_name',' $year',' $branch','$email_stud','$room_no','$mobile_stud','$father_name','$mother_name','$email_parent','$mobile_parent','$password_one')";
      $result_query=mysqli_query($connection,$query);
      if($result_query)
      {
       // echo "<script>alert('ADDED SUCCESSFULLY');</script>";
       header("Location:index.php");
      }  
      else{
        echo "<script>alert('ERROR IN INSERTION');</script>";
      }
  }
}

?>
        <div class="text-center">
          <a class="d-block small mt-3" href="index.php">Login Page</a>
          <a class="d-block small" href="forgot-password.php">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>
        
      
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <?php  include"includes/footer.php" ?>