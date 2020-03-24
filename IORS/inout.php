<?php  include"includes/header.php" ?>

<?php  include"includes/navigation.php" ?>

  <div id="wrapper">

    <!-- Sidebar -->
    <?php  include"includes/sidebar.php" ?>

    <div id="content-wrapper" class="bg-dark">

      <div class="container-fluid"> <br> <br>
<div class="bg-primary">
    <h1>WELCOME "<?php echo  $_SESSION['first_name'];
     ?>"</h1> <br>    
</div>
  
<center > <br> <br>


 <div  class="btn btn-danger btn-rounded">
    <h1>OUT</h1>
    <form method="post">
    <input type="submit" name="outbtn" href="out.php" value="Click here to go out!">                   
    </form>
 </div>
</center>
<?php
if(isset($_POST['outbtn']))
{
  $f=$_SESSION['first_name'];
  $l=$_SESSION['last_name'];
  $r=$_SESSION['room_no'];
  $m=$_SESSION['mobile_stud'];
   // echo "<script>alert('data added');</script>";
    $query="INSERT INTO inout_info(first_n,last_n,room_n,mobile_n,out_time , date_n) 
    VALUES('$f','$l','$r','$m',CURRENT_TIMESTAMP(),now())";
    $request_quuery=mysqli_query($connection,$query);
    if($request_quuery)
    {
     // echo "<script>alert('data added');</script>";
     header("Location:out.php");
    }
    else{
      echo "<script>alert('error in query');</script>";
    }


}
?>      
      
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <?php  include"includes/footer.php" ?>