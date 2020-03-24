<?php  include"includes/header.php" ?>

<?php  include"includes/navigation.php" ?>

  <div id="wrapper">

    <!-- Sidebar -->
    <?php  include"includes/sidebar.php" ?>

    <div id="content-wrapper" class="bg-dark">

      <div class="container-fluid"> <br> <br>
<div class="bg-primary">
<h1>"<?php echo  $_SESSION['first_name'];?>" you are out of campus.</h1> <br>
</div>  
<center > <br> <br>
<div  class="btn btn-warning btn-rounded">

            <h1>IN</h1>
            <form method="post">
            <input type="submit" name="inbtn"  value="Click here to get in! ">   
            </form>
                  
        </div>

</center>
<?php
if(isset($_POST['inbtn']))
{
  $f=$_SESSION['first_name'];
  $l=$_SESSION['last_name'];
  $r=$_SESSION['room_no'];
  $m=$_SESSION['mobile_stud'];
   // echo "<script>alert('data added');</script>";
    $query="UPDATE inout_info SET in_time=CURRENT_TIME() WHERE (first_n='$f' && last_n='$l' && room_n='$r'&& in_time='00:00:00')";
    $request_quuery=mysqli_query($connection,$query);
    if($request_quuery)
    {
      //echo "<script>alert('data updated');</script>";
      header("Location:in.php");
    }
    else{
      echo "<script>alert('error in query');</script>";
    } 
}
?>
      
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <?php  include"includes/footer.php" ?>