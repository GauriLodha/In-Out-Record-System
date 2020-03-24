<?php  include"includes/header.php" ?>

<?php  include"includes/navigation.php" ?>

  <div id="wrapper">

    <!-- Sidebar -->
    <?php  include"includes/sidebar.php" ?>

    <div id="content-wrapper">

      <div class="container-fluid">

<form method="post">
<input type="submit" name="go" placeholder="go">
</form>
<?php
$python='C:\Users\Gau\AppData\Local\Programs\Python\Python37\\python.exe';
$pyscript1='hello.py';

    if(isset($_POST['go']))
    {
		$cmd="$python $pyscript1";
		exec($cmd);
		
	}
    
?><!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <?php  include"includes/footer.php" ?>




