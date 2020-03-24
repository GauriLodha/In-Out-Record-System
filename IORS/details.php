<?php  include"includes/header.php" ?>

<?php  include"includes/navigation.php" ?>

  <div id="wrapper">

    <!-- Sidebar -->
    <?php  include"includes/sidebar.php" ?>

    <div id="content-wrapper">

      <div class="container-fluid">





<h1>List Of Students Out Of Campus</h1>
<div class="col-lg-12">
<table class="table table-striped table-bordered table-responsive">
<tr>
    <th>Sr No.</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Room No.</th>
    <th>Mobile No.</th>
    <th>Out Time</th>
</tr>

<?php
$query="SELECT * FROM inout_info WHERE in_time='00:00:00'";
$result_query=mysqli_query($connection,$query);
if($result_query)
{
    $id=1;
    while($row=mysqli_fetch_assoc($result_query))
    {
        $first_n=$row['first_n'];
        $last_n=$row['last_n'];
        $room_n=$row['room_n'];
        $mobile_n=$row['mobile_n'];
        $out_time=$row['out_time'];
        echo "
        <tr>
        <td>$id</td>
        <td>$first_n</td>
        <td> $last_n</td>
        <td>$room_n</td>
        <td> $mobile_n</td>
        <td> $out_time</td>
        </tr>
        "; $id++;
    }
}


?>
</table>

<form method="post">
<div class="btn btn-rounded btn-warning">
<input type="submit" name="go">
</div>
</form>
<?php
$python='C:\Users\Gau\AppData\Local\Programs\Python\Python37\\python.exe';
$pyscript1='hello.py';

    if(isset($_POST['go']))
    {
		$cmd="$python $pyscript1";
		exec($cmd);
		
	}
    
?>
</div>

       <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <?php  include"includes/footer.php" ?>
